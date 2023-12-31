<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Session;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.users.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        $remember = $request->input('remember') ? true : false;
        if (Auth::attempt($credentials, $remember)) {
            Session::flash('success','Đăng nhập thành công');
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('home_page');
    }

    public function logOut()
    {
        Auth::logout();
        Session::flash('success','Đăng xuất thành công');
        return redirect()->route('admin.logout');
    }
}
