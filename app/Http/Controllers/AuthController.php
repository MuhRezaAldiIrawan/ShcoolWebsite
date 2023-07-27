<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;
// use Illuminate\Console\View\Components\Alert;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Login';
        return view('admin.auth.login', compact('title'));
    }

    public function register(Request $request)
    {
        $title = 'Register';
        return view('admin.auth.register', compact('title'));
    }

    public function authenticate(Request $request)
    {
        $login = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($login)) {
            $request->session()->regenerate();
            toast('Berhasil Login', 'success');
            return redirect()->intended('/dashboard');
        }
        return back()->with('loginError', 'Login Failed');
    }

    public function store(Request $request)
    {
        // return $request->all();
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|min:3',

        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);


        // dd($request);
        User::create($validatedData);
        toast('Akun Anda Telah terdaftar', 'success');
        return redirect('/login');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        toast('Akun Anda Telah Berhasil Logout', 'success');
        return redirect('/login');
    }
}
