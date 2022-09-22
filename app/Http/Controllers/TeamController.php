<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();

        return view('teams.index', compact('teams'));
    } 

    public function show($id)
    {
        $team = Team::FindorFail($id);
        $players = Team::find($id)->players;

        /* dd($players); */
        return view('teams.show', compact('team','players'));
    }

    public function create(){
        return view('teams.create');
    }

    public function store(Request $request){

        $team = new Team;

        $team->name = $request->name;
        $team->city = $request->city;
        $team->championship = $request->championship;
        $team->ceo = $request->ceo;
        $team->logo = $request->logo;

        $team->save();

        return redirect()->route('teams.index');
    }

    public function edit(Team $team){

        return view('teams.edit', compact('team'));
    }

    public function update(Request $request, $id){

        
        $team = Team::findOrFail($id);

        $team->fill($request->all());

        $team->save();

        return redirect()->route('teams.show', $id);
    }


    public function destroy(Team $team)
    {

        $team->delete();

        return redirect()->route('teams.index');
    }

}
