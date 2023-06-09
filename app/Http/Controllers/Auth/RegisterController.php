<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
            'name'              => ['required', 'string', 'max:255'],
            'specialization_id' => ['required',],
            'office_id'         => ['required',],
            'job_type_id'       => ['required'],
            'section_type_id'   => ['required'],
            'gender'            => ['required'],
            'email'             => ['required', 'string', 'email', 'regex:/@moe\.gov.sa$/i', 'max:255', 'unique:users'],
            'password'          => ['required', 'string', 'min:8', 'confirmed'],
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
        $user = User::create([
            'name' => $data['name'],
            'email'             => $data['email'],
            'specialization_id' => $data['specialization_id'],
            'office_id'         => $data['office_id'],
            'job_type_id'       => $data['job_type_id'],
            'section_type_id'   => $data['section_type_id'],
            'gender'            => $data['gender'],
            'password'          => Hash::make($data['password']),
            'status'            => 0
        ]);

        $user->addRole('user');

        return $user;
    }
}
