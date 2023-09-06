<?php

namespace App\Http\Controllers;

use App\MOdels\Planet;
use App\Models\Planet as ModelsPlanet;
use App\Http\Requests\PlanetRequest;

use function PHPUnit\Framework\returnSelf;

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

    public function edit($id)
    {
        $planet = Planet::find($id);
        return view('planets.edit', ['planet' => $planet]);
    }

    public function update(PlanetRequest $request, $id)
    {
        $planet = Planet::find($id);

        $planet->名前 = $request->名前;
        $planet->英名 = $request->英名;
        $planet->半径 = $request->半径;
        $planet->重量 = $request->重量;

        $planet->save();

        return redirect('planets');
    }

    public function destroy($id)
    {
        $planet = Planet::find($id);
        $planet->delete();
        return redirect('/planets');

    }

    public function create()
    {
        return view('planets.create');
    }

    public function store(PlanetRequest $request)
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
