<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    //

    public function listar()
    {
        $team = Team::orderBy('id','desc')->get();
        return view('team.listar', compact('team'));

    }

    public function create(){
        return view('team.create');
    }

    public function store( Request $request){
        $team = new Team();
        $team->codigo = $request->codigo;
        $team->estadio = $request->estadio;
        $team->aforo = $request->aforo;
        $team->año = $request->año;
        $team->save();

        return redirect()->route('team.listar');
    }

    public function show ($id)
    {
        $team=Team::find($id);
        return view('team.show', compact('team'));
    }

    public function destroy ( Team $team)
    {
        $team->delete();
        return redirect()->route('team.listar');
    }

    public function edit(Team $team)
    {
        return view('team.edit', compact('team'));
    }

    public function update(Request $request, Team $team)
    {
        $team->codigo = $request->codigo;
        $team->estadio = $request->estadio;
        $team->aforo = $request->aforo;
        $team->año = $request->año;
        $team->save();

        return redirect()->route('team.listar');
    }
}
