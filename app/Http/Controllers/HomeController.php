<?php

namespace App\Http\Controllers;

use App\Models\Video;

class HomeController extends Controller
{
    private const VIDEO_STORAGE = 'storage/videos/';
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
        return view('home', [
            'videos' => $videoModel->all(),
            'storage' => self::VIDEO_STORAGE
        ]);
    }
}
