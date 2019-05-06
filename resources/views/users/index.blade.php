@extends('layouts.app')

@section('content')

<div class="container" style="max-width: 500px;">
	<div id="todays-meal">
		<h2> Today's Menu:</h2>
		<hr>
		<div>
			<div class="meal-time">Breakfast:</div>
			<div class="menu-item">Pancakes and Bacon</div>
		</div>
		<div>
			<div class="meal-time">Lunch:</div>
			<div class="menu-item">Turkey Sub</div>
		</div>
		<div>
			<div class="meal-time">Dinner:</div>
			<div class="menu-item">Pot Roast and Carrots</div>
		</div>

	</div>

	<div class="view-week-btn" style="flex-direction: column;">
		<a href="http://google.com" class="button btn">View This Week<span class="material-icons float-right icon">calendar_today</span></a>
		<a href="http://google.com" class="button btn"style="margin-top: 1rem;">View Shopping List<span class="material-icons float-right icon">done</span></a>
	</div>
	<div class="new-items" style="margin-top: 1rem;">
		<a href="/weeks/create" class="button btn week">New Week<span class="material-icons float-right icon">calendar_today</span></a>
		<a href="/recipes/create" class="button btn recipe">New Recipe<span class="material-icons float-right icon">assignment</span></a>
	</div>
	<div class="new-items">
		<a href="/weeks" class="button btn week">View Weeks<span class="material-icons float-right icon">calendar_today</span></a>
		<a href="/recipes" class="button btn recipe">View Recipes<span class="material-icons float-right icon">assignment</span></a>
	</div>
</div>

@endsection
