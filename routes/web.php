<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ArtworkController;
use App\Http\Controllers\TutorialController;
use App\Http\Controllers\GuestTipController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdmindashController;
use App\Http\Controllers\TransactionController;


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/', function () {
    return view('home');
});
Route::get('/blogss', function () {
    return view('blogss');
});
Route::get('/pencilart', function () {
    return view('categories.pencilart');
});
Route::get('/penart', function () {
    return view('categories.penart');
});
Route::get('/stencilart', function () {
    return view('categories.stencilart');
});
Route::get('/doodleart', function () {
    return view('categories.doodleart');
});
Route::get('/digitalart', function () {
    return view('categories.digitalart');
});
Route::get('/typographyart', function () {
    return view('categories.typographyart');
});
Route::get('/mandalaart', function () {
    return view('categories.mandalaart');
});
Route::get('/colorart', function () {
    return view('categories.colorart');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/commissioning', function () {
    return view('commissioning');
});
Route::get('/artworkListing', function () {
    return view('artworkListing');
});


// User Registration
Route::get('/register', [RegistrationController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegistrationController::class, 'register'])->name('register.store');

// Artist Registration
Route::get('/artist/register', [RegistrationController::class, 'showArtistRegistrationForm'])->name('artist.register');
Route::post('/artist/register', [RegistrationController::class, 'registerArtist'])->name('artist.register.store');

//Artist Login
Route::get('/artist/login', function () {
    return view('auth.login1');
})->name('artist.login');

//User Login
Route::get('/user/login', function () {
    return view('auth.login');
})->name('user.login');


Route::get('/logout', 'AuthController@logout')->name('logout');



Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [AdmindashController::class, 'index'])->name('dashboard');
Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');




Route::get('/artist/post_artworks', function () {
    return view('artist.post_artworks');
});
Route::get('/artist/blog_post', function () {
    return view('artist.blog_post');
});
Route::get('/artist/post_tutorial', function () {
    return view('artist.post_tutorial');
});



//Artist Profile Updation
Route::get('/update-profile', [ProfileController::class, 'showUpdateForm'])->name('update-profile');
Route::post('/update-profile', [ProfileController::class, 'updateProfile']);


Route::get('/artist/edit', [BlogController::class, 'index'])->name('artist.edit');
Route::post('/artist/edit', [BlogController::class, 'store'])->name('artist.store');
Route::delete('/artist/{id}', [BlogController::class, 'destroy'])->name('artist.destroy');
Route::get('/artist/edit/{id}/form', [BlogController::class, 'editForm'])->name('artist.editForm');


Route::middleware(['auth'])->group(function () {
    Route::get('/post-artwork', [ArtworkController::class, 'create']);
    Route::post('/post-artwork', [ArtworkController::class, 'store'])->name('post.artwork');
    Route::get('/user-artworks', [ArtworkController::class, 'index'])->name('user.artworks');
    Route::get('/edit-artwork/{artwork}', [ArtworkController::class, 'edit'])->name('edit.artwork');
    Route::put('/update-artwork/{artwork}', [ArtworkController::class, 'update'])->name('update.artwork');
    Route::delete('/delete-artwork/{artwork}', [ArtworkController::class, 'destroy'])->name('delete.artwork');
    Route::get('/recent-artworks', [ArtworkController::class, 'recentPosts'])->name('recent.artworks');
    Route::get('/user/all-artworks', [ArtworkController::class, 'allArtworks'])->name('user.all_artworks');

    Route::get('/user/liked-artworks', [ArtworkController::class, 'likedArtworks'])->name('user.liked_artworks');
    Route::post('/user/artworks/{artwork}/like', [ArtworkController::class, 'like'])->name('artworks.like');
    Route::post('/user/artworks/{artwork}/comment', [ArtworkController::class, 'comment'])->name('artworks.comment');

    Route::get('/user/comments', [ArtworkController::class, 'userComments'])->name('user.comments');
    Route::get('/user/comments/{comment}/edit', [ArtworkController::class, 'editComment'])->name('comments.edit');
    Route::put('/user/comments/{comment}', [ArtworkController::class, 'updateComment'])->name('comments.update');
    Route::delete('/user/comments/{comment}', [ArtworkController::class, 'destroyComment'])->name('comments.destroy');
    Route::delete('/delete-artwork/{artwork}', [ArtworkController::class, 'destroy'])->name('delete.artwork');
    Route::get('/user/liked-artworks', [ArtworkController::class, 'likedArtworks'])->name('user.liked_artworks');

    Route::get('/top-user-artworks', [ArtworkController::class, 'topUserArtworks'])->name('top.user.artworks');

    Route::get('/search', [ArtworkController::class,'search'])->name('artworks.search');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/create-blog-post', [BlogController::class, 'create']);
    Route::post('/create-blog-post', [BlogController::class, 'store'])->name('post.blog');
    Route::get('/user-blog-posts', [BlogController::class, 'index'])->name('user.blog_posts');
    Route::get('/edit-blog-post/{blog}', [BlogController::class, 'edit'])->name('edit.blog_post');
    Route::put('/update-blog-post/{blog}', [BlogController::class, 'update'])->name('update.blog_post');
    Route::delete('/blog/{blog}', [BlogController::class, 'destroy'])->name('delete.blog_post');
    Route::get('/blogs/all', [BlogController::class, 'allBlogs'])->name('blogs.all_blogs');

});


