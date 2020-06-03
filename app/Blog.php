<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //22-07-19
    protected $table='blogs';
    protected $fillable=['header','content','author','tags','images[]','slug','category','short_content'];

    //02-08-19
    public function parent(){

    	return $this->belongsTo('App\Category', 'category', 'id');
    }

    //06-08-19
    public function user_comments(){

    	return $this->hasMany('App\Comment','blog','slug');
    }

    //08-08-19
    public function user(){

        return $this->hasOne('App\User','id','author');
    }
}
