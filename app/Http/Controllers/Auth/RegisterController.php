<?php

namespace App\Http\Controllers\Auth;
use DB;
use URL;
use Mail;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Events\activateAccount;
//use App\Rules\validPhone;
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
    protected $redirectTo = '/home';

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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',

            'password' => 'required|string|min:6|confirmed|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',

            'city'=> 'required',
            'phone' => 'required|regex:/(01)[0-9]{9}/|size:11|unique:users',
        //'phone'=> ['required',new validPhone],
        ],
       $messages = [
            'phone.required' => 'Unsupported phone number. ',
            'phone.regex' => 'Unsupported phone number. ',
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
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']) ,          
            'city' => $data['city'],
            'phone' => $data['phone'],
            'verifyToken' => Str::random(40),
              ]);

           $verifyUser = VerifyUser::create([
            'user_id' => auth()->user()->id,
            'token' =>  sha1(time()),
        ]);
 
        return $user;
    }
    //verify user 
     public function verifyUser($token)
    {
        $user = User::where('verifyToken', $token)->first();
        if(isset($user) ){
            //$user = $user->user;
            if(!$user->verified) {
                $user->verified = 1;
                $user->save();
                $status = "Your e-mail is verified. You can now login.";
            }else{
                $status = "Your e-mail is already verified. You can now login.";
            }
        }else{
            return redirect('/login')->with('warning', "Sorry your email cannot be identified.");
        }
 
        return redirect('/login')->with('status', $status);
    }


       /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
   
    protected function registered(Request $request, $user)
    {
        $this->guard()->logout();
       // event(new activateAccount($user));
      //$user->notify(new ActivateEmail($user));
        return redirect()->route('login')->with('message', 'Registered successfully!.. Please check your email to activate your account.!');
   }

}
