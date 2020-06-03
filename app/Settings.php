<?php

//10-07-19

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $table='settings';
    protected $fillable=['logo', 'url', 'title', 'description', 'keyword', 'author', 'phone', 'mobile', 'fax', 'mail', 'address', 'recapctha', 'map', 'analystic',  'facebook', 'twitter', 'instagram', 'youtube', 'smtp_user', 'smtp_password', 'smtp_host', 'smtp_port','google' ];
}
