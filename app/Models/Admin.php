<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Notifications\Notifiable;

class Admin extends User
{
    use HasFactory;
/**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

//     protected $fillable = [
//         'name',
//         'email',
//         'password',
//     ];
//     /**
//      * The attributes that should be hidden for serialization.
//      *
//      * @var array
//      */
//     protected $hidden = [
//         'password',
//         'remember_token',
//     ];
// protected $casts = [
//         'email_verified_at' => 'datetime',
//     ];
// }
