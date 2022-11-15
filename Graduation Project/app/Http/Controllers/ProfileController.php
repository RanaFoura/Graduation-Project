<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Volunteer;
use App\Models\Organization;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return View('profiles.index');
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
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        return View("profiles.edit");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user= auth()->user();
        $this->validate($request,[
            'name'=> 'required',
            'email'=> 'required|unique:users,email,'.$user->id."'",
        ]);

        if ($user->hasRole('volunteer') ){
            $volun = Volunteer::where('user_id',$user->id)->first();

            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->phone=$request->input('phone');
            $user->address= $request->input('address');
            $volun->university= $request->input('university');
            $volun->student_id= $request->input('student_id');
            $volun->dob= $request->input('dob');

            $user->save();
            $volun->save();
            return view('profiles.index');
        }
        
        if ($user->hasRole('organization') ){
            $org = Organization::where('user_id',$user->id)->first();

            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->phone=$request->input('phone');
            $user->address= $request->input('address');
            $org->bio= $request->input('bio');
            $org->account_manager= $request->input('account_manager');


            $user->save();
            $org->save();
            return view('profiles.index');
        }

        if ($user->hasRole('university') ){
            $uni = Organization::where('user_id',$user->id)->first();
            
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->phone=$request->input('phone');
            $user->address= $request->input('address');
            $uni->bio= $request->input('bio');
            $uni->account_manager= $request->input('account_manager');


            $user->save();
            $uni->save();
            return view('profiles.index');
        }

        return redirect(route('profile'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
