@extends('layouts.base')
@section('title', 'Removal of the announcement: : my announcement')
@section('main')
        <h2>{{$bb->title}}</h2>
        <p> {{$bb->content}} </p>
        <p> {{$bb->price}}</p>
        <p> Author: {{$bb->user->name}}</p>
        <form action="{{route('bb.destroy', ['bb' => $bb->id]) }}" , method="post">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger" value="Delete">
        </form>
{{--        <p><a href="{{route('index')}}">On the list of announcements</a></p>--}}
@endsection
