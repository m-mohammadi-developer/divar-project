<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index(){ 
        return view('dashboard.home');
    }

    public function categories(){ 
        return view('dashboard.categories');
    }

    public function users(){ 
        return view('dashboard.users');
    }

    public function adverses(){ 
        return view('dashboard.adverses');
    }

    public function contacts(){ 
        return view('dashboard.contacts');
    }
}
