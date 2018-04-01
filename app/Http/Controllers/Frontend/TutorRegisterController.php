<?php

namespace App\Http\Controllers\Frontend;

use App\Country;
use App\Language;
use App\State;
use App\subDetails;
use App\Timeslot;
use App\User;
use App\user_x;
use App\userRoles;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rules\In;

class TutorRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public  function __construct(User $user,subDetails $subDetails,State $state,Country $country){
        $this->user=$user;
        $this->sub=$subDetails;
        $this->country=$country;
        $this->state=$state;
    }
    public function index()
    {
        $subject=$this->sub::all();
        $countries=$this->country::all();
        $state=$this->state::all();

        return view('frontend.tutorRegister',compact('subject','countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tutorsView(Request $request)
    {
        $tutors = User::where('is_Admin', '!=', '1')->where('is_Active', '=' , '1')->with('user_x')->with('subDetails');

        //Condition for Gender
        if ($request->has('gender') && !empty(Input::get('gender')) && Input::get('gender')!='both' )
        {
                $tutors=$tutors->whereHas('user_x',function($q){
                    $q->where('gender',Input::get('gender'));
                });
        }
        // Condition for language
        if ($request->has('language') && !empty(Input::get('language')) && Input::get('language') !='all')
        {
            $tutors=$tutors->whereHas('user_x', function ($q){
               $q->where('language', Input::get('language'));
            });
        }
        /// Condition for subject
        if ($request->has('subject') && !empty(Input::get('subject')))
        {
            $tutors=$tutors->whereHas('subDetails', function ($q){
                $q->where('subject', Input::get('subject'));
            });
        }
        /// Condition for age filter
        if($request->has('endagePos') && !empty(Input::get('endagePos')))
        {
            $tutors=$tutors->whereHas('user_x', function ($q){
                $q->whereBetween('age', array(Input::get('staragetPos'), Input::get('endagePos')));
            });
        }

        $users = $tutors->get();

//        print_r($users);exit;
//        $users =User::where('is_Admin', '!=', '1')->where('is_Active', '=' , '1')->with('user_x')->with('subDetails')->get();
        $subjects=subDetails::select('subject')->groupBy('subject')->get();
        $languages=Language::where('is_Active','1')->get();
        $timeslots = Timeslot::where('is_Active','1')->get();
        return view('frontend.tutors', compact('users', 'subjects','languages','timeslots'));
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
            'db'=>'required',
            'address'=>'required',
            'country'=>'required',
            'state'=>'required',
            'city'=>'required',
            'pincode'=>'required|max:6',
            'age'=>'required',
            'email'=>'required|unique:users|email'.$this->user->id,
            'mobile'=>'required|max:10',
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
        $success=false;
        DB::beginTransaction();
        try{
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

                userRoles::create([
                    'roles_id' => '2',
                   'user_id' => $user->id,
                    'is_Active' =>'0',
                ]);
                user_x::create([
                        'user_id'=> $user->id,
                        'gender'=> $request['gender'],
                        'age' => $request['age'],
                        'dob' => $request['db'],
                        'address'=> $request['address'],
                        'location'=> $request['country'],
                        'state' => $request['state'],
                        'city' => $request['city'],
                        'pincode' => $request['pincode'],
                        'qualification'=> $request['qualification'],
                        'about' => $request['about'],
                        'exp' => $request['experience'],
                        'fees' => $request['fee'],
                        'time_slot' => $request['work'],
                        'is_Active' =>'1',
                        'language' => $request['language'],
                        'skills'    => $request['skill'],
                        'honour'    => $request['honour'],
                ]);
                $sub=explode(',',$request['subject']);
                foreach ($sub as $key=>$subject){
                        subDetails::create([
                        'subject' => $subject,
                        'user_id'=> $user->id,
                        'is_Active' =>'1',
                        'created_at'=>Carbon::now()->toDateTimeString(),
                        'updated_at'=>Carbon::now()->toDateTimeString(),
                    ]);
                }
            DB::commit();
            $success= true;
        }
        catch(\Exception $e){
            $success = false;
            DB::rollback();
        }

        if($success){
            \Session::flash('message', 'Tutors Created Successfully!');
            return $this->index();
        }else{
            \Session::flash('message', 'Something Went Wrong!');
            return view('frontend/tutorRegister');
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
