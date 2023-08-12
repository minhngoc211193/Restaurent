<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Type;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $foods = Food::all();
        return view('food.index', ['foods' => $foods]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();
        $foods = Food::all();
        return view('food.create', ['foods' => $foods, 'types' => $types]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $food = new Food();
        $food->type_id = $request->type_id;
        // $food->image = $request->image;
        $food->name= $request->name;
        $food->description = $request->description;
        $food->price= $request->price;
        $food->save();
        return redirect('/foods');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $food = Food::find($id);
        return view('food.show', ['food' => $food]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $food = Food::find($id);
        $types = Type::all();
        return view('food.edit', ['food'=>$food, 'types' => $types]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $food = Food::find($id);
        $food->type_id = $request->type_id;
        $food->name = $request->name;
        $food->description = $request->description;
        $food->price = $request->price;
        $food->save();
        return redirect('/foods');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $food = Food::find($id);
        $food->delete();
        return redirect('/foods');
    }
}