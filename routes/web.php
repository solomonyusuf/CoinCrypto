<?php

use App\Http\Controllers\EditorController;
use App\Http\Livewire\Admin\AllEpisodesComponent;
use App\Http\Livewire\Admin\AppSettingComponent;
use App\Http\Livewire\Admin\ArticleComponent;
use App\Http\Livewire\Admin\PodcastTagComponent;
use App\Http\Livewire\Admin\ReleaseComponent;
use App\Http\Livewire\Admin\VideoTagComponent;
use App\Http\Livewire\Admin\ArticleTagComponent;
use App\Http\Livewire\Admin\DashboardComponent;
use App\Http\Livewire\Admin\EditorComponent;
use App\Http\Livewire\Admin\EventComponent;
use App\Http\Livewire\Admin\NewsletterComponent;
use App\Http\Livewire\Admin\PodcastsComponent;
use App\Http\Livewire\Admin\UsersComponent;
use App\Http\Livewire\Admin\VideosComponent;
use App\Http\Livewire\AuthorComponent;
use App\Http\Livewire\CategoryDetailComponent;
use App\Http\Livewire\ForgotPasswordComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\LoginComponent;
use App\Http\Livewire\NewsDetailComponent;
use App\Http\Livewire\PageEventComponent;
use App\Http\Livewire\PageNewsletterComponent;
use App\Http\Livewire\PagePodcastComponent;
use App\Http\Livewire\PagePriceComponent;
use App\Http\Livewire\PageSponsorsComponent;
use App\Http\Livewire\PageVideoComponent;
use App\Http\Livewire\ProfileComponent;
use App\Http\Livewire\RegisterComponent;
use App\Http\Livewire\ResetComponent;
use App\Http\Livewire\Static\AboutComponent;
use App\Http\Livewire\Static\AccessibilityComponent;
use App\Http\Livewire\Static\AdvertiseComponent;
use App\Http\Livewire\Static\ContactComponent;
use App\Http\Livewire\Static\CookieComponent;
use App\Http\Livewire\Static\EthicsComponent;
use App\Http\Livewire\Static\MastheadComponent;
use App\Http\Livewire\Static\PrivacyComponent;
use App\Http\Livewire\Static\SellInfoComponent;
use App\Http\Livewire\Static\SitemapComponent;
use App\Http\Livewire\Static\TermsComponent;
use App\Http\Livewire\TopTickerComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//         return view('layouts.app1');
//     })->name('home');
Route::get('/', HomeComponent::class)->name('home');
Route::get('/prices', PagePriceComponent::class)->name('prices');
Route::get('/event', PageEventComponent::class)->name('events');
   
Route::get('/start-queue', function () {
    Artisan::call('queue:work --daemon'); // Starts queue worker
    toast("Queue Running", 'success');
    return redirect()->back();
});

Route::get('/login', LoginComponent::class)->name('login');
Route::get('/register', RegisterComponent::class)->name('register');
Route::get('/forgot-password', ForgotPasswordComponent::class)->name('forgot_password');
Route::get('/reset-password/{token}', ResetComponent::class)->name('reset_password');
Route::get('/videos', PageVideoComponent::class)->name('videos');
Route::get('/sponsored', PageSponsorsComponent::class)->name('sponsored');
Route::get('/podcasts', PagePodcastComponent::class)->name('podcasts');
Route::get('/newsletter', PageNewsletterComponent::class)->name('newsletters');


Route::get('/about-us', AboutComponent::class)->name('about_us');
Route::get('/accessibility', AccessibilityComponent::class)->name('accessibility');
Route::get('/advertise', AdvertiseComponent::class)->name('advertise');
Route::get('/contact', ContactComponent::class)->name('contact');
Route::get('/cookie', CookieComponent::class)->name('cookie');
Route::get('/ethics', EthicsComponent::class)->name('ethics');
Route::get('/masthead', MastheadComponent::class)->name('masthead');
Route::get('/privacy', PrivacyComponent::class)->name('privacy');
Route::get('/sell-info', SellInfoComponent::class)->name('sell_info');
Route::get('/sitemap', SitemapComponent::class)->name('sitemap');
Route::get('/terms', TermsComponent::class)->name('terms');

//-----Static---------------------------------------
Route::get('/fetch-prices', [TopTickerComponent::class, 'fetchAPIPrice']);

Route::get('/category-{category_id}',CategoryDetailComponent::class)->name('category_detail');
Route::get('/newsletter-{news_id}',PageNewsletterComponent::class)->name('newsletter_detail');
Route::get('/author-{auth_id}',AuthorComponent::class)->name('author_detail');
Route::get('/news/{slug}-{news_id}',NewsDetailComponent::class)->name('article_detail');
Route::get('/podcast-details-{podcast_id}',PagePodcastComponent::class)->name('podcast_detail');
Route::get('/videos-{video_id}',PageVideoComponent::class)->name('video_detail');

