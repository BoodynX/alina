<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Support\Collection;

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
            'videos' => $this->videosParams($videoModel),
            'storage' => self::VIDEO_STORAGE,
        ]);
    }

    private function videosParams(Video $videoModel): Collection
    {
        return $videoModel->all()->sortBy(Video::TITLE)->map(function (Video $video) {
            return (object)[
                'url' => asset(self::VIDEO_STORAGE . $video->title . '.' . $video->format),
                'title' => $video->title,
                'format' => $video->format,
            ];
        });
    }
}
