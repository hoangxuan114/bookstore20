<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Auth\Authenticatable;
use Illuminate\Notifications\Notifiable;
class Admin extends Model implements 
    \Illuminate\Contracts\Auth\Authenticatable
{
	use Authenticatable;
    protected $table = "admin";
} 
