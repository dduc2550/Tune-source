<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    public function index(Request $request)
    {
        $idSong = $request->id;
        $idSong = is_numeric($idSong) ? $idSong : 0;
        $infoSong = DB::table('songs')->where('id', $idSong)->first();
        return view('frontend.detail.index', ['info' => $infoSong]);
    }

    public function download(Request $request)
    {
        if($request->session()->has('username')){
            // duoc download - vi da dang nhap
        } else {
            return redirect()->back()->with('error_download', 'You need to log in to download');
        }
    }
}