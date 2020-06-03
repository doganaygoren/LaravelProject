<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //31-07-19
    protected $table='categories';
    protected $fillable=['category_name','upper_category','slug'];

    public function parent(){

    	return $this->belongsTo('App\Category', 'upper_category');
    }

    public function children(){

    	return $this->hasMany('App\Category', 'upper_category');
    }

    //02-08-19
    public function blogs(){

    	return $this->hasMany('App\Blog','category','id'); 
    }


}

?>