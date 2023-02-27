<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['title_course', 'short_desc', 'image', 'learn_desc', 'requirements_desc', 'direction_id', 'created_at', 'updated_at'];

    public function user(){
        return $this -> belongsTo(User::class);
    }

    public function direction(){
        return $this -> belongsTo(Direction::class);
    }

    public function lesson(){
        return $this -> hasMany(Lesson::class);
    }
}
