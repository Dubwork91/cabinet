<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthentController extends Controller
{
    
    public function displaySignup()
    {
        return view('signUp');
    }
  
    public function displayLogin()
    {
        return view('login');
    }
    
    public function signup(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'role' => 'required',
        ]);
        // dd($validated);
        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $fName = 'picture' .$validated['name']. '.' . $file->getClientOriginalExtension();
            $photo = $request->file('picture')->storeAs('img/user', $fName, 'public');
            $validated['picture'] = 'storage/' . $photo;
        }
        $validated['password'] = Hash::make($validated['password']);
        $user = User::create($validated);
        return redirect()->route('login');
    }
    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if ($user->role == "Admin") {
                return redirect()->route('dashAdmin');
            } else if ($user->role == "Patient") {
                return redirect()->route('dashPatient');
            } else if ($user->role == "Doctor") {
                return redirect()->route('dashDoctor');
            }elseif ($user->role == "Assistant"){
                return redirect()->route('dashAssistant');
            }
        }return back()->withErrors([
            'password' => "Les donnees saisies sont incorrect veuillez les verifier s'il vous plait.",
        ])->onlyInput('password');
    }

    public function logout(Request $request)
    {
        // Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
