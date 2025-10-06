<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SeoPropertyController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/register', [AuthController::class, 'register'])->name('user.register');
Route::post('/login', [AuthController::class, 'login'])->name('user.login');
Route::delete('/logout', [AuthController::class, 'logout'])->name('user.logout')->middleware('auth:sanctum');


Route::get('/hero/page', [HomeController::class, 'homePage']);         // Get all
Route::post('/hero/store', [HomeController::class, 'storeHero']);      // Insert
Route::put('/hero/update/{id}', [HomeController::class, 'updateHero']); // Update
Route::delete('/hero/delete/{id}', [HomeController::class, 'deleteHero']); // Delete

Route::get('/about/data', [HomeController::class, 'aboutData']);
Route::get('/social/data', [HomeController::class, 'socialData']);

Route::get('/contact', [ContactController::class, 'contactPage'])->name('contact.page');

Route::get('/resume', [ResumeController::class, 'projectPage'])->name('project.page');

Route::get('/hero/pages', [HomeController::class, 'heroData'])->name('hero.page');
Route::get('/about/page', [HomeController::class, 'aboutData'])->name('about.page');
Route::get('/social/page', [HomeController::class, 'socialData'])->name('social.page');

Route::get('/project', [ProjectController::class, 'projectPage'])->name('project.page');
Route::get('/project/data', [ProjectController::class, 'projectData'])->name('project.data');
Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('project.show');
Route::post('/projects/store', [ProjectController::class, 'store'])->name('project.store');
Route::post('/projects/{id}', [ProjectController::class, 'update'])->name('project.update'); // or put()
Route::delete('/projects/{id}', [ProjectController::class, 'destroy']);

Route::get('/resume/link', [ResumeController::class, 'resumeLink'])->name('resume.link');
Route::get('/experiences', [ResumeController::class, 'experiencesData'])->name('experiences.data');
Route::get('/education', [ResumeController::class, 'educationData'])->name('education.data');

Route::post('/contact/request', [ContactController::class, 'contactRequest'])->name('contact.request');

Route::get('/seo/{pageName}', [SeoPropertyController::class, 'getSeoByPage']);
Route::post('/seo', [SeoPropertyController::class, 'store']);
Route::post('/seo/{id}', [SeoPropertyController::class, 'update']);

Route::get('/services', [ServiceController::class, 'index']);
Route::post('/services', [ServiceController::class, 'storeService']);
Route::post('/skills', [ServiceController::class, 'storeSkill']);

Route::post('/contact', [ContactController::class, 'store']);
Route::get('/contacts', [ContactController::class, 'index']);
