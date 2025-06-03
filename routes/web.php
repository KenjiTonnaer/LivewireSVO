<?php

use App\Livewire\ArticleIndex;
use App\Livewire\ArticleList;
use App\Livewire\CreateArticle;
use App\Livewire\Dashboard;
use App\Livewire\EditArticle;
use Illuminate\Support\Facades\Route;
use App\Livewire\Search;
use App\Livewire\ShowArticle;
use App\Livewire\UserDashboard;
use App\Livewire\AdminComponent;

Route::get('/', ArticleIndex::class);
Route::get('/articles/{article}', ShowArticle::class);

Route::middleware(['auth'])->group(function () {
    Route::get('/account', UserDashboard::class)->name('account.dashboard');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/dashboard/articles', ArticleList::class);
    Route::get('/dashboard/articles/create', CreateArticle::class);
    Route::get('/dashboard/articles/{article}/edit', EditArticle::class);
});

Route::get('/admin', AdminComponent::class)->middleware(['auth'])->name('admin');





// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
