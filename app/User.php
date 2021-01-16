<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','email','password',    
    ];
    
    //保存可能なパラメータを配列としてModelファイルに置く
    //User::create([
    //    'name' => $data['name'], 
    //    'email' => $data['email'],
    //    'password' => Hash::make($data['password']),
    //    ])
    //

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
     //秘匿しておきたいカラムを定義
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
