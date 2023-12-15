<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Song; // Đảm bảo import model của bạn

class ListenController extends Controller
{
    public function listen()
    {
        $allSong = DB::table('songs')->where('deleted_at', null)->get();
        return view("frontend.home.albums-store", ['songs' => $allSong]);
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        $songs = Song::where('name', 'like', '%' . $searchTerm . '%')->get();

        return view('frontend.home.albums-store', ['songs' => $songs]);
    }
}
