@extends('layouts.master')
@section('header')

    <link rel="stylesheet" href="styles\styles2.css">
@stop
@section('navbar')
    <h2 style="color: azure; font-family: pacifico"> No disponible </h2>
    @stop
@section('content')
<div class="container h-80">
    <div class="row align-items-center h-100">
        <div class="col-3 mx-auto">
            <div class="text-center">
                <img id="profile-img" class="rounded-circle profile-img-card" src="https://i.imgur.com/6b6psnA.png" />
                <p id="profile-name" class="profile-name-card"></p>
                <form action="{{action('EstructurasDeControl@validar')}}" method="post">
                    {{csrf_field()}}
                    <input type="text" name="user" id="inputUser" class="form-control form-group" placeholder="user" required autofocus>
                    <br>
                    <input type="password" name="pass" id="inputPassword" class="form-control form-group" placeholder="password" required autofocus>
                    <br>
                    <input type="text" name="llave" id="inputllave" class="form-control form-group" placeholder="key" required autofocus>
                    <br>
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Enviar</button>
                </form><!-- /form -->
            </div>
        </div>
    </div>
</div>
@stop
@section('footer')
  <h2 style="color: azure; font-family: pacifico"> No disponible </h2>
@show



