<?php
use App\Http\Controllers\Guest\PageController as GuestPageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [GuestPageController::class,'index'])->name('guest.home');;
