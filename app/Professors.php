<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Professors extends User
{
    use Notifiable;


    protected $fillable = [
        'name' , 'class_id', 'subject_id'
    ];
}
