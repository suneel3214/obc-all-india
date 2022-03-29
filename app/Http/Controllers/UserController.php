<?php
    
namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;
use RealRashid\SweetAlert\Facades\Alert;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
    
class UserController extends Controller
{


    function __construct()
    {
       $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function export()
    {
        return Excel::download(new UsersExport, 'users.csv');
    }

    public function index(Request $request)
    {

        $user_id = Auth::user()->role_id;
        // dd($user_id);
        $userId = Auth::user()->id;
        // dd($userId);

        $data = User::with('roles','userscreate')->orderBy('id','DESC')->simplePaginate(10);
        // dd($data);
        return view('users.index',compact('data','user_id','userId'));
    }

    public function stateAdmin(Request $request){
        $user_id = Auth::user()->role_id;
        // dd($user_id);

        $title = 'All State Admin';
        $userId = Auth::user()->id;
        $data = User::with('roles','userscreate')->where('role_id', 2)->orderBy('id','DESC')->get();
        // dd($data);
        return view('users.stateadmin',compact('data','user_id','title','userId'));
    }

    public function districtadmin(Request $request){
        $user_id = Auth::user()->role_id;
        // dd($user_id);
        $title = 'All District Admin';
        $userId = Auth::user()->id;

        $data = User::with('roles','userscreate')->where('role_id', 3)->orderBy('id','DESC')->get();
        // dd($data);
        return view('users.stateadmin',compact('data','user_id','title' ,'userId'));
    }

    public function blockadmin(Request $request){
        $user_id = Auth::user()->role_id;
        // dd($user_id);
        $title = 'All Block Admin';
        $userId = Auth::user()->id;

        $data = User::with('roles','userscreate')->where('role_id', 6)->orderBy('id','DESC')->get();
        // dd($data);
        return view('users.stateadmin',compact('data','user_id','title','userId'));
    }

    public function puchayatadmin(Request $request){
        $user_id = Auth::user()->role_id;
        // dd($user_id);
        $title = 'All Punchayat Admin';
        $userId = Auth::user()->id;

        $data = User::with('roles','userscreate')->where('role_id', 9)->orderBy('id','DESC')->get();
        // dd($data);
        return view('users.stateadmin',compact('data','user_id','title','userId'));
    }

    public function villageadmin(Request $request){
        $user_id = Auth::user()->role_id;
        // dd($user_id);
        $title = 'All Village Admin';
        $userId = Auth::user()->id;

        $data = User::with('roles','userscreate')->where('role_id', 10)->orderBy('id','DESC')->get();
        // dd($data);
        return view('users.stateadmin',compact('data','user_id','title','userId'));
    }

    public function distUrbanAdmin(Request $request){
        $user_id = Auth::user()->role_id;
        // dd($user_id);
        $title = 'All District Urban Admin';
        $userId = Auth::user()->id;

        $data = User::with('roles','userscreate')->where('role_id', 4)->orderBy('id','DESC')->get();
        // dd($data);
        return view('users.stateadmin',compact('data','user_id','title','userId'));
    }

    public function distRuralAdmin(Request $request){
        $user_id = Auth::user()->role_id;
        // dd($user_id);
        $title = 'All District Rural Admin';
        $userId = Auth::user()->id;

        $data = User::with('roles','userscreate')->where('role_id', 5)->orderBy('id','DESC')->get();
        // dd($data);
        return view('users.stateadmin',compact('data','user_id','title','userId'));
    }

    public function blockurbanAdmin(Request $request){
        $user_id = Auth::user()->role_id;
        // dd($user_id);
        $title = 'All Block Rural Admin';
        $userId = Auth::user()->id;

        $data = User::with('roles','userscreate')->where('role_id', 8)->orderBy('id','DESC')->get();
        // dd($data);
        return view('users.stateadmin',compact('data','user_id','title','userId'));
    }

    public function blockRuralAdmin(Request $request){
        $user_id = Auth::user()->role_id;
        // dd($user_id);
        $title = 'All Block Rural Admin';
        $userId = Auth::user()->id;

        $data = User::with('roles','userscreate')->where('role_id', 9)->orderBy('id','DESC')->get();
        // dd($data);
        return view('users.stateadmin',compact('data','user_id','title','userId'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
         $user_id = Auth::user()->role_id;
        //  dd($user_id);
        //  $userId = [];
        //  $users = User::all();
        
        $roles = Role::all();
        return view('users.create',compact('roles','user_id'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
                    'name' => 'required',
                    'email' => 'required|email|unique:users',
                    'password' => 'required|same:confirm-password',
                    'role_id' => 'required',
                    'pin' => 'required'
                ]);
        unset($data['confirm-password']);
        $role = Role::where('name',$data['role_id'])->first();
        $data['created_by'] = Auth::user()->id;  
        $roleName = $data['role_id'];
        // dd($roleName);
        $data['role_id'] = $role->id;
        // $data['pin'] = $data->pin;
        $data['password'] = Hash::make($data['password']);
    // dd($data);
        $user = User::create($data);
        $user->hasRole($roleName);
        Alert::success('Congrats', 'You\'ve Successfully Registered');

        return redirect()->route('users.index');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::with('roles','userscreate')->find($id);
        // dd($user);
        return view('users.show',compact('user'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::with('roles')->find($id);
        $role = Role::all();
        // dd($user);
        $userRole = $user->roles->pluck('name','name')->all();
    
        return view('users.edit',compact('user','role','userRole'));
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
        // $this->validate($request, [
        //     'name' => 'required',
        //     'email' => 'required|email|unique:users,email,'.$id,
        //     'password' => 'same:confirm-password',
        //     'roles' => 'required'
        // ]);
    
        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));    
        }
    
        $user = User::find($id);
        $user->update($input);
    
        // $user->assignRole($request->input('roles'));
        Alert::success('Congrats', 'You\'ve Successfully updated');
    
        return redirect()->route('users.index');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::find($id);
        $data->delete();

        Alert::success('Delete', 'You\'ve Successfully Deleted');
        return redirect()->back();
    }

    public function approve(Request $request,$id)
    { 
        $user = User::find($id);
        // dd($member);
        if($user->status == 1){
            $user->status = 0 ;
            $user->save();
            Alert::success('UnApprove', 'User Unapprove Successfully');

        }
        else{
            $user->status = 1 ;
            $user->save();
            Alert::success('Approve', 'User Approve Successfully');

        }
    
    return redirect()->back(); 
}
}