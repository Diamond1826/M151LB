<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'firstname', 
        'lastname', 
        'street', 
        'plz', 
        'city', 
        'email',
        'classId',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'students';
}
