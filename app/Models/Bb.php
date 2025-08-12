<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bb extends Model
{
    use SoftDeletes;

    protected $table = 'bbs';
    protected $fillable = ['title','content', 'price'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
