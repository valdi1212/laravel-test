@extends('app')

@section('content')
	<h1>{{ $article->string }}</h1>

	<article>
		{{ $article->body }}
	</article>
@stop
