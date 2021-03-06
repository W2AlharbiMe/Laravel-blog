<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'content', 'user_id',
        'thumbnail_path'
    ];


    public function User()
    {
        return $this->belongsTo("App\User");
    }
}
