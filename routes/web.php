<?php

use App\Http\Controllers\EditorController;
use App\Http\Livewire\Admin\ArticleComponent;
use App\Http\Livewire\Admin\ArticleTagComponent;
use App\Http\Livewire\Admin\DashboardComponent;
use App\Http\Livewire\Admin\EventComponent;
use App\Http\Livewire\Admin\NewsletterComponent;
use App\Http\Livewire\Admin\PodcastsComponent;
use App\Http\Livewire\Admin\UsersComponent;
use App\Http\Livewire\Admin\VideosComponent;
use App\Http\Livewire\ForgotPasswordComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\LoginComponent;
use App\Http\Livewire\RegisterComponent;
use App\Http\Livewire\ResetComponent;
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

Route::get('/', HomeComponent::class)->name('home');
Route::get('/login', LoginComponent::class)->name('login');
Route::get('/register', RegisterComponent::class)->name('register');
Route::get('/forgot-password', ForgotPasswordComponent::class)->name('forgot_password');
Route::get('/reset-password/{token}', ResetComponent::class)->name('reset_password');


Route::post('/upload_image', [EditorController::class, 'uploadImage'])->name('upload_image');


Route::middleware('auth:sanctum')->group(function () {
    Route::get('/dashboard', DashboardComponent::class)->name('dashboard');
    Route::get('/article-tags', ArticleTagComponent::class)->name('article_tags');
    Route::get('/articles', ArticleComponent::class)->name('admin_articles');
    Route::get('/events', EventComponent::class)->name('admin_event');
    Route::get('/users', UsersComponent::class)->name('admin_users');
    Route::get('/newsletter', NewsletterComponent::class)->name('admin_newsletter');
    Route::get('/podcasts', PodcastsComponent::class)->name('admin_podcasts');
    Route::get('/videos', VideosComponent::class)->name('admin_videos');
    
    //REQUESTS
    Route::post('/create_article', [ArticleComponent::class, 'create'])->name('create_article');
    Route::post('/update_article/{id}', [ArticleComponent::class, 'update'])->name('update_article');
    //Route::get('/delete_article/{id}', [ArticleComponent::class, 'delete'])->name('delete_article');
 
});

Route::get('/logout', function(){
    auth()->logout();
    toast('Logout Success', 'success');
    return redirect()->route('home');
})->name('logout');
