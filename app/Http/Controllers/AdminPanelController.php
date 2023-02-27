<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminPanelController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admin-panel/adminPanel', compact('users'));
    }

    public function addUserView(){
        return view('admin-panel/addUser');
    }
    public function addUser(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'regex:/^\pL+$/u', 'max:255'],
            'surname' => ['required', 'string', 'regex:/^\pL+$/u', 'max:255'],
            'patronymic' => ['required', 'string', 'regex:/^\pL+$/u', 'max:255'],
            'login' => ['required', 'string', 'regex:/^[a-zA-Z]+$/', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ], [
            'name.required' => 'Поле "Имя" обязательно для заполнения.',
            'surname.required' => 'Поле "Фамилия" обязательно для заполнения.',
            'patronymic.required' => 'Поле "Отчество" обязательно для заполнения.',
            'login.required' => 'Поле "Логин" обязательно для заполнения.',
            'email.required' => 'Поле "Email" обязательно для заполнения.',
            'password.required' => 'Поле "Пароль" обязательно для заполнения.',
            'email.email' => 'Поле "Email" должно содержать валидный адрес электронной почты.',
            'email.unique' => 'Указанный "Email" уже используется.',
            'password.min' => 'Длина пароля должна быть не менее 8 символов.',
            'string' => 'Могут использоваться только строковые символы.',
            'regex' => 'Могут использоваться только строковые символы.',
            'login.regex' => 'Могут использоваться только строковые символы на латинице',
        ]);

        $user = new User();
        $user -> create([
           'login' => $request -> login,
           'password' => bcrypt($request -> password),
           'name' => $request -> name,
           'surname' => $request -> surname,
           'patronymic' => $request -> patronymic,
           'email' => $request -> email,
           'user_role' => $request -> user_role,
        ]);
        session()->flash('success', 'Новый пользователь успешно добавлен!');
        return redirect() -> route('adminPanel');
    }

    public function editUserView(User $user){
        return view('admin-panel/editUser', ['user' => $user]);
    }

    public function editUser(Request $request, User $user){
        $request->validate([
            'name' => ['required', 'string', 'regex:/^\pL+$/u', 'max:255'],
            'surname' => ['required', 'string', 'regex:/^\pL+$/u', 'max:255'],
            'patronymic' => ['required', 'string', 'regex:/^\pL+$/u', 'max:255'],
            'login' => ['required', 'string', 'regex:/^[a-zA-Z]+$/', 'max:255'],
        ], [
            'name.required' => 'Поле "Имя" обязательно для заполнения.',
            'surname.required' => 'Поле "Фамилия" обязательно для заполнения.',
            'patronymic.required' => 'Поле "Отчество" обязательно для заполнения.',
            'login.required' => 'Поле "Логин" обязательно для заполнения.',
            'string' => 'Могут использоваться только строковые символы.',
            'regex' => 'Могут использоваться только строковые символы.',
            'login.regex' => 'Могут использоваться только строковые символы на латинице',
        ]);
        $user->login = $request->login;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->patronymic = $request->patronymic;
        $user->save();
        session()->flash('success', 'Информация успешно обновлена!');
        return redirect()->route('adminPanel');
    }

    public function deleteUser(User $user){
        if (auth()->user()->id == $user->id) {
            session()->flash('error', 'Вы не можете удалить сами себя!');
            return redirect()->route('adminPanel');
        }
        $user->delete();
        session()->flash('success', 'Удаление прошло успешно!');
        return redirect()->route('adminPanel');
    }
}
