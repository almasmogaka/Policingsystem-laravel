<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Session;

 
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

    protected $redirectTo = '/admin/index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');

    }
    public function index()
    {
        $users = User::all();

        return view('police.index', ['users' => $users]);
    
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
            'id_no' => 'required|integer|unique:users',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'job_title' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user =new User;
        return User::create([
            'id_no' => $data['id_no'],
            'name' => $data['name'],
            'email' => $data['email'],
            'job_title' => $data['job_title'],
            'password' => Hash::make($data['password']),
        ]);


        
    }

     public function show($id)
    {
        $user = User::find($id);
        return view('police.show')->withuser($user);

        return redirect()->route('admin.index');
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('police.edit', ['user' => $user]);


    
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $this->validate($request, array(
        'id_no' => 'required|integer',
        'name' => 'required|max:255',
        'email' => 'required', 
        'job_title' => 'required'
        ));
            //save to database
        $user->id_no = $request->input('id_no');
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->job_title = $request->input('job_title');

        $user->save();

        Session::flash('success','Information updated successfully');

        return redirect()->route('admin.index');
    
    }
    public function destroy($id){
        $user = User::find($id);
        $user->delete();

        session::flash('success','Deleted successfully');

        return redirect()->route('admin.index');
    }

}
