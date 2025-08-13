<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;


class Bb extends Model
{
    use SoftDeletes;

    protected $table = 'bbs';
    protected $fillable = ['title','content', 'price'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    protected function getPriceAttribute($price)
    {
        return '$' . $price;
    }
    protected function title(): Attribute {
        return Attribute::make(
            get:fn($title) => Str::ucfirst($title)
        );
    }



}
