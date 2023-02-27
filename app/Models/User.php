<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'name', 'surname', 'patronymic', 'login', 'email', 'password', 'user_role', 'photo', 'social_vk', 'social_tg',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function course(){
        return $this -> hasMany(Course::class);
    }
    public function isAdmin() {
        return $this -> user_role === 'admin';
    }
    public function isTeacher() {
        return $this -> user_role === 'teacher';
    }
}
