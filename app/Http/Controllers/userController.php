<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class userController extends Controller
{
    public function userRegister(Request $request)
    {
        
        // Validate input
        // $validated = $request->validate([

        //     'email' => 'required|email|unique:users,email',
        //     'password' => 'required|string|min:8',
        // ]);
        

        // dd($request->all());
        // Create a new user
        $user = new User();

        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->status = 'active'; // Set the status here
        $user->save();

        try {
            $user->save();
            Log::info('User successfully registered:', ['email' => $user->email]);
            return redirect()->route('login')->with('success', 'User registered successfully');
        } catch (\Exception $e) {
            Log::error('Error registering user:', ['error' => $e->getMessage()]);
            return back()->with('error', 'An error occurred while registering the user.');
        }
        



        // return redirect()->route('login')->with('success', 'User registered successfully');
    }
}
