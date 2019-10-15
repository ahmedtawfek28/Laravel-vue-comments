<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Data extends Authenticatable
{
    use Notifiable;
         protected $table='vueCrudData';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'age', 'profession',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
