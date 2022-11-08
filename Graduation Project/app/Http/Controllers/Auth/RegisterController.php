<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Volunteer;
use App\Models\Organization;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Auth;
 


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['nullable', 'string', 'max:20' ],
            'address' => ['nullable', 'string', 'max:20'],
            'usertype' =>['required', 'string', 'max:20'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'uni'=> ['nullable', 'string', 'max:20'],
            'student_id' =>  ['nullable', 'string', 'max:20'],
            'dob' =>  ['nullable', 'string', 'max:20'],
            'bio' =>  ['nullable', 'string', 'max:100'],
            'manager_name' =>  ['nullable', 'string', 'max:20'],
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
      
        // ------------------------- New User
        $user =  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'password' => Hash::make($data['password']),
        ]);

        // ------------------------- Volunteer
        if($data['usertype']=='0'){
            Volunteer::create([
                'user_id'=> $user->id ,
                'university' => $data['uni'] ,
                'student_id' => $data['student_id'] ,
                'dob' => $data['dob'] ,
                'vol_points' => '763' ,
            ]);

            DB::table('role_user')->insert([
                'user_id' => $user->id,
                'role_id' => 2,
                'user_type'=>'App\Models\User',
            ]);
        }

        // ------------------------- Org
        if($data['usertype']=='1'){
            Organization::create([
                'user_id'=> $user->id ,
                'bio' => $data['bio'] ,
                'account_manager' => $data['manager_name'] ,
            ]);

            DB::table('role_user')->insert([
                'user_id' => $user->id,
                'role_id' => 3,
                'user_type'=>'App\Models\User',
            ]);
        }

        // ------------------------- Uni
        if($data['usertype']=='2'){
            Organization::create([
                'user_id'=> $user->id ,
                'bio' => $data['bio'] ,
                'account_manager' => $data['manager_name'] ,
            ]);

            DB::table('role_user')->insert([
                'user_id' => $user->id,
                'role_id' => 4,
                'user_type'=>'App\Models\User',
            ]);
        }
        
            return  $user;
    }
}
