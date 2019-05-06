<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get Users Recipes
        $recipes = Recipe::where('owner_id', auth()->id())->get();

        return view('recipe.index', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recipe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recipe = new Recipe;
        $recipe->owner_id = auth()->id();
        $recipe->name = $request['recipe_name'];
        $ingredients = array();

        for ($x = 1; $x <= 20; $x++) {
            array_push(
                $ingredients,
                $request['amount_'.$x],
                $request['measurement_'.$x],
                $request['ingredient_name_'.$x]
            );
        }

        foreach ($ingredients as $value) {
            if ($value == null) {
                array_pop($ingredients);
            }
        }

        $recipe->ingredients = json_encode($ingredients);
        $recipe->save();

        return redirect('/recipes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        $ingredient_list = $recipe->ingredients;
        $ingredients = json_decode($ingredient_list, true);
        $ingredient_array = array();
        $theCount = count($ingredients);
        $adder = 0;

        for ($y = ($theCount/3); $y > 0; $y--) {
            if ($y <= 0) {
                return view('recipe.show', compact('recipe', 'ingredients_array'));
            }
            $x = array();

            array_push($x, $ingredients[0 + $adder]);
            array_push($x, $ingredients[1 + $adder]);
            array_push($x, $ingredients[2 + $adder]);

            $adder += 3;

            array_push($ingredient_array, $x);
        }
        return view('recipe.show', compact('recipe', 'ingredient_array'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        //
    }
}
