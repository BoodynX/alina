@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div style="text-align: center">
            @foreach($videos as $video)
            <div class="vid-in-list" style="display: inline-block">
                <div>
                    <a class="video" href="videos/{{$video->title}}.{{$video->format}}">
                        <video
                            width="230"
                            height="120"
                            src="videos/{{$video->title}}.{{$video->format}}"
                            type="video/{{$video->format}}"
                            muted>
                        </video>
                    </a>
                </div>
                <div class="vtitle-group">
                    <a href="videos/{{$video->title}}.{{$video->format}}" class="vtitle">
                        {{ucfirst(str_replace('_', ' ', $video->title))}}
                    </a>
                    <a class="video" href="videos/{{$video->title}}.{{$video->format}}" style="float: right; margin-right: 5px" download>
                        <i class="fas fa-download"></i>
                    </a>
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </div>
@endsection
