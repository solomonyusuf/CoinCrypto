<?php

namespace App\Http\Livewire\Admin;

use App\Models\AppVideo;
use App\Models\Article;
use App\Models\Newsletter;
use App\Models\Podcast;
use App\Models\User;
use App\Models\Event;
use Livewire\Component;

class DashboardComponent extends Component
{
    public $users;
    public $articles;
    public $newsletters;
    public $events;
    public $videos;
    public $podcasts;

    public function render()
    {
        $this->users = User::count();
        $this->articles = Article::count();
        $this->newsletters = Newsletter::count();
        $this->events = Event::count();
        $this->videos = AppVideo::count();
        $this->podcasts = Podcast::count();

        return view('livewire.admin.dashboard-component')
        ->layout('layouts.admin');
    }
}
