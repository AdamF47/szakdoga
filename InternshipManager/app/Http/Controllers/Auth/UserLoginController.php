<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserLoginController extends Controller
{
    public function index()
    {
        
        return view('auth.userlogin');
    }

    public function store(Request $request){

        $this->validate($request, [
            'neptuncode' => 'required',
            'password' => 'required',
        ]);

        if (!auth()->attempt($request->only('neptuncode', 'password'))) {
            return back()->with('status', 'Invalid login details');
        }

        return redirect()->route('userdashboard');
    }
}
