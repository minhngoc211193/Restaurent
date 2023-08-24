<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::all();
        return view('type.index', ['types' => $types]);
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
        return view('type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $type = new Type();
        $type->name= $request->name;
        if ($request->hasFile('image')) {
            $type->image = $request->file('image')->store('public/images');
            $type->image = str_replace('public/', '/storage/', $type->image);
        }
        $type->description = $request->description;
        $type->save();
        return redirect('/types');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $type = Type::find($id);
        return view('type.show', ['type' => $type]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (!auth()->check()) {
            return redirect('/login');
        }
        $type = Type::find($id);
        return view('type.edit', ['type' => $type]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $type = Type::find($id);
        $type->name= $request->name;
        if ($request->hasFile('image')) {
            Storage::delete(str_replace('/storage/', 'public/', $type->image));
            $type->image = $request->file('image')->store('public/images');
            $type->image = str_replace('public/', '/storage/', $type->image);
        }
        $type->description = $request->description;
        $type->save();
        return redirect('/types');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!auth()->check()) {
            return redirect('/login');
        }
        $type = Type::find($id);
        // xóa ảnh nếu nó tồn tại
        if (Storage::exists(str_replace('/storage/','public/', $type->image))) {
            Storage::delete(str_replace('/storage/','public/', $type->image));
        }
        // xóa sản phẩm
        $type->delete();
        return redirect('/types');
    }
}
