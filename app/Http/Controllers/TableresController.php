<?php

namespace App\Http\Controllers;

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
        return view ('tableres.index', ['tablereses' => $tablereses]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tablereses = Tableres::all();
        return view('tableres.create', ['tablereses' => $tablereses]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tableres = new Tableres();
        $tableres->view = $request->view;
        $tableres->save();
        return redirect('/tablereses');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tableres = Tableres::find($id);
        return view('tableres.show', ['tableres' => $tableres]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tableres = Tableres::find($id);
        return view('tableres.edit', ['tableres' => $tableres]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tableres = Tableres::find($id);
        $tableres->view = $request->view;
        $tableres->save();
        return redirect('/tablereses');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tableres = Tableres::find($id);
        $tableres->delete();
        return redirect('/tablereses');
    }
}
