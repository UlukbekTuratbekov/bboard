@extends('layouts.base')

@section('title','My  announcements')
@section('main')

    <h2>Welcome, {{ Auth::user()->name }}</h2>

    <p class="text-right"><a href="{{route('bb.add')}}">Добавить объявление</a>></p>
       @if(count($bbs) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price, pyб.</th>
                    <th colspan="2">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($bbs as $bb)
                <tr>
                    <td><h3>{{ $bb->title }}</h3></td>
                    <td>{{ $bb->price }}</td>
                    <td>
                        <a href="{{ route('bb.edit', ['bb' => $bb->id]) }}">Change</a>
                    </td>
                    <td>
                        <a href="{{ route('bb.delete', ['bb' => $bb->id]) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
       @endif
@endsection

