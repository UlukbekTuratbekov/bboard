@extends('layouts.base')
@section('title', 'Main')
@section('main')


        @if(count($bbs) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price, pyб.</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bbs as $bb)
                <tr>
                    <td><h3>{{ $bb->title }}</h3></td>
                    <td>{{ $bb->price }}</td>
                    <td>
                        <a href="{{route('detail', ['bb' => $bb->id] )}}">More details...</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
@endsection
