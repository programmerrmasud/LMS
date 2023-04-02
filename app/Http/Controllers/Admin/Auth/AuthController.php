<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function AdminGetLogin()
    {
        return view('BackEnd.User.Auth.Login');
    }

     /**
     * Login Session Management
     */
    public function AdminLogin(Request $request)
    {
        // $data = $request->all();
        // dd($data);
        
        {
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);
    
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('/');
            }
    
            return back()->withErrors([
                'email' => 'Credentials do not match our records.',
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function AdminGetRegister()
    {
        return view('BackEnd.User.Auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function AdminRegister(Request $request)
    {
        {
            // Validate the incoming request data
            $validatedData = $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:4',
            ]);
         
            // Create a new user and save it to the database
            $admin = new Admin;
            $admin->name = $validatedData['name'];
            $admin->email = $validatedData['email'];
            $admin->password = Hash::make($validatedData['password']);
            $admin->save();
        
            return redirect('/')->with('success', 'User created successfully!');
            
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
