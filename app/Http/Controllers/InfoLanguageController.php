<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Direction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class InfoLanguageController extends Controller
{
    public function index(){
        return view('index');
    }
    public function privacy(){
        return view('policy/privacy-page');
    }
    public function direction(){
        $context = ['directions'=>Direction::get()];
        return view('direction-operation/direction',$context);
    }
    public function directionAddView(){
        return view('direction-operation/addDirection');
    }
    public function editDirectionView(Direction $direction){
        return view('direction-operation/editDirection', ['direction' => $direction]);
    }

    public function directionSpecific(Direction $direction){
        $context = [
            'courses' => Course::where('direction_id', '=', $direction -> id)->latest()->get(), 'direction' => $direction
        ];
        return view('direction-operation/directionSpecific', $context);
    }



    public function addDirection(Request $request){
        $request->validate([
            'title' => 'required|min:10|max:255',
            'subtitle' => 'required|min:10|max:255',
            'file' => 'required|image|mimes:png,jpeg,jpg,gif,svg|max:2048'
        ], [
            'required' => 'Поле должно быть обязательно заполнено!',
            'max' => 'Количество символов в поле не должно превышать 255 единиц.',
            'min' => 'Количество символов в поле должно быть минимум 10.',
            'image' => 'Выберите корректный тип файла(jpg,png,jpeg,gif,svg)',
        ]);
        $direction = new Direction();
        $file = $request->file('file');
        $fileName = $file->store('public/images');

        $direction -> create([
            'title' => $request -> title,
            'subtitle' => $request -> subtitle,
            'img' => $fileName
        ]);
        session()->flash('success', 'Новое направление успешно добавлено!');
        return redirect() -> route('direction');
    }
    public function updateDirection(Request $request, Direction $direction){
        $request->validate([
            'title' => 'required|max:255',
            'subtitle' => 'required|max:255',
            'file' => 'nullable|image|mimes:png,jpeg,jpg,gif,svg|max:2048'
        ], [
            'required' => 'Поле должно быть обязательно заполнено!',
            'max' => 'Количество символов в поле не должно превышать 255 единиц.',
            'image' => 'Выберите корректный тип файла(jpg,png,jpeg,gif,svg)',
        ]);
        $file = $request->file('file');
        if ($file) {
            $fileName = $file->store('public/images');
            $direction->img = $fileName;
        }
        $direction->title = $request->title;
        $direction->subtitle = $request->subtitle;
        $direction->save();
        session()->flash('success', 'Информация успешно обновлена!');
        return redirect()->route('direction');
    }
    public function deleteDirection(Direction $direction){
        $direction->delete();
        session()->flash('success', 'Удаление прошло успешно!');
        return redirect()->route('direction');
    }
}
