<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Teachers extends User
{
    use Notifiable;


    protected $fillable = [
        'name' , 'class_id'
    ];


}
