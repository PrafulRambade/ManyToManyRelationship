<?php

namespace App\Http\Controllers;
use App\Models\Song;
use App\Models\Singer;

use Illuminate\Http\Request;

class SongController extends Controller
{
    public function add_song(){
        $song = new Song;
        $song->title="Baby ko base pasand hai";
        $song->save();
    }
    
}
