<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\State;
use App\Models\City;
use App\Models\User;



class Member extends Model
{
    use HasFactory;
    protected $fillable = [
        'fname','lname','email','mobile','whatsaap','status','category','qualification','work','aadhar_no',
        'state_id','city_id','user_id','teshil','panchayat','village','picode','pan_no','id_proof','comment',
    ];

    public function states(){
        return $this->belongsTo(State::class, 'state_id','id');
    }

    public function cities(){
        return $this->belongsTo(City::class, 'city_id','id');
    }

    public function membersuser(){
        return $this->belongsTo(User::class, 'user_id','id');
    }

}
