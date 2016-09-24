<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artisan;

class ArtisanController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function make_auth () {
        Artisan::call('make:auth');
        $data = array('message' => 'Account created, press LOGIN','mbili' => 2 );
        return view('welcome', $data);
    }
}
