<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Http\Request;
use App\Http\Requests\PostFormLogin;

class LoginController extends Controller
{
    public function index()
    {
        //hien thi giao dien cho nguoi dung
        return view("frontend.home.login");
    }
  
}
