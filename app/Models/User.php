<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Role;
use App\Models\User;
use App\Models\Member;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use HasApiTokens, HasFactory, Notifiable ;

    protected $guarded = [ ];

    public function roles(){
        return  $this->belongsTo(Role::class , 'role_id','id');
    }

    public function userscreate(){
        return  $this->belongsTo(User::class , 'created_by','id');
    }

    public function myusers(){
        return $this->hasMany(Member::class, 'user_id');
    }
  
    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];

   
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
}
