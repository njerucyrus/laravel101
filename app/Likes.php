<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Likes extends Model
{
    protected $table = 'likes';
    protected $fillable = ['post_id', 'likes_count'];

    public function post(){
        return $this->belongsTo('\Blog\Post', 'post_id', 'id');
    }

}
