@extends('layouts.app')

@section('content')

<div class="container" style="max-width: 500px;">
	<a href="/recipes">Back</a>
	<h3 style="margin-top: 1.5rem;">{{ $recipe->name }}</h3>
	<ul class="ul-clean">
		@foreach ($ingredient_array as $ingredients)
			<li>{{ $ingredients[0] }} {{ $ingredients[1] }} {{ $ingredients[2] }}</li>
		@endforeach
	</ul>
</div>

@endsection
