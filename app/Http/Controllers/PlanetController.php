<?php

namespace App\Http\Controllers;

use App\MOdels\Planet;
use App\Models\Planet as ModelsPlanet;
use Illuminate\Http\Request;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = Planet::all();
        return view('planets.index', ['planets' => $planets]);
    }

    public function show($id)
    {
        $planet = Planet::find($id);
        return view('planets.show', ['planet' => $planet]);
    }

    public function create()
    {
        return view('planets.create');
    }

    public function store(Request $request)
    {
        $planet = new Planet;

        $planet->名前 = $request->名前;
        $planet->英名 = $request->英名;
        $planet->半径 = $request->半径;
        $planet->重量 = $request->重量;

        $planet->save();

        return redirect('planets');
    }
}
