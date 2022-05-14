<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
        'name', 'email', 'password','userimage'
    ];

    /**
     * To dissable timestamps in database table
    */
    //public $timestamps = false;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
    */
    protected $hidden = [

        'password', 'remember_token',

    ];

    /**
     * Get Todo of User
     *
    */

    public function pages()
    {
       return $this->hasMany('Page');

    }
}