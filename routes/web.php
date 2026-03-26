<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
