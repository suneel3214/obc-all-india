<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Member;

class State extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','type',
    ];

    public function statemembers(){
        return $this->hasMany(Member::class,'city_id');
    }
}
