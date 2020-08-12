<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable=['user_id','first_name','last_name','email','headline','summary'];
    protected $dates=['created_at','updated_at'];
}
