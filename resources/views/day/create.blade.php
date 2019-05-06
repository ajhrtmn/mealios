@extends('layouts.app')

@section('content')

<div class="container" style="max-width: 500px;">
	<a href="/dashboard">Back</a>
	<hr>
		<form method="POST" action="/weeks/{{ $week->id }}/days">
			@csrf
			<div class="day-container">
				<h3>Day One:</h3>
				<div>Breakfast</div>
				<select name="breakfast_D1" class="form-control meal-dd">
					@foreach ($recipes as $recipe)
						<option>{{ $recipe->name }}</option>
					@endforeach
				</select>
				<div>Lunch</div>
				<select name="lunch_D1" class="form-control meal-dd">
					@foreach ($recipes as $recipe)
						<option>{{ $recipe->name }}</option>
					@endforeach
				</select>
				<div>Dinner</div>
				<select name="dinner_D1" class="form-control meal-dd">
					@foreach ($recipes as $recipe)
						<option>{{ $recipe->name }}</option>
					@endforeach
				</select>
			</div>
			<div class="day-container">
				<h3>Day Two:</h3>
				<div>Breakfast</div>
				<select name="breakfast_D2" class="form-control meal-dd">
					@foreach ($recipes as $recipe)
						<option>{{ $recipe->name }}</option>
					@endforeach
				</select>
				<div>Lunch</div>
				<select name="lunch_D2" class="form-control meal-dd">
					@foreach ($recipes as $recipe)
						<option>{{ $recipe->name }}</option>
					@endforeach
				</select>
				<div>Dinner</div>
				<select name="dinner_D2" class="form-control meal-dd">
					@foreach ($recipes as $recipe)
						<option>{{ $recipe->name }}</option>
					@endforeach
				</select>
			</div>
			<div class="day-container">
				<h3>Day Three:</h3>
				<div>Breakfast</div>
				<select name="breakfast_D3" class="form-control meal-dd">
					@foreach ($recipes as $recipe)
						<option>{{ $recipe->name }}</option>
					@endforeach
				</select>
				<div>Lunch</div>
				<select name="lunch_D3" class="form-control meal-dd">
					@foreach ($recipes as $recipe)
						<option>{{ $recipe->name }}</option>
					@endforeach
				</select>
				<div>Dinner</div>
				<select name="dinner_D3" class="form-control meal-dd">
					@foreach ($recipes as $recipe)
						<option>{{ $recipe->name }}</option>
					@endforeach
				</select>
			</div>
			<div class="day-container">
				<h3>Day Four:</h3>
				<div>Breakfast</div>
				<select name="breakfast_D4" class="form-control meal-dd">
					@foreach ($recipes as $recipe)
						<option>{{ $recipe->name }}</option>
					@endforeach
				</select>
				<div>Lunch</div>
				<select name="lunch_D4" class="form-control meal-dd">
					@foreach ($recipes as $recipe)
						<option>{{ $recipe->name }}</option>
					@endforeach
				</select>
				<div>Dinner</div>
				<select name="dinner_D4" class="form-control meal-dd">
					@foreach ($recipes as $recipe)
						<option>{{ $recipe->name }}</option>
					@endforeach
				</select>
			</div>
			<div class="day-container">
				<h3>Day Five:</h3>
				<div>Breakfast</div>
				<select name="breakfast_D5" class="form-control meal-dd">
					@foreach ($recipes as $recipe)
						<option>{{ $recipe->name }}</option>
					@endforeach
				</select>
				<div>Lunch</div>
				<select name="lunch_D5" class="form-control meal-dd">
					@foreach ($recipes as $recipe)
						<option>{{ $recipe->name }}</option>
					@endforeach
				</select>
				<div>Dinner</div>
				<select name="dinner_D5" class="form-control meal-dd">
					@foreach ($recipes as $recipe)
						<option>{{ $recipe->name }}</option>
					@endforeach
				</select>
			</div>
			<div class="day-container">
				<h3>Day Six:</h3>
				<div>Breakfast</div>
				<select name="breakfast_D6" class="form-control meal-dd">
					@foreach ($recipes as $recipe)
						<option>{{ $recipe->name }}</option>
					@endforeach
				</select>
				<div>Lunch</div>
				<select name="lunch_D6" class="form-control meal-dd">
					@foreach ($recipes as $recipe)
						<option>{{ $recipe->name }}</option>
					@endforeach
				</select>
				<div>Dinner</div>
				<select name="dinner_D6" class="form-control meal-dd">
					@foreach ($recipes as $recipe)
						<option>{{ $recipe->name }}</option>
					@endforeach
				</select>
			</div>
			<div class="day-container">
				<h3>Day Seven:</h3>
				<div>Breakfast</div>
				<select name="breakfast_D7" class="form-control meal-dd">
					@foreach ($recipes as $recipe)
						<option>{{ $recipe->name }}</option>
					@endforeach
				</select>
				<div>Lunch</div>
				<select name="lunch_D7" class="form-control meal-dd">
					@foreach ($recipes as $recipe)
						<option>{{ $recipe->name }}</option>
					@endforeach
				</select>
				<div>Dinner</div>
				<select name="dinner_D7" class="form-control meal-dd">
					@foreach ($recipes as $recipe)
						<option>{{ $recipe->name }}</option>
					@endforeach
				</select>
			</div>


			<hr>
			<button type="submit" class="form-control btn-primary" style="margin: 1.5rem 0rem;">Add Days</button>
		</form>
</div>

@endsection
