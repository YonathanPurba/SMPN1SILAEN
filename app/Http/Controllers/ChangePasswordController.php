<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ChangePasswordController extends Controller
{
    public function index()
    {
    	return view('admin.change-password');
    }
}
