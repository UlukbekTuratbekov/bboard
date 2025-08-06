<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bb extends Model
{
    protected $table = 'bb';
    protected $fillable = ['title','content', 'price'];
}
