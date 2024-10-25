<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }

    public function registerPost(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if ($request->hasFile('profile_photo')) {
            $path = $request->file('profile_photo')->store('profile_photo', 'public');
            $user->profile_photo = $path;
        }

        $user->save();

        return back()->with('success', 'Register successfully');
    }

    public function login(){
        return view('login');
    }

    public function loginPost(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)){
            return redirect('/recipe')->with('success', 'Login berhasil');
        }

        return back()->with('error', 'Login error');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'logout berhasil');
    }

    
    public function editProfile(){
        $user = Auth::user();
        return view('edit_profile', compact('user'));
    }

    
    public function updateProfile(Request $request){
        $user = Auth::user();

        
        $user->name = $request->name;

      
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

       
        if ($request->hasFile('profile_photo')) {
            
            if ($user->profile_photo && Storage::exists('public/' . $user->profile_photo)) {
                Storage::delete('public/' . $user->profile_photo);
            }

            
            $path = $request->file('profile_photo')->store('profile_photo', 'public');
            $user->profile_photo = $path;
        }

        
        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully');
    }
}
