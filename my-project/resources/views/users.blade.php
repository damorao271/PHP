@extends('layout')

@section('content')
    <ul>
    @foreach ($users as $user)
    <li>
      {{$user}}
    </li> 
    @endforeach
    </ul>
    
  <h2>{{$titulo}}</h2>
    @if ( empty($contenido))
      <p>No Hay contenido</p>
    @endif
  <p>{{$contenido}}</p>

  <div class="row">
    <div class="col-6">A</div>
    <div class="col-6">B</div>
  </div>
  @include('boton')
  @include('boton')
  @include('boton')
  @include('boton')
    
@endsection
