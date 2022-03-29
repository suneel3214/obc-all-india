<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Member;


class City extends Model
{
    use HasFactory;

    public function citiesmembers(){
        return $this->hasMany(Member::class,'city_id');
    }
}
