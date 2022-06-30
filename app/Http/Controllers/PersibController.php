<?php

namespace App\Http\Controllers;

use App\Exports\PersibExport;
use App\Models\Persib;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PersibController extends Controller
{
    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'show_name' => 'required|max:255',
            'position' => 'required|max:255',
            'number' => 'required|max:255',
        ]);
        Persib::create($validatedData);

        return redirect('/persib')->with('success', 'Persib Plus Show is successfully saved');
    }

    public function index()
    {
        $shows = Persib::all();

        return view('list', compact('shows'));
    }

    public function export()
    {
        return Excel::download(new PersibExport(), 'persib.xlsx');
    }
}
