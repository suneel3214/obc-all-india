<?php

namespace App\Exports;

use App\Models\User;
use App\Models\Role;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;

class UsersExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $users =  User::with('roles','userscreate')->select('id','name','email','role_id','created_by')->get();
        // dd($users);
        $allData = [];
        foreach($users as $user){
            $data['id'] = $user->id;
            $data['name'] = $user->name;
            $data['email'] = $user->email;
            $data['role_id'] = $user->roles ? $user->roles->name:'';
            $data['created_by'] = $user->userscreate ? $user->userscreate->name:'';

            $allData [] = $data;
        }

        return collect($allData);
    }



    /**
     * Return Headings for the exported data
     *
     * @return array
     */
    public function headings(): array
    {
        return [
            'Id', 'Name', 'Email', 'Role', 'Created By'
        ];
    }
}
