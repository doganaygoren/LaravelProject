<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //05-08-19
    protected $table='comments';
    protected $fillable=['name','email','content','blog','upper_comment','user_id'];

    public function user(){

    	return $this->hasOne('App\User','id','user_id');
    }

    //06-08-19
    public function children(){

    	return $this->hasMany('App\Comment', 'upper_comment');
    }
}
