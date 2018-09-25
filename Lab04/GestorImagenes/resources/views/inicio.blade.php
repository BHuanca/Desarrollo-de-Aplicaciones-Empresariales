@extends('app')

@section('content')

@if (Session::has('error'))
	<div class="alert alert-danger">
		<strong>Whoops</strong> Al parecer algo esta mal joven. <br><br>
		{{Session::get('error')}}
	</div>
@endif

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Inicio</div>
				<div class="panel-body">
				Bienvenido {{Auth::user()->nombre}}</div>
			</div>
		</div>
	</div>
</div>
@endsection
