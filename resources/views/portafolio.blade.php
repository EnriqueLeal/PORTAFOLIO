@extends('layout')
@section('title','PORTAFOLIO')
@section('content')
<h1>PORTAFOLIO</h1>

<ul>
{{-- @if($portafolio) --}}
	@forelse($portafolio as $portafolioItem )
	<li> {{ $portafolioItem['title'] }}
		{{-- <pre>{{var_dump($loop)}}</pre> --}}
	</li>
	@empty
	<li>NO HAY DATOS</li>
	@endforelse
{{-- @else
 	<li>SIN DATOS</li>
@endif --}}
</ul>

@endsection