@extends('layouts.app')

@section('metaTitle', 'Home')
@section('content')
<div class="main_container">
    <div>
        <div class="card_container">

            @foreach ($comics as $comic)

            <div class="card">
                <a href="{{route('fumetto', ['id' =>$loop->index])}} ">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                    <h5>{{ $comic['series'] }}</h5>
                </a>
            </div>
            @endforeach
        </div>
    </div>

</div>
@endsection