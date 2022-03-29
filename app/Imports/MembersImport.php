<?php

namespace App\Imports;

use App\Models\Models\Member;
use App\Models\State;
use Maatwebsite\Excel\Concerns\ToModel;

class MembersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Member([
            'id' => $row['id'],
           'fname' => $row['fname'],
           'lname' => $row['lname'],
           'email' => $row['email'],
           'mobile' => $row['mobile'],
           'category' => $row['category'],
           'qualification' => $row['qualification'],
           'work' => $row['work'],
           'aadhar_no' => $row['aadhar_no'],
           'state_id' => $row['state_id'],
           'city_id' => $row['city_id'],
           'user_id' => $row['user_id'],
           'teshil' => $row['teshil'],
           'panchayat' => $row['panchayat'],
           'village' => $row['village'],
           'picode' => $row['picode'],
           'pan_no' => $row['pan_no'],
        ]);
    }
}
