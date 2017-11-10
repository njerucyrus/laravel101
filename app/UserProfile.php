<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $table = 'user_profiles';
    protected $fillable = ['user_id', 'country', 'gender'];

    public function user(){
        return $this->belongsTo('\Blog\User');
    }
}
