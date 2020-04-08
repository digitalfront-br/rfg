@extends('layouts.appDash')

@section('content')
<h1>{{ $data->titulo }}</h1>
<img src="{{ $data->miniatura }}" alt="">
<p>{{ $data->descricao }}</p>
@endsection
