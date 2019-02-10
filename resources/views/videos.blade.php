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
                            <a class="video" href="{{$video->url}}">
                                <video
                            width="230"
                            height="120"
                            src="{{$video->url}}"
                            type="video/{{$video->format}}"
                            muted>
                                </video>
                            </a>
                        </div>
                        <div class="video-title-group">
                            <a href="{{$video->url}}" class="video-title">
                                {{ucfirst(str_replace('_', ' ', $video->title))}}
                            </a>
                            <a class="video-title-icons" href="{{$video->url}}" download>
                                <i class="fas fa-download"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <p style="margin-top: 20px">
            <a href="{{route(config('routes.add_video'))}}" class="btn btn-primary">Add video</a>
        </p>
    </div>
@endsection
