<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
* @author D. Schaufelberger
* @since July, 2017
* @version 1.0
* this class make database iteraction simple
*/
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

    protected $table = 'students';
}
