<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'class', 'subjects_ids'
    ];


}
