<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class ClientController extends Controller
{
    public function index(){
        return view('clientside.home');
    }

    public function login(Request $request)
    {
        if(Auth::guard('web')->check()){
            return view('clientside.home');
        }

        if ($request->getMethod() == 'GET') {
            return view('clientside.login');
        }

        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only(['email', 'password']);
        if (Auth::guard('web')->attempt($credentials)) {
            return redirect('/');
        } else {
            throw \Illuminate\Validation\ValidationException::withMessages([
                'password' => ['Password incorect'],
            ]);
            return redirect()->back();
        }
    }

    public function registration()
    {
        return view('clientside.create_acc');
    }

    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect('login');
    }

    public function create(array $data)
    {
        $cus = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        return true;
    }

    public function signOut() {
        Auth::guard('web')->logout();
        Session::flush();
        return Redirect('login');
    }
}
