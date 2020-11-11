@extends('layouts.master')
@section('header')
    <header>SITIO WEB PINTORES</header>
@stop
@section('content')
    <body class="index">
    <main>
        <table>
            <tr>
                <th><a href="{{route('pintor1')}}"><img id="error" src="images\diegor.png" alt=""></a></th>
                <th><a href="{{route('pintor2')}}"><img src="images\leonardod.png" alt=""></a></th>
                <th><a href="{{route('pintor3')}}"><img src="images\miguela.png" alt=""></a></th>
                <th><a href="{{route('pintor4')}}"><img src="images\salvadord.png" alt=""></a></th>
            </tr>
        </table>
    </main>
@stop
@section('footer')
    @parent
@show
