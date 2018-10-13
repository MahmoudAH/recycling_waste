<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;
use App\User;
use Auth;
use Exception;
class FacebookController extends Controller
{
    
    /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from facebook.
     *
     * @return \Illuminate\Http\Response
     */

    public function handleProviderCallback()
    {
        $facebookUser = Socialite::driver('facebook')->user();
        $existUser = User::where('email',$facebookUser->email)
           ->first();
        try
        {
            if($existUser){
                Auth::loginUsingId($existUser->id);
            }else{
                $user = new User();
                $user->name = $facebookUser->name;
                $user->email = $facebookUser->email;
                $user->password = md5(rand(1,10000));
                
                $user->save();
                Auth::loginUsingId($facebookUser->id);
            }
            return redirect()->to('/');

        }    
        catch(Exception $e){
            return 'error';
        }    

       
    }

}
