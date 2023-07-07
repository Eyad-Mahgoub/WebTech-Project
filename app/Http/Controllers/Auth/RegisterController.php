<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('Auth.register');
    }

    public function register(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $password = Hash::make($credentials['password']);
        $user = new User();

        $user->name = $credentials['name'];
        $user->email = $credentials['email'];
        $user->password = $password;

        $user->save();

        Auth::loginUsingId($user->id);

        if (Auth::check())
        {
            return redirect()->route('admin.index');
        }

        return redirect()->back()->withInput()->with('error_message', 'Something Went Wrong');
    }

}
