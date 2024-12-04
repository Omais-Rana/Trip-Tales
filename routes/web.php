<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;
use App\Banner;
use App\PopularDest;
use App\TourCategory;

Route::get('/', function () {
    $banners = Banner::orderBy('created_at', 'desc')->get();
    $popular = PopularDest::orderBy('created_at', 'desc')->get();
    $popularUSA = PopularDest::where('country', 'USA')->orderBy('created_at', 'desc')->get();
    $popularPAK = PopularDest::where('country', 'Pakistan')->orderBy('created_at', 'desc')->get();
    $tourNat = TourCategory::where('type', 'National')->orderBy('created_at', 'desc')->get();
    $tourInter = TourCategory::where('type', 'International')->orderBy('created_at', 'desc')->get();
    return view('home', compact('banners', 'popular', 'popularUSA', 'popularPAK', 'tourNat', 'tourInter'));
});


// Route::get('/', function () {
//     return view('home');
// })->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
