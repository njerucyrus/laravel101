<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['posted_by', 'body'];

    public function comments(){
        return $this->hasMany('Blog\Comment');
    }

    public function user(){
        return $this->belongsTo('\Blog\User');
    }
}
