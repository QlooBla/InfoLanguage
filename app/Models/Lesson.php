<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable = ['course_id', 'title_lesson', 'short_desc_lesson', 'big_desc_lesson', 'theme_text_lesson', 'training_lesson', 'conclusion_lesson', 'created_at', 'updated_at'];

    public function course(){
        return $this -> belongsTo(Course::class);
    }
}

