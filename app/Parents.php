<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Parents extends User
{
    use Notifiable;


    protected $fillable = [
        'name' , 'student_id'
    ];
}
