@extends ('Layouts.master')

@section('titulo','Página hijo')
@section('sidebar')
	@parent
	<p>Estoy en hijo del sidebar master</p>
@endsection
@section('content')
	@include('partials.message')
@endsection