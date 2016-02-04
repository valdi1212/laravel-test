@extends('app')

@section('content')

	<h1>About</h1>

	@if(count($people))
		<h3>People I Like:</h3>
		<ul>
			@foreach($people as $person)
				<li>{{ $person }}</li>
			@endforeach
		</ul>
	@endif

	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea et expedita laborum officia repudiandae! Aliquid
		dolorum
		earum est magni maiores nesciunt quia reiciendis repellendus sapiente veritatis. Aspernatur deserunt fugit
		ipsa!
	</p>
@stop
