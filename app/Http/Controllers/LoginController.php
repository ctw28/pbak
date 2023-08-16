<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //

    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {

        // return $request->all();
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // $role  = Auth::user()->roleDefault()->role->nama_role;
            $role = Auth::user()->userRole->nama_role;
            if ($role == "admin") {
                return redirect()->intended(route('admin.dashboard'));
            } else if ($role == "mahasiswa") {
                return redirect()->intended(route('mahasiswa.dashboard'));
            }
        }
        return back()->withInput()->with('fail', 'Login Gagal, pastikan username dan password sesuai');
    }

    public function username()
    {
        return 'username';
    }

    public function logout(Request $request)
    {
        Auth::logout();
        Session::flush();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('index');
    }
}
