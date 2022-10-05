<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class LoginWithGoogleController extends Controller
{
    public function redirectToGoogle()
   {
       return Socialite::driver('google')->redirect();
   }

   public function handleGoogleCallback()
   {
       try {
     
           $user = Socialite::driver('google')->user();
      
           $finduser = User::where('google_id', $user->id)->first();
      
           if($finduser){
      
               Auth::login($finduser);
     
               return redirect()->route('dashboard');
      
           }else{
               $newUser = User::create([
                   'name' => $user->name,
                   'email' => $user->email,
                   'google_id'=> $user->id,
                   'password' => Hash::make('@20226744'),
                   'login_type' => "Google",
               ]);
     
               Auth::login($newUser);
     
               return redirect()->route('dashboard');
           }
     
       } catch (Exception $e) {
           dd($e->getMessage());
       }
   }
}
