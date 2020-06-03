<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table='about_us';
    protected $fillable=['visio','mission','short_text','content'];
}
