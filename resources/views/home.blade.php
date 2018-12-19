@extends('layouts.app')

@section('styles')
    <link href="{{ asset('css/videos-list.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="videos-list">
            @foreach($videos as $video)
            <div class="video-tile-in-list">
                <div>
                    <a class="video" href="{{$storage}}{{$video->title}}.{{$video->format}}">
                        <video
                            width="230"
                            height="120"
                            src="{{$storage}}{{$video->title}}.{{$video->format}}"
                            type="video/{{$video->format}}"
                            muted>
                        </video>
                    </a>
                </div>
                <div class="video-title-group">
                    <a href="{{$storage}}{{$video->title}}.{{$video->format}}" class="video-title">
                        {{ucfirst(str_replace('_', ' ', $video->title))}}
                    </a>
                    <a class="video-title-icons" href="{{$storage}}{{$video->title}}.{{$video->format}}" download>
                        <i class="fas fa-download"></i>
                    </a>
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </div>
@endsection
