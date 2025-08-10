<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\SkillsController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/resume', [HomeController::class, 'resume'])->name('resume');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [AdminController::class,'index'])->name('dashboard');
    Route::get('/profile', [AdminController::class,'edit'])->name('profile');
    Route::put('/profile/{user}', [AdminController::class,'update']);
    Route::get('/slider', [AdminController::class,'slider'])->name('slider');
    Route::put('/slider', [AdminController::class,'storeSlider'])->name('slider.store');
    Route::put('/slider/{id}', [AdminController::class,'updateSlider'])->name('slider.update');
    Route::delete('/slider/{id}', [AdminController::class,'destroySlider'])->name('slider.destroy');
    Route::get('/experience', [ExperienceController::class, 'index'])->name('experience');
    Route::post('/experience', [ExperienceController::class, 'createExperience'])->name('experience.create');
    Route::post('/experience/{id}/edit', [ExperienceController::class, 'editExperience'])->name('experience.edit');
    Route::delete('/experience/{id}', [ExperienceController::class, 'destroyExperience'])->name('experience.destroy');
    Route::get('/education', [EducationController::class, 'index'])->name('education');
    Route::post('/education', [EducationController::class, 'createEducation'])->name('education.create');
    Route::post('/education/{id}/edit', [EducationController::class, 'editEducation'])->name('education.edit');
    Route::delete('/education/{id}', [EducationController::class, 'destroyEducation'])->name('education.destroy');
    Route::get('/skills', [SkillsController::class, 'index'])->name('skills');
    Route::post('/skills', [SkillsController::class, 'createSkill'])->name('skills.create');
    Route::post('/skills/{id}/edit', [SkillsController::class, 'editSkill'])->name('skills.edit');
    Route::delete('/skills/{id}', [SkillsController::class, 'destroySkill'])->name('skills.destroy');
});
