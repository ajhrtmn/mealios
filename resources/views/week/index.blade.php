@extends('layouts.app')

@section('content')

<div class="container" style="max-width: 500px;">
	<a href="/dashboard">Back</a>
	<ul style="margin-top: 1.5rem;">
		@foreach ($weeks as $week)
			<li><a href="/weeks/{{ $week->id }}">{{ $week->start_date }}</a></li>
		@endforeach
	</ul>
</div>

@endsection
