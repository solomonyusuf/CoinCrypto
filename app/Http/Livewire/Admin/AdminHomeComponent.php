<?php

namespace App\Http\Livewire\Admin;

use App\Models\Role;
use App\Models\User;
use Livewire\Component;

use App\Models\AppSetting;
use App\Models\AppVideo;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Episode;
use App\Models\Newsletter;
use App\Models\Event;
use App\Models\Podcast;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminHomeComponent extends Component
{
    public int $count = 1;
    public int $num = 2;
    public $transition = '';
    public bool $show = true;
    public bool $showArticle = false;
    public bool $showVideo = false;
    public bool $showSecondLeft = false;
    public bool $showSecondRight = false;
    public bool $showThird = false;
    public bool $showFourth = false;
    public bool $showFifth = false;

    public bool $adminRole = false;
   
    
    public function toggleAccordion()
    {
        $this->showAccordion = !$this->showAccordion;
    }

    public function toggleDropdown()
    {
        $this->isToggled = !$this->isToggled;
    }

    public function toggleArticle()
    {
        $this->showArticle = $this->showArticle ? false : true;
    }
    public function toggleVideo()
    {
        $this->showVideo = $this->showVideo ? false : true;
    }
    public function toggleSecondLeft()
    {
        $this->showSecondLeft = $this->showSecondLeft ? false : true;
    }
    public function toggleSecondRight()
    {
        $this->showSecondRight = $this->showSecondRight ? false : true;
    }
    public function toggleThird()
    {
        $this->showThird = $this->showThird ? false : true;
    }
    public function toggleFourth()
    {
        $this->showFourth = $this->showFourth ? false : true;
    }
    public function toggleFifth()
    {
        $this->showFifth = $this->showFifth ? false : true;
    }

    public function showTransition($param)
    {
        $this->transition = $param;
    }
    public function showEvent()
    {
        $this->show = $this->show ? false : true;
    }
    public function update_status($id)
    {
        $query = ArticleCategory::find($id);
        $query->visible = !$query->visible;
        $query->save();

        toast('Updated Status','success');

        return redirect()->back();
    }
    public function update(Request $request)
    {
 
        $query = AppSetting::first(); 
        
        $query->top_left_article = $request->top_left_article ?? $query->top_left_article;
        $query->top_right_article = $request->top_right_article ?? $query->top_right_article;
        $query->second_left = $request->second_left  ?? $query->second_left;
        $query->second_right = $request->second_right  ?? $query->second_right;
        $query->third_section = $request->third_section ?? $query->third_section;
        $query->fourth_section = $request->fourth_section ?? $query->fourth_section;
        $query->fifth_section = $request->fifth_section ?? $query->fifth_section;
        $query->top_left_article_show = $request->top_left_article_show ? ($request->top_left_article_show  == 'on' ? true : false) : $query->top_left_article_show;
        $query->top_right_article_show = $request->top_right_article_show ? ($request->top_right_article_show == 'on' ? true : false) : $query->top_right_article_show;
        $query->second_left_show = $request->second_left_show ? ($request->second_left_show  == 'on' ? true : false) : $query->second_left_show;
        $query->second_right_show = $request->second_right_show ? ($request->second_right_show == 'on' ? true : false) : $query->second_right_show;
        $query->third_section_show = $request->third_section_show ? ($request->third_section_show == 'on' ? true : false) : $query->third_section_show;
        $query->fourth_section_show = $request->fourth_section_show ? ($request->fourth_section_show == 'on' ? true : false) : $query->fourth_section_show;
        $query->fifth_section_show = $request->fifth_section_show ? ($request->fifth_section_show == 'on' ? true : false) : $query->fifth_section_show;
        $query->event_section = $request->event_section ? ($request->event_section == 'on' ? true : false) : $query->event_section;
        $query->podcast = $request->podcast ? ($request->podcast == 'on' ? true : false) : $query->podcast;
        $query->newsletter = $request->newsletter ? ($request->newsletter == 'on' ? true : false) : $query->newsletter;

        $query->save();

        toast('Update Successful', 'success');

        return redirect()->back();
    }
    
    public function render()
    {
        $role = User::find(auth()->user()?->id)->role;

        $this->adminRole = $role->title == 'superadmin' ? true : false;

        $setting = AppSetting::first();

        $latest = Article::find($setting?->top_left_article);
        
        $video = AppVideo::find($setting?->top_right_article);
                            
       
        $latests = Article::where(['visible'=> true])->orderByDesc('created_at')
                            ->whereDate('created_at', '=', Carbon::now())
                            ->limit(5)
                            ->get();
                            
        $articles = Article::where([
            'visible'=> true,
            'category_id'=> $setting?->third_section,
            ])->orderByDesc('created_at')->limit(30)->get();
       
         $videos = AppVideo::where([
            'visible'=> true,
            ])->orderByDesc('created_at')->limit(30)->get();

        $categories =  ArticleCategory::get();

        $excludedTitles = [ $setting?->second_right, $setting?->second_left, $setting?->third_section, $setting?->fourth_section, $setting?->fifth_section];

        // $categories_display = ArticleCategory::whereNotIn('id', $excludedTitles)
        //                     ->where(['visible'=> true])
        //                     ->with(['articles' => function ($query) {
        //                         $query->orderByDesc('created_at')->take(4);  
        //                     }])->get();

        $categories_display = ArticleCategory::whereNotIn('id', $excludedTitles)
                                            ->with('latestArticles')
                                            ->get();

                                    
   
        $newsletters = Newsletter::where(['visible'=> true])->orderByDesc('created_at')->limit(6)->get();
       
        $podcasts = Episode::where(['visible'=> true])->orderByDesc('created_at')->limit(9)->get();
        
        $event = Event::where('event_date', '>', Carbon::now())
                    ->where('visible', '=', true)
                    ->orderBy('event_date', 'asc')  
                    ->first();

         $countdownSeconds = $event ? Carbon::parse($event?->event_date)->diffInSeconds(Carbon::now()) : 0;
        
         $top_category = ArticleCategory::find($setting?->second_right);
 
         $top = Article::where([
            'visible'=> true,
            'category_id'=> $top_category?->id
            ])->orderByDesc('created_at')->limit(12)->get();
 
         $posts = Article::where([
                'visible'=> true])->orderByDesc('created_at')->limit(200)->get();
     
        return view('livewire.admin.admin-home-component',[
            'video'=> $video,
            'videos'=> $videos,
            'latest'=> $latest,
            'latests'=> $latests,
            'articles'=> $articles,
            'podcasts'=> $podcasts,
            'posts'=> $posts,
            'event'=> $event,
            'top_category'=> $top_category,
            'top'=> $top,
            'countdownSeconds'=> $countdownSeconds,
            'newsletters'=> $newsletters,
            'categories'=> $categories,
            'breakdown'=> $categories_display,
            'setting'=> $setting,
        ]);
    }
}


