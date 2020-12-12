@extends('layouts.master')
@section('title', 'Inicio').
@section('header')
<h1>@parent P O E T A S <h1>
@parent
@stop

 @section('navbar')
 @parent
 @stop

 @section('content')
 <div><a href="{{action('Crud@create')}}">Agregar un nuevo Poeta<img src="{{url('images/add-file.png')}}"></a></div>
 <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">idPoeta</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Direccion</th>
      <th scope="col">CP</th>
      <th scope="col">Telefono</th>
      <th scope="col">Actualizar</th>
      <th scope="col">Borrar</th>
    </tr>
  </thead>
  <tbody>
  @foreach($poets as $poet)
    <tr>
      <th scope="row">{{$poet->idPoet}}</th>
      <td>{{$poet->firstname}}</td>
      <td>{{$poet->surname}}</td>
      <td>{{$poet->address}}</td>
      <td>{{$poet->postCode}}</td>
      <td>{{$poet->telephoneNumber}}</td>
      <td><a href="{{action('Crud@show',['id'=>$poet->idPoet])}}"><img src="{{url('images/edit.png')}}"></a></td>
      <td><a href="{{action('Crud@destroy',['id'=>$poet->idPoet])}}"><img src="{{url('images/delete.png')}}"></a></td>
    </tr>
   @endforeach
  </tbody>
</table>
@if(session('status'))
<div class="alert alert-danger" role="alert">
  {{session('status')}}
</div>
@endif
    @stop

    @section('footer')
   @parent
    @stop
