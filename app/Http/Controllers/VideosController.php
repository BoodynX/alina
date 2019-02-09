<?php

namespace App\Http\Controllers;

use App\Models\Video;

class VideosController extends Controller
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
        return view('videos', [
            'videos' => $videoModel->all()->sortBy(Video::TITLE),
            'storage' => self::VIDEO_STORAGE
        ]);
    }
}
