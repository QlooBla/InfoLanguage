<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Direction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherPanelController extends Controller
{
    public function index(){
        return view('teacher-panel/teacherPanel', ['courses' => Auth::user()->course()->latest()->get()]);
    }
    public function addCourseView(){
        $context = ['directions' => Direction::latest()->get()];
        return view('teacher-panel/addCourse', $context);
    }
    public function editCourseView(Course $course){
        $context = ['directions' => Direction::latest() -> get(), 'course' => $course];
        return view('teacher-panel/editCourse', $context);
    }
    public function addCourse(Request $request){
        $request->validate([
            'title_course' => 'required|min:10|max:255',
            'short_desc' => 'required|min:10|max:255',
            'learn_desc' => 'required|min:10|max:1000',
            'requirements_desc' => 'required|min:10|max:1000',
            'file' => 'required|image|mimes:png,jpeg,jpg,gif,svg|max:2048'
        ], [
            'required' => 'Поле должно быть обязательно заполнено!',
            'file.required' => 'Пожалуйста, загрузите картинку!',
            'max' => 'Количество символов в поле не должно превышать 255 единиц.',
            'min' => 'Количество символов в поле должно быть минимум 10.',
            'image' => 'Выберите корректный тип файла(jpg,png,jpeg,gif,svg)',
        ]);

        $file = $request->file('file');
        $fileName = $file->store('public/images');
        Auth::user() -> course() -> create([
            'title_course' => $request -> title_course,
            'short_desc' => $request -> short_desc,
            'learn_desc' => $request -> learn_desc,
            'requirements_desc' => $request -> requirements_desc,
            'direction_id' => $request -> direction,
            'image' => $fileName,
        ]);
        session()->flash('success', 'Новый курс успешно добавлен!');
        return redirect() -> route('teacherPanel');
    }
    public function editCourse(Request $request, $id){
        $request->validate([
            'title_course' => 'required|min:10|max:255',
            'short_desc' => 'required|min:10|max:255',
            'learn_desc' => 'required|min:10|max:1000',
            'requirements_desc' => 'required|min:10|max:1000',
            'file' => 'nullable|image|mimes:png,jpeg,jpg,gif,svg|max:2048'
        ], [
            'required' => 'Поле должно быть обязательно заполнено!',
            'file.required' => 'Пожалуйста, загрузите картинку!',
            'max' => 'Количество символов в поле не должно превышать 255 единиц.',
            'min' => 'Количество символов в поле должно быть минимум 10.',
            'image' => 'Выберите корректный тип файла(jpg,png,jpeg,gif,svg)',
        ]);
        $course = Auth::user()->course()->findOrFail($id);
        $file = $request->file('file');
        if ($file) {
            $fileName = $file->store('public/images');
            $course->image = $fileName;
        }
        $course->title_course = $request->title_course;
        $course->short_desc = $request->short_desc;
        $course->learn_desc = $request->learn_desc;
        $course->requirements_desc = $request->requirements_desc;
        $course->direction_id = $request->direction;
        $course->save();
        session()->flash('success', 'Новый курс успешно добавлен!');
        return redirect() -> route('teacherPanel');
    }
    public function deleteCourse($id){
        $course = Auth::user()->course()->findOrFail($id);
        $course->delete();
        session()->flash('success', 'Курс успешно удален!');
        return redirect()->route('teacherPanel');
    }
}
