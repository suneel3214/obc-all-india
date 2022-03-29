<?php

namespace App\Imports;

use App\Models\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // return new User([
        //    'id' => $row['id'],
        //    'name' => $row['name'],
        //    'email' => $row['email'],
        //    'role_id->roles->name' => $row['role_id->roles->name'],
        //    'created_by->userscreate->name' => $row['created_by->userscreate->name'],
        // ]);
    }
}
