<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoLanguageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherPanelController;
use App\Http\Controllers\LessonController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [InfoLanguageController::class, 'index'])->name('index');
Route::get('/privacy', [InfoLanguageController::class, 'privacy'])->name('privacy');
Route::get('/directions', [InfoLanguageController::class, 'direction'])->name('direction');
Route::get('/directions/{direction}', [InfoLanguageController::class, 'directionSpecific'])->name('directionSpecific');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
// CRUD действия с направлениями обучения
Route::prefix('/directions')->middleware('check_admin')->group(function () {
    Route::get('/actions/add', [InfoLanguageController::class, 'directionAddView'])->name('direction.add');
    Route::post('/', [InfoLanguageController::class, 'addDirection'])->name('direction.added');
    Route::delete('/{direction}', [InfoLanguageController::class, 'deleteDirection'])->name('direction.deleted');
    Route::get('/{direction}/edit', [InfoLanguageController::class, 'editDirectionView'])->name('direction.edit');
    Route::patch('/{direction}', [InfoLanguageController::class, 'updateDirection'])->name('direction.update');
});
// Кабинет администратора
Route::get('/admin-panel', [AdminPanelController::class, 'index'])->name('adminPanel')->middleware('check_admin');
// CRUD действия в панели администратора с пользователями
Route::prefix('/admin-panel')->middleware('check_admin')->group(function () {
    Route::get('/add', [AdminPanelController::class, 'addUserView'])->name('user.add');
    Route::post('/', [AdminPanelController::class, 'addUser'])->name('user.added');
    Route::delete('/{user}', [AdminPanelController::class, 'deleteUser'])->name('user.deleted');
    Route::get('/{user}/edit', [AdminPanelController::class, 'editUserView'])->name('user.edit');
    Route::patch('/{user}', [AdminPanelController::class, 'editUser'])->name('user.update');
});

// Кабинет учителя и добавление курсов
Route::get('/teacher-panel', [TeacherPanelController::class, 'index'])->name('teacherPanel')->middleware('check_teacher');
Route::get('/teacher-panel/add', [TeacherPanelController::class, 'addCourseView'])->name('course.add')->middleware('check_teacher');
Route::post('/teacher-panel', [TeacherPanelController::class, 'addCourse'])->name('course.added')->middleware('check_teacher');
Route::get('/teacher-panel/{course}/edit', [TeacherPanelController::class, 'editCourseView'])->name('course.edit')->middleware('check_teacher');
Route::patch('/teacher-panel/{course}', [TeacherPanelController::class, 'editCourse'])->name('course.update')->middleware('check_teacher');
Route::delete('/teacher-panel/{course}', [TeacherPanelController::class, 'deleteCourse'])->name('course.deleted')->middleware('check_teacher');

// Добавление уроков к курсу
Route::get('/courses/{course}', [CourseController::class, 'specificFunctionOut'])->name('coursePage');
Route::get('/courses/{course}/add-lesson', [LessonController::class, 'showAddLessonForm'])->name('showAddLessonForm')->middleware('check_teacher');
Route::post('/courses/{course}/add-lesson', [LessonController::class, 'addLesson'])->name('addLesson')->middleware('check_teacher');
Route::get('/courses/{course}/lessons/{lesson}', [LessonController::class, 'showSpecificLessonPage'])->name('showSpecificLessonPage');
Route::delete('/courses/{course}/lessons/{lesson}', [LessonController::class, 'deleteLesson'])->name('lesson.delete')->middleware('check_teacher');
Route::get('/courses/{course}/lessons/{lesson}/edit', [LessonController::class, 'showEditLessonForm'])->name('showEditLessonForm')->middleware('check_teacher');
Route::patch('/courses/{course}/lessons/{lesson}', [LessonController::class, 'editLesson'])->name('lesson.update')->middleware('check_teacher');







