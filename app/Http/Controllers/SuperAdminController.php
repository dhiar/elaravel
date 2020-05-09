<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Session;
use Illuminate\Support\Facades\Redirect;

class SuperAdminController extends Controller
{
    public function logout() 
    {
        Session::put('user_name', null);
        Session::put('user_id', null);
        Session::put('message', null);
        return Redirect::to('/admin');
    }
}
