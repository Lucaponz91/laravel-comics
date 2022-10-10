@extends('layouts.app')
@section('metaTitle',$comic['title'])

@section('content')
<div>
    <div>
        <h1>{{$comic['title']}}</h1>
        <h4>{{$comic['price']}}</h4>
        <p>{{$comic['description']}} </p>
    </div>
    <img src="" alt="">
</div>
@endsection