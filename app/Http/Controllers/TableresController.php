<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Food;
use App\Models\Tableres;
use Illuminate\Http\Request;

class TableresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tablereses = Tableres::all();
        $employees = Employee::all();
        $foods = Food::all();
        return view ('tableres.index', ['tablereses' => $tablereses,'employees'=>$employees, 'foods' => $foods]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!auth()->check()) {
            return redirect('/login');
        }
        $tablereses = Tableres::all();
        $employees = Employee::all();
        $foods = Food::all();
        return view('tableres.create', ['tablereses' => $tablereses, 'employees' => $employees, 'foods' => $foods]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tableres = new Tableres();
        $tableres->view = $request->view;
        $tableres->employee_id = $request->employee_id;
        $tableres->customer = $request->customer;
        $tableres->phone = $request->phone;
        $tableres->save();
        $tableres->foods()->attach($request->foods);
        return redirect('/tablereses');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tableres = Tableres::find($id);
        $food=Food::find($id);
        return view('tableres.show', ['tableres' => $tableres, 'food' => $food]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (!auth()->check()) {
            return redirect('/login');
        }
        $tableres = Tableres::find($id);
        $employees = Employee::all();
        $foods = Food::all();
        return view('tableres.edit', ['tableres' => $tableres, 'employees' => $employees, 'foods' => $foods]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tableres = Tableres::find($id);
        $tableres->view = $request->view;
        $tableres->employee_id = $request->employee_id;
        $tableres->customer = $request->customer;
        $tableres->phone = $request->phone;
        $tableres->foods()->sync($request->foods);
        $tableres->save();
        return redirect('/tablereses');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!auth()->check()) {
            return redirect('/login');
        }
        $tableres = Tableres::find($id);
        $tableres->delete();
        return redirect('/tablereses');
    }
}
