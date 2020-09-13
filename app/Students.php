<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Students extends User
{
    use Notifiable;


    protected $fillable = [
        'name', 'class_id', 'main_teacher_id', 'parent_id'
    ];

}
