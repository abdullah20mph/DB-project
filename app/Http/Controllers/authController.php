<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function loginAuth (Request $request)
    {
        // Your login logic here
        $credentials = $request->only('email', 'password');
        

        if (Auth::attempt($credentials)) {
            return redirect()->route('user-page')->with('success', 'Welcome to your dashboard!');
            
        }

      

        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    function logoutAuth(Request $request){

        Auth::logout();

        $request->session()->invalidate();

        return redirect()->route('form_from_action');

        }

          
    }

    


    
    

    

