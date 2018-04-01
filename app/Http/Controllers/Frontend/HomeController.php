<?php

namespace App\Http\Controllers\Frontend;

use App\Country;
use App\State;
use App\subDetails;
use App\User;
use Illuminate\Http\Request;
use App\userRoles;
use App\user_x;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public  function __construct(User $user, subDetails $subDetails, State $state, Country $country)
    {
        $this->user=$user;
        $this->sub=$subDetails;
        $this->country=$country;
        $this->state=$state;
    }

    public function index()
    {
//        $users= DB::table('users')->join('user_xes', 'users.id', '=', 'user_xes.user_id')
//            ->join('sub_details', 'users.id','=', 'sub_details.tutors_id')
//            ->join('user_roles', 'users.id', '=', 'user_roles.user_id')
//            ->where('is_Admin', '!=', '1')->get();
        $users =User::where('is_Admin', '!=', '1')->where('is_Active', '=' , '1')->with('user_x')->with('subDetails')->get();
//        print_r($users); exit;
        return view('frontend.home',compact('users'));
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
        //
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
