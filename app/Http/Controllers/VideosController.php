<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
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

    public function index(Video $video)
    {
        return view('videos', [
            'videos' => $this->videosParams($video),
            'storage' => self::VIDEO_STORAGE,
        ]);
    }

    public function createForm()
    {
        return view('add_video');
    }

    public function create(Request $request, Video $video)
    {
        $file = $request->file('video_file');
        $newFilePath = $file->store('videos');

         $video->addVideo(
            mb_strtolower($request->title),
            basename($newFilePath),
            $file->getClientOriginalExtension()
        );

        return redirect(config('routes.videos'));
    }

    private function videosParams(Video $videoModel): Collection
    {
        return $videoModel->all()->sortBy(Video::TITLE)->map(function (Video $video) {
            return (object)[
                'url' => asset(self::VIDEO_STORAGE . $video->filename),
                'title' => $video->title,
                'format' => $video->format,
            ];
        });
    }
}
