<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

session_start();

class AdminController extends Controller
{
    public function index() 
    {
        return view('admin_login');
    }

    public function show_dashboard()
    {
        return view('admin.dashboard');
    }

    public function dashboard(Request $request)
    {
        $email = $request->email;
        $password = md5($request->password);
        // dd(Admin::whereEmail($email)->wherePassword($password)->first());

        $result = Admin::whereEmail($email)->wherePassword($password)->first();

        if ($result) {
            Session::put('user_name',$result->name);
            Session::put('user_id',$result->id);
            Session::put('message', null);
            return Redirect::to('/dashboard');
        } else {
            Session::put('message', 'Email or Password Invalid');
            return Redirect::to('/admin');
        }
    }
}
