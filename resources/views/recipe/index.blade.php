@extends('layouts.app')

@section('content')

<div class="container">
	<a href="/dashboard">Back</a>
	<ul style="margin-top: 1.5rem;">
		@foreach ($recipes as $recipe)
			<li><a href="/recipes/{{ $recipe->id }}">{{ $recipe->name }}</a></li>
		@endforeach
	</ul>
</div>






@endsection
