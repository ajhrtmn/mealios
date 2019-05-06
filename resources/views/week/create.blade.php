@extends('layouts.app')

@section('content')

<div class="container mx-auto">
	<a href="/dashboard">Back</a>
	<hr>
		<form method="POST" action="/weeks">
			@csrf
			<label>Start Date:</label>

			<div id="datepicker"></div>

			<input type="hidden" name="start_date" id="start_date">

			<hr>
			<button type="submit" class="form-control btn-primary" style="margin-top: 1.5rem;">Add Week</button>
		</form>
</div>

@endsection
