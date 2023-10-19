<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index(){
        return view('adminside.home');
    }

    public function login(Request $request)
    {
        if(Auth::guard('web')->check()){
            return view('adminside.home');
        }

        if ($request->getMethod() == 'GET') {
            return view('adminside.login');
        }

        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only(['email', 'password']);
        if (Auth::guard('web')->attempt($credentials)) {
            $userId = Auth::guard("web")->id();

            if ($userId != '1'){
                $this->signOut();
            }
            return redirect('admin/');
        } else {
            return redirect()->back();
        }
    }

    public function signOut() {
        Auth::guard('web')->logout();
        Session::flush();
        return Redirect('admin/login');
    }

    public function viewImage() {
        return view('adminside.viewimage');
    }
}
