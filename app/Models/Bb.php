<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Bb extends Model
{
    protected $table = 'bbs';
    protected $fillable = ['title','content', 'price'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