Route::middleware(['auth'])->group(function () {
    Route::get('/post-tutorial', [TutorialController::class, 'create'])->name('post.tutorial');
    Route::post('/post-tutorial', [TutorialController::class, 'store'])->name('post.tutorial');
    Route::get('/user-tutorial', [TutorialController::class, 'index'])->name('user.tutorial');
    Route::delete('/user-tutorial/{tutorial}', [TutorialController::class, 'destroy'])->name('user.tutorial.delete');
    Route::get('/user-tutorial/{tutorial}/edit', [TutorialController::class, 'edit'])->name('user.tutorial.edit');
    Route::put('/user-tutorial/{tutorial}', [TutorialController::class, 'update'])->name('user.tutorial.update');
    Route::get('/all-tutorial', [TutorialController::class, 'displayall'])->name('tutorial');

});

use App\Http\Controllers\TipController;
Route::get('/artist/post_tipstricks', function () {
    return view('artist.post_tipstricks');
});

Route::post('/tips', [TipController::class, 'store'])->name('tips.store');
Route::get('/tips', [TipController::class, 'index'])->name('tips.index');
Route::get('/tips/{tip}/edit', [TipController::class, 'edit'])->name('tips.edit');
Route::delete('/tips/{tip}', [TipController::class, 'destroy'])->name('tips.destroy');
Route::put('/tips/{tip}', [TipController::class, 'update'])->name('tips.update');
Route::get('/tips/{tip}/download', [TipController::class, 'download'])->name('tips.download');

//User - All Tips
Route::get('/guest/tips', [GuestTipController::class, 'index'])->name('guest.tips.index');
Route::get('/guest/tips/download/{tip}', [GuestTipController::class, 'download'])->name('guest.tips.download');


Route::get('/announcements', [AnnouncementController::class, 'index'])->name('announcements.index');
Route::get('/announcements/create', [AnnouncementController::class, 'create'])->name('announcements.create');
Route::post('/announcements', [AnnouncementController::class, 'store'])->name('announcements.store');
Route::get('/announcements/show', [AnnouncementController::class, 'show'])->name('announcements.show');
Route::delete('/announcements/{id}', [AnnouncementController::class, 'destroy'])->name('announcements.destroy');


use App\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'index']);
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');


use App\Http\Controllers\ArtworksController;

Route::get('/artworks', [ArtworksController::class, 'index']);
Route::delete('/artworks/{artwork}', [ArtworksController::class, 'destroy'])->name('artworks.destroy');

use App\Http\Controllers\BlogsController;

Route::get('/blogs', [BlogsController::class, 'index']);
Route::delete('/blogs/{blog}', [BlogsController::class, 'destroy'])->name('blogs.destroy');


use App\Http\Controllers\TutorialsController;

Route::get('/tutorials', [TutorialsController::class, 'index']);
Route::delete('/tutorials/{tutorial}', [TutorialsController::class, 'destroy'])->name('tutorials.destroy');


use App\Http\Controllers\TipsController;

Route::get('/tipsadmin', [TipsController::class, 'index']);
Route::delete('/tipss/{tip}', [TipsController::class, 'destroy'])->name('tips.destroy');


use App\Http\Controllers\Profile_updateController;

Route::get('/profile', [Profile_updateController::class, 'edit'])->name('profile.edit');
Route::put('/profile', [Profile_updateController::class, 'update'])->name('profile.update');


use App\Http\Controllers\MoneyRequestController;

Route::get('/money-request', [MoneyRequestController::class, 'showMoneyRequestForm'])->name('money_request.form');
Route::post('/money-request', [MoneyRequestController::class, 'sendMoneyRequest'])->name('send.money.request');
Route::match(['get', 'post'], '/process-payment/{transaction}', [MoneyRequestController::class, 'processRazorpayPayment'])->name('process.payment');
Route::match(['get', 'post'], '/handle-payment/{transaction}', [MoneyRequestController::class, 'handleRazorpayPayment'])->name('handle.payment');
Route::get('/money-requests', [MoneyRequestController::class, 'showMoneyRequests'])->name('money_requests');

use App\Http\Controllers\PaymentStatusController;

Route::get('/payment-status/{transaction}', [PaymentStatusController::class, 'show'])->name('payment_status.show');

use App\Http\Controllers\SentMoneyRequestController;

Route::get('/sent-money-requests', [SentMoneyRequestController::class, 'index'])->name('sent_money_requests');
Route::get('/payment-history', [SentMoneyRequestController::class, 'user'])->name('payment_history');


Route::get('/user/arts', [DashboardController::class, 'allArtworks'])->name('user.arts');
Route::get('/user/blogs', [DashboardController::class, 'allBlogs'])->name('user.blogs');
Route::get('/user/tips', [DashboardController::class, 'index'])->name('user.tips.index');
Route::get('/user/tips/download/{tip}', [DashboardController::class, 'download'])->name('user.tips.download');


Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');
Route::get('/earnings', [TransactionController::class, 'earningOverview'])->name('earnings.index');