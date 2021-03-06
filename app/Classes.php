<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
* @author D. Schaufelberger
* @since July, 2017
* @version 1.0
* this class make database iteraction simple
*/
class Classes extends Model
{	
	/**
    * save no timestamps to the table
    * @var $timestamps
    */
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
    ];
    /**
    * target table
    * @var $table
    */
    protected $table = 'classes';
}
