@extends('layouts.master')

@if(isset($poet) and is_object($poet))
    @php
        $title='Modificación de Poeta';
        $boton = 'Actualizar';
        $id = $poet->idPoet;
        $firstname = $poet->firstname;
        $surname = $poet->surname;
        $address = $poet->address;
        $postCode = $poet->postCode;
        $telephoneNumber = $poet->telephoneNumber;
    @endphp
@else
    @php
        $title='Alta de Poeta';
        $boton = 'Dar de alta';
        $id = '';
        $firstname = '';
        $surname = '';
        $address = '';
        $postCode = '';
        $telephoneNumber = '';
    @endphp
@endif
            
@section('title', 'Inicio').
@section('header')
<h1>@parent {{$title}}<h1>
@parent
@stop

 @section('navbar')
 @parent
 @stop

 @section('content')
 <form action="{{isset($poet) ? action('Crud@update') :action('Crud@store')}}" method="post" >
     {{csrf_field()}}
     @if(isset($poet) and is_object($poet))
     <input type="hidden" name="id" value="{{$id}}">
     @endif
<label for="firstname">Nombre</label>
<input type="text" name="firstname" value="{{$firstname}}">
<br>
<label for="surname">Apellido</label>
<input type="text" name="surname" value="{{$surname}}">
<br>
<label for="address">Direccion</label>
<input type="text" name="address" value="{{$address}}">
<br>
<label for="postCode">CodigoP</label>
<input type="text" name="postCode" value="{{$postCode}}">
<br>
<label for="telephoneNumber">Telefono</label>
<input type="text" name="telephoneNumber" value="{{$telephoneNumber}}">
<br>
<input type="submit" value="{{$boton}}">
</form>
    @stop

@section('footer')
   @parent
    @stop
