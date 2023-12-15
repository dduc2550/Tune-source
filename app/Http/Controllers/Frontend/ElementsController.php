<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ElementsController extends Controller
{
    public function elements()
    {
        return view('frontend.home.elements');
    }
}
