<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['title','posted_by', 'body', 'photo'];

    public function user(){
        return $this->belongsTo('Blog\User', 'posted_by', 'id');
    }

    public function comments(){
        return $this->hasMany('Blog\Comment');
    }


    public function likes(){
        return $this->hasOne('\Blog\Likes');
    }
}
