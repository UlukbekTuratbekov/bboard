@extends('layouts.base')
@section('title', $bb->title)
@section('main')
        <h2>{{$bb->title}}</h2>
        <p> {{$bb->content}} </p>
        <p> {{$bb->price}}</p>
        <p> Author: {{$bb->user->name}}</p>
        <p><a href="{{route('index')}}">On the list of announcements</a></p>
@endsection
