@extends ('Layouts.master')

@section('titulo','extra')
@section('sidebar')
@parent
<p>HOLA MUNDO</p>
@endsection
@section('content')
<li>Rosa</li>
<li>Azul</li>
@include('partials.parcial')
@endsection

