<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table ="posts";

    public function post()
    {
        return $this->hasMany(User::class);
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
}
