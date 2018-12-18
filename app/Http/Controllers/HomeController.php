<?php

namespace App\Http\Controllers;

use App\Models\Video;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Video $videoModel)
    {
        $videos = $videoModel->all();

        return view('home', ['videos' => $videos]);
    }
}
