<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\Lesson;

class LessonController extends Controller
{
    public function showAddLessonForm(Course $course){
        return view('addLessonForm', ['course' => $course]);
    }
    public function showSpecificLesson(Course $course){
        return view('courseSpecific', ['course' => $course]);
    }
    public function showSpecificLessonPage(Course $course, Lesson $lesson)
    {
        return view('specificLessonPage', ['course' => $course, 'lesson' => $lesson]);
    }
    public function showEditLessonForm(Course $course, Lesson $lesson)
    {
        return view('editLessonForm', ['course' => $course, 'lesson' => $lesson]);
    }
    public function addLesson(Request $request, Course $course)
    {
        $request->validate([
            'title_lesson' => 'required|min:10|max:255',
            'short_desc_lesson' => 'required|min:10|max:255',
            'big_desc_lesson' => 'required|min:10|max:1000',
            'theme_text_lesson' => 'required|min:10|max:1000',
            'training_lesson' => 'required|min:10|max:1000',
            'conclusion_lesson' => 'required|min:10|max:1000',
        ], [
            'required' => 'Поле должно быть обязательно заполнено!',
            'file.required' => 'Пожалуйста, загрузите картинку!',
            'max' => 'Количество символов в поле не должно превышать 255 единиц.',
            'min' => 'Количество символов в поле должно быть минимум 10.',
        ]);

        $lesson = new Lesson;
        $lesson->title_lesson = $request->title_lesson;
        $lesson->short_desc_lesson = $request->short_desc_lesson;
        $lesson->big_desc_lesson = $request->big_desc_lesson;
        $lesson->theme_text_lesson = $request->theme_text_lesson;
        $lesson->training_lesson = $request->training_lesson;
        $lesson->conclusion_lesson = $request->conclusion_lesson;
        $lesson->course_id = $course->id;
        $lesson->save();
        if ($lesson->save()) {
            return redirect()->route('coursePage', ['course' => $course->id])->with('success', 'Урок успешно добавлен');
        } else {
            return redirect()->route('coursePage', ['course' => $course->id])->with('error', 'Ошибка при добавлении урока');
        }
    }
    public function editLesson(Request $request, Course $course, Lesson $lesson){
        $request->validate([
            'title_lesson' => 'required|min:10|max:255',
            'short_desc_lesson' => 'required|min:10|max:255',
            'big_desc_lesson' => 'required|min:10|max:1000',
            'theme_text_lesson' => 'required|min:10|max:1000',
            'training_lesson' => 'required|min:10|max:1000',
            'conclusion_lesson' => 'required|min:10|max:1000',
        ], [
            'required' => 'Поле должно быть обязательно заполнено!',
            'file.required' => 'Пожалуйста, загрузите картинку!',
            'max' => 'Количество символов в поле не должно превышать 255 единиц.',
            'min' => 'Количество символов в поле должно быть минимум 10.',
        ]);

        $lesson->title_lesson = $request->title_lesson;
        $lesson->short_desc_lesson = $request->short_desc_lesson;
        $lesson->big_desc_lesson = $request->big_desc_lesson;
        $lesson->theme_text_lesson = $request->theme_text_lesson;
        $lesson->training_lesson = $request->training_lesson;
        $lesson->conclusion_lesson = $request->conclusion_lesson;
        $lesson->course_id = $course->id;
        $lesson->save();
        if ($lesson->save()) {
            return redirect()->route('coursePage', ['course' => $course->id])->with('success', 'Урок успешно обновлен');
        } else {
            return redirect()->route('coursePage', ['course' => $course->id])->with('error', 'Ошибка при обновлении урока');
        }
    }
    public function deleteLesson($course, $lessonId)
    {
        $lesson = Lesson::findOrFail($lessonId);
        $lesson->delete();
        return redirect()->back()->with('success', 'Lesson successfully deleted');
    }
}
