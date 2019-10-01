@extends('layouts.app')

@section('content')
<div class="container">
	<h2 class="center">Adicionar Anuncio</h2>
	<div class="row">
	 	<nav>
		    <div class="nav-wrapper green">
		      	<div class="col s12">
			        <a href="{{ route('admin.principal')}}" class="breadcrumb">Início</a>
			        <a href="{{route('admin.anuncios')}}" class="breadcrumb">Lista de Anuncios</a>
			        <a class="breadcrumb">Adicionar Anuncio</a>
		      	</div>
		    </div>
	  	</nav>
	</div>
	
	<div class="row">
		<form action="{{ route('admin.anuncios.salvar') }}" method="post" enctype="multipart/form-data">

		{{csrf_field()}}
		@include('admin.anuncios._form')

		<button class="btn blue">Adicionar</button>

			
		</form>
			
	</div>
	
</div>
	

@endsection