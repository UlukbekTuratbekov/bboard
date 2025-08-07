@extends('layouts.base')
@section('main')
        <h2>{{$bb->title}}</h2>
        <p> {{$bb->content}} </p>
        <p><a href="/">On the list of announcements</a></p>
@endsection
