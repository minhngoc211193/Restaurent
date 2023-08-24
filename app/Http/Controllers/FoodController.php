<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        if (!auth()->check()) {
            return redirect('/login');
        }
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
        $food->name= $request->name;
        if ($request->hasFile('image')) {
            $food->image = $request->file('image')->store('public/images');
            $food->image = str_replace('public/', '/storage/', $food->image);
        }
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
        if (!auth()->check()) {
        return redirect('/login');
    }
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
        if ($request->hasFile('image')) {
            Storage::destroy(str_replace('/storage/','public/', $food->image));
            $food->image = $request->file('image')->store('public/images');
            $food->image = str_replace('public/', '/storage/', $food->image);
        }
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
        if (!auth()->check()) {
            return redirect('/login');
        }
        $food = Food::find($id);
        
        //xóa ảnh sản phẩm
        if (Storage::exists(str_replace('/storage/','public/', $food->image))) {
            Storage::delete(str_replace('/storage/','public/', $food->image));
        }
        // xóa món
        $food->delete();
        return redirect('/foods');
    }

    public function search(Request $request)
    {
        $keyword = $request->input('search');
        $foods = Food::where('name', 'like', '%' . $keyword . '%')->get();
            // echo ($foods);
        // Trả về view hiển thị kết quả tìm kiếm
        return view('food.index',['foods'=>$foods]);
        }

    }

