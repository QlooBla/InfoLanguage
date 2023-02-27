<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'subtitle', 'img', 'created_at', 'updated_at'];

    public function course(){
        return $this -> hasMany(Course::class);
    }
}
