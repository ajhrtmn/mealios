@extends('layouts.app')

@section('content')
	<div class="container" style="max-width: 500px;">
		<a href="/dashboard">Back</a>
		<hr>
		<form method="POST" action="/recipes">
			@csrf
			<label for="recipe_name">Recipe Name:</label>
			<input type="text" name="recipe_name" id="recipe_name" class="form-control">
			<label for="recipe_name" style="margin-top: 1rem;">Ingredients:</label>
			<div id="ingredient_wrapper">
				<div id="recipe_form_ingredients">
					<input type="number" name="amount_1" id="amount_1" class="form-control amount">
					<select name="measurement_1" id="measurement_1" class="form-control measurement">
						<option>TSPs</option>
						<option>TBSPs</option>
						<option>OZs</option>
						<option>LBs</option>
						<option>QTs</option>
						<option>CUPs</option>
					</select>
					<div style="display: flex; align-items: center; font-size: 1rem;">of</div>
					<input type="text" name="ingredient_name_1" id="ingredient_name_1" class="form-control ingredient_name">
					<span onclick="removeText()" class="material-icons border" style="margin-left: .5rem; display: flex; align-items: center; padding: 0px .5rem;">clear</span>
				</div>
			</div>
			<a id="add_button" onclick="appendText()" class="btn btn-dark w-100" style="margin-top: 1rem" href="#">Add Ingredient</a>
			<hr>
			<button type="submit" class="form-control btn-primary" style="margin-top: 1rem;">Add Recipe</button>
		</form>

	</div>

	<script>
		var currentIngredient = 2;

		function appendText() {
			line_01 = '<div id="ingredient_' + currentIngredient;
			line_02 = '" style="margin-top: .5rem;">';
				line_03 = '<div id="recipe_form_ingredients">';
					line_04 = '<input type="number" name="amount_' + currentIngredient + '" id="amount_' + currentIngredient + '" class="form-control amount">';
					line_05 = '<select name="measurement_' + currentIngredient + '" id="measurement_' + currentIngredient + '" class="form-control measurement">';
						line_06 = '<option>TSPs</option>';
						line_07 = '<option>TBSPs</option>';
						line_08 = '<option>OZs</option>';
						line_09 = '<option>LBs</option>';
						line_10 = '<option>QTs</option>';
						line_11 = '<option>CUPs</option>';
					line_12 = '</select>';
					line_13 = '<div style="display: flex; align-items: center; font-size: 1rem;">of</div>';
					line_14 = '<input type="text" name="ingredient_name_' + currentIngredient + '" id="ingredient_name_' + currentIngredient + '" class="form-control ingredient_name">';
					line_15 = '<span onclick="removeText()" class="material-icons border" style="margin-left: .5rem; display: flex; align-items: center; padding: 0px .5rem;">clear</span>';
				line_16 = '</div>';
			line_17 = '</div>';
			new_ingredient = line_01 + line_02 + line_03 + line_04 + line_05 + line_06 + line_07 + line_08 + line_09 + line_10 + line_11 + line_12 + line_13 + line_14 + line_15 + line_16 + line_17;
			$("#ingredient_wrapper").append(new_ingredient);
			currentIngredient++;
		}
		function removeText(){
			currentIngredient--;
			$('#ingredient_' + currentIngredient).empty();

		}

	</script>
@endsection
