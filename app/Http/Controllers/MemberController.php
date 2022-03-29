<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
use App\Models\City;
use App\Models\Member;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use App\Exports\MembersExport;
use App\Imports\MembersImport;
use Maatwebsite\Excel\Facades\Excel;
use Validator;



class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = Auth::user()->id;
    //  dd($userId);
        $members = Member::with('states','cities','membersuser')->orderBy('id','desc')->simplepaginate(10);
        // dd($members);
        return view('member.index',compact('members','userId'));
    }

    public function indexAdmin()
    {
    //  dd($userId);
        $members = Member::with('states','cities','membersuser')->orderBy('id','desc')->simplepaginate(10);
        // dd($members);
        return view('member.admin_alll_member',compact('members'));
    }

    public function export()
    {
        return Excel::download(new MembersExport, 'members.csv');
    }
    

    public function membershow($id)
    {
    	$member = Member::find($id);

	    // return response()->json([
	    //   'data' => $member
	    // ]);
        return view('member.show',compact('member'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = Auth::user()->id;
        // dd($user_id);
        $states =  State::all();
        return view('member.create',compact('states','user_id'));
    }

    public function Membercreate()
    {
        $states =  State::all();
        // dd($states);
        return view('welcome',compact('states'));
    }

    public function fetchCity(Request $request)
    {
        $data['cities'] = City::where("state_id",$request->state_id)->get(["name", "id"]);
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $input = $request->validate([
        //     'email' => 'required|email|unique:members',
        //     'mobile' => 'required|mobile|unique:members',
        //     'aadhar_no' => 'required|aadhar_no|unique:members',
        //     'pan_no' => 'required|pan_no|unique:members',
        // ]);

        $input = $request->all();
        // dd($input);
        if ($image = $request->file('id_proof')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['id_proof'] = "$profileImage";
            // dd($input['image']);
            // dd($input);

        }
        Member::create($input);
        Alert::success('Congrats', 'You\'ve Successfully Registered');
        return redirect()->back()->with('message','Member Added SuccessFully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    // public function memberEdit($id){
        
    //     return view('member.edit');
    // }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user_id = Auth::user()->id;
        $states =  State::all();
        $cities = City::all();
        $member = Member::find($id);
        // dd($member);
        return view('member.edit',compact('user_id','states','member','cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
  
        if ($image = $request->file('id_proof')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['id_proof'] = "$profileImage";
        }else{
            unset($input['id_proof']);
        }
        //   dd($input);
        $member = Member::find($id);
        $member->update($input);      
        Alert::success('Congrats', 'You\'ve Successfully Updated');
        return redirect()->route('members.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Member::find($id);
        $data->delete();
        Alert::success('Delete', 'You\'ve Successfully Deleted');
        return redirect()->back();
    }

    public function validateuseremail(Request $request)
   {
    $member = Member::where('email', $request->email)->first('email');
       if($member){
         $return =  false;
        } 
        else{
         $return= true;
        }
        echo json_encode($return);
        exit;
   }
    

    


    
}