Route::get('/confirm-subscription-{sub_id}',[PageNewsletterComponent::class, 'activate_sub'])->name('activate_sub');

//Request
Route::post('/subscribe/{id}', [PageNewsletterComponent::class, 'subscribe'])->name('subscribe');
    
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/profile', ProfileComponent::class)->name('profile');
    
    //REQUEST
    Route::post('/update-profile', [ProfileComponent::class, 'update'])->name('update_profile');
    

});



Route::middleware(['auth:sanctum', 'user_access'])->group(function () {
    Route::get('/dashboard', DashboardComponent::class)->name('dashboard');
    Route::get('/admin-article-tags', ArticleTagComponent::class)->name('article_tags');
    Route::get('/admin-articles', ArticleComponent::class)->name('admin_articles');
    Route::get('/admin-events', EventComponent::class)->name('admin_event');
    Route::get('/admin-users', UsersComponent::class)->name('admin_users');
    Route::get('/admin-newsletter', NewsletterComponent::class)->name('admin_newsletter');
    Route::get('/admin-podcasts', PodcastsComponent::class)->name('admin_podcasts');
    Route::get('/admin-app-videos', VideosComponent::class)->name('admin_videos');
    Route::get('/admin-editor-{temp_id}', EditorComponent::class)->name('admin_editor');
    Route::get('/admin-video-tags', VideoTagComponent::class)->name('admin_video_tags');
    Route::get('/admin-episodes', AllEpisodesComponent::class)->name('admin_episode');
    Route::get('/admin-settings', AppSettingComponent::class)->name('admin_setting');
    Route::get('/admin-release_news-{sub_id}', ReleaseComponent::class)->name('release_news');
    
    //REQUESTS
    Route::post('/upload_image', [EditorController::class, 'uploadImage'])->name('upload_image');
    Route::post('/update-setting', [AppSettingComponent::class, 'update'])->name('update_setting');


    Route::post('/create_article', [ArticleComponent::class, 'create'])->name('create_article');
    Route::post('/update_article/{id}', [ArticleComponent::class, 'update'])->name('update_article');
    Route::post('/update_editor/{id}', [EditorComponent::class, 'update_editor'])->name('update_editor');
    Route::get('/delete_article/{id}', [ArticleComponent::class, 'delete'])->name('delete_article');
 
    Route::post('/create_events', [EventComponent::class, 'create'])->name('create_event');
    Route::post('/update_events/{id}', [EventComponent::class, 'update'])->name('update_event');
    Route::get('/delete_events/{id}', [EventComponent::class, 'delete'])->name('delete_event');
 
    Route::post('/create_video', [VideosComponent::class, 'create'])->name('create_video');
    Route::post('/update_video/{id}', [VideosComponent::class, 'update'])->name('update_video');
    Route::get('/delete_video/{id}', [VideosComponent::class, 'delete'])->name('delete_video');
 
    Route::post('/create_podcast', [PodcastsComponent::class, 'create'])->name('create_podcast');
    Route::post('/update_podcast/{id}', [PodcastsComponent::class, 'update'])->name('update_podcast');
    Route::get('/delete_podcast/{id}', [PodcastsComponent::class, 'delete'])->name('delete_podcast');
 
    Route::post('/create_episode', [AllEpisodesComponent::class, 'create'])->name('create_episode');
    Route::post('/update_episode/{id}', [AllEpisodesComponent::class, 'update'])->name('update_episode');
    Route::get('/delete_episode/{id}', [AllEpisodesComponent::class, 'delete'])->name('delete_episode');
 
 
    Route::post('/create_videotag', [VideoTagComponent::class, 'create'])->name('create_videotag');
    Route::post('/update_videotag/{id}', [VideoTagComponent::class, 'update'])->name('update_videotag');
    Route::get('/delete_videotag/{id}', [VideoTagComponent::class, 'delete'])->name('delete_videotag');
 
    Route::post('/create_publication/{id}', [NewsletterComponent::class, 'publish'])->name('create_publication');
    
    Route::post('/create_newsletter', [NewsletterComponent::class, 'create'])->name('create_newsletter');
    Route::post('/update_newsletter/{id}', [NewsletterComponent::class, 'update'])->name('update_newsletter');
    Route::get('/delete_newsletter/{id}', [NewsletterComponent::class, 'delete'])->name('delete_newsletter');
 
    Route::post('/create-user', [UsersComponent::class, 'create'])->name('create_user');
    Route::post('/update-user/{id}', [UsersComponent::class, 'update'])->name('update_user');
    
});

Route::get('/logout', function(){
    auth()->logout();
    toast('Logout Success', 'success');
    return redirect()->route('home');
})->name('logout');
