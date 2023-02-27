<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'regex:/^\pL+$/u', 'max:255'],
            'surname' => ['required', 'string', 'regex:/^\pL+$/u', 'max:255'],
            'patronymic' => ['required', 'string', 'regex:/^\pL+$/u', 'max:255'],
            'login' => ['required', 'string', 'regex:/^[a-zA-Z]+$/', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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
            'password.confirmed' => 'Пароли не совпадают.',
            'string' => 'Могут использоваться только строковые символы.',
            'regex' => 'Могут использоваться только строковые символы.',
            'login.regex' => 'Могут использоваться только строковые символы на латинице',
        ]);

    }
    public function store(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            return redirect('register')
                ->withErrors($validator)
                ->withInput();
        }
    }
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'patronymic' => $data['patronymic'],
            'login' => $data['login'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

}
