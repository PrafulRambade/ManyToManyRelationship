<?php

namespace App\Http\Controllers;
use App\Models\Singer;
use App\Models\Song;

use Illuminate\Http\Request;

class SingerController extends Controller
{
    public function add_singer(){
        $singers=new Singer;
        $singers->name="Praful";
        $singers->save();

        $song_ids=[3];
        $singers->songs()->attach($song_ids);
    }
    public function index(){
        $data = Singer::with('songs')->get();
        return view('singers_index')->with('singer_data',$data);
    }   
}
