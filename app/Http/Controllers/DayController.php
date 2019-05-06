<?php

namespace App\Http\Controllers;

use App\Day;
use App\Week;
use App\Recipe;
use Illuminate\Http\Request;

class DayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $recipes = Recipe::where('owner_id', auth()->id())->get();

        return view('day.create', compact('recipes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $week = Week::where('owner_id', auth()->id())->latest()->get();

        $day = new Day;
        $day->owner_id = auth()->id();
        $day->week_id = $week[0]->id;
        $day->day_id = 1;

        for ($x = 1; $x <= 7; $x++) {
            $day->breakfast = json_encode($request['breakfast_D' . $x]);
            $day->lunch = json_encode($request['lunch_D' . $x]);
            $day->dinner = json_encode($request['dinner_D' . $x]);
        }

        $day->save();

        return redirect('/weeks');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Day  $day
     * @return \Illuminate\Http\Response
     */
    public function show(Day $day)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Day  $day
     * @return \Illuminate\Http\Response
     */
    public function edit(Day $day)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Day  $day
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Day $day)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Day  $day
     * @return \Illuminate\Http\Response
     */
    public function destroy(Day $day)
    {
        //
    }
}
