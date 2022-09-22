<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Team;
use App\Models\Role;
use Illuminate\Support\Facades\Storage;

class PlayerController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        $players = Player::with('role', 'team')->orderBy('id', 'DESC')->get();

        return view('players.index', compact('players', 'roles'));
    }

    public function show($id)
    {

        $player = Player::findOrFail($id);

        return view('players.show', compact('player'));
    }

    public function create()
    {
        $teams = Team::all();
        $roles = Role::all();

        return view('players.create', compact('teams', 'roles'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|min:2',
            'surname' => 'required|min:2',
            'birthday' => 'required',
            'country' => 'required',
            'image' => 'nullable',
            'path_image' => 'nullable'
        ]);


        
        $player = new Player;
        
        $player->name = $request->name;
        $player->surname = $request->surname;
        $player->team_id = $request->team_id;
        $player->birthday = $request->birthday;
        $player->country = $request->country;
        $player->role_id = $request->role_id;
        
        
        //STORAGGIO DELL'IMMAINGE
        //se c'è un immagine nella request
        if ($request->file()) {
            //prendi l'immagine
            $image = $request->file('image')->getClientOriginalName();
            //e mettila in un path
            $path = $request->file('image')->store('images', 'public');
        } else {
            //altrimenti metti un immagina di default      
            $path = 'images/no_photo.jpg'; //src
            $image = 'nessun file'; //alt
        }

        $player->image = $image;
        $player->path_image = $path;



        $player->save();

        return redirect()->route('players.index');
    }

    public function destroy(Player $player)
    {

        $player->delete();

        return redirect()->route('players.index');
    }

    public function edit(Player $player)
    {
        $roles = Role::all();
        $teams = Team::all();
        return view('players.edit', compact('player', 'teams', 'roles'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|min:2',
            'surname' => 'required|min:2',
            'birthday' => 'required',
            'country' => 'required',
            'image' => 'required',
        ]);

        $player = Player::findOrFail($id);

        $player->fill($request->all());

        $player->save();

        return redirect()->route('players.show', $id);
    }

    public function getRole($id)
    {

        $roles = Role::all();
        $players = Player::where('role_id', '=', $id)->get();
        return view('players.index', compact('players', 'roles'));
    }
}
