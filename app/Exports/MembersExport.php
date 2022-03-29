<?php

namespace App\Exports;

use App\Models\Member;
use App\Models\State;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;

class MembersExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $member =  Member::with('states','cities','membersuser')->select('id','fname','lname','email','mobile','whatsaap','category',
        'qualification','work','aadhar_no','state_id','city_id','user_id','teshil','panchayat',
        'village','picode','pan_no')->get();
        $allData = [];
        foreach($member as $Member){
            $data['id'] = $Member->id;
            $data['fname'] = $Member->fname;
            $data['lname'] = $Member->lname;
            $data['email'] = $Member->email;
            $data['mobile'] = $Member->mobile;
            $data['whatsaap'] = $Member->whatsaap;
            $data['category'] = $Member->category;
            $data['qualification'] = $Member->qualification;
            $data['work'] = $Member->work;
            $data['aadhar_no'] = $Member->aadhar_no;
            $data['state_id'] = $Member->states ? $Member->states->name: '';
            $data['city_id'] = $Member->cities ? $Member->cities->name: '';
            $data['user_id'] = $Member->membersuser ? $Member->membersuser->name:'';
            $data['teshil'] = $Member->teshil;
            $data['panchayat'] = $Member->panchayat;
            $data['village'] = $Member->village;
            $data['picode'] = $Member->picode;
            $data['pan_no'] = $Member->pan_no;


            $allData [] = $data;
        }
        // dd($allData);
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
            'Id', 'First-name', 'Last-Name', 'Email', 'Mobile','WhatsAap', 'Category',
            'Qualification' ,'Work','Aadhar-Number','State','City','Created_By',
            'Teshil' ,'Punchayat','Village','PinCode','Pan-Card'
        ];
        
    }
}
