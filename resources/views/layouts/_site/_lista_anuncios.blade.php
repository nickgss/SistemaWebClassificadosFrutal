<div class="row section">
	<h3 align="center">Anuncios</h3>
	<div class="divider"></div>
	<br>
	@include('layouts._site._filtros')
</div>
<div class="row section">
@foreach($anuncios as $anuncio)	
	<div class="col s12 m3">
		<div class="card">
			<div class="card-image">
				<a href="{{ route('site.anuncio',[$anuncio->id,str_slug($anuncio->titulo,'_')]) }}"><img src="{{ asset($anuncio->imagem) }}" alt="{{ $anuncio->titulo }}"></a>
			</div>
			<div class="card-content">
				<p><b class="deep-orange-text darken-1">{{ $anuncio->status }}</b></p>
				<p><b>{{ $anuncio->titulo }}</b></p>
				<p>{{ $anuncio->descricao }}</p>
				<p>R${{ number_format($anuncio->valor,2,",",".") }}</p>
			</div>
			<div class="card-action">
				<a href="{{ route('site.anuncio',[$anuncio->id,str_slug($anuncio->titulo,'_')]) }}">Ver mais..</a>
			</div>
		</div>
	</div>
@endforeach


</div>
@if($paginacao)
	<div align="center" class="row">
		{{ $anuncios->links() }}
	</div>
@endif