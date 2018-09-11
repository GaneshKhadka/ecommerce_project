<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
    	return view('admin.dashboard.index');
    }

    public function test(){
    	return view('admin.dashboard.test');
    }

    public function settings(){
    	return view('admin.dashboard.settings');
    }
}
