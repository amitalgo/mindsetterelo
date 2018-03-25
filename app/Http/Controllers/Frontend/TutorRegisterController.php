<?php

namespace App\Http\Controllers\Frontend;

use App\User;
use App\userRoles;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class TutorRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public  function __construct(User $user){
        $this->user=$user;
    }
    public function index()
    {
        return view('frontend.tutorRegister');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fname'=>'required',
            'lname'=>'required',
            'dob'=>'required',
            'address'=>'required',
            'location'=>'required',
            'state'=>'required',
            'city'=>'required',
            'pincode'=>'required',
            'age'=>'required',
            'email'=>'required',
            'mobile'=>'required',
            'qualification'=>'required',
            'experience'=>'required',
            'subject'=>'required',
            'fee'=>'required',
            'work'=>'required',
            'language'=>'required',
            'about'=>'required',
            'pass'=>'required',
            'cpass'=>'same:pass',
        ]);

//        $this->user->name=$request['fname'];
//        $this->user->email=$request['email'];
//        $this->user->mobile=$request['mobile'];
//        $this->user->password=Hash::make($request['pass']);
//        $this->user->is_Admin=0;
//        $this->user->is_Active=0;
//        $this->user->created_at=Carbon::now()->toDateTimeString();
//        $this->user->updated_at=Carbon::now()->toDateTimeString();
//        $result=$this->user->save();

        $user = User::create([
           'name' => $request['fname'],
            'mobile'=>$request['mobile'],
            'is_Admin' => '0',
            'is_Active' => '0',
            'created_at'=>Carbon::now()->toDateTimeString(),
            'updated_at'=>Carbon::now()->toDateTimeString(),
            'email' => $request['email'],
            'password' => Hash::make($request['pass']),
        ]);

        $user_roles = userRoles::create([
            'roles_id' => '2',
           'user_id' => $user->id,
            'is_Active' =>'0',
        ]);

        if ($user_roles)
        {
            redirect('/');
        }
        else{
            echo "some thing going wrong";
        }
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
