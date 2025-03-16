<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Scalar\String_;

class RegistrationController extends Controller
{
    public function register(){
        return view('registration');
    }

    public function addProfile(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'repeat_password' => 'required'
        ]);

        $profile = new Profile();
        $profile->name = $request->input('name');
        $profile->email = $request->input('email');

        $password = Hash::make($request->input('password'));

        $profile->password = $password;

        $profile->save();

        return redirect()->route('sign');
    }

    public function sign(){
        return view('sign');
    }

    public function signCheck(Request $request){
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (!$this->checkProfile($request)){
            return redirect()->route('sign');
        }
        else{
            return redirect()->route('home');
        }

    }

    public function checkProfile(Request $request){
        foreach (Profile::all() as $profile){
            if($profile->email == $request->input('email')){
                return $this->checkPassword($request->input('password'), $profile->password);
            }
        }
        return false;
    }
    public function checkPassword(String $requestPasswd, String $profilePasswd)
    {
        if (Hash::check($requestPasswd, $profilePasswd)) {
            return true;
        }
        else{
            return false;
        }
    }
}
