<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = ['post_id', 'comment_text', 'commented_by'];

    public function post(){
        return $this->belongsTo('\Blog\Post');
    }

}
