<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::orderBy('updated_at', 'DESC')->get();

        return view('admin.games.index', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $game = new Game;
        $genres = Genre::all();
        return view('admin.games.create', compact('game', 'genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // TODO validation
        // $request->validate();

        // retrieve the input values
        $data = $request->all();

        // create a new game
        $game = new Game();

        // fill new game with data from form
        $game->fill($data);

        // define publish or not
        // $game->is_published = Arr::exists($data, 'is_published');


        // save new project on db
        $game->save();

        // if genres are given, add to the game
        if (Arr::exists($data, 'genres')) $game->genres()->attach($data['genres']);

        // redirect to its detail
        return to_route('admin.games.show', $game->id)->with('message', "$game->title created succesfully.")->with('type', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        $genres = Genre::all();
        return view('admin.games.show', compact('game', 'genres'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        $genres = Genre::all();
        return view('admin.games.edit', compact('game', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Game $game)
    {
        // TODO validation
        // $request->validate();

        $data = $request->all();

        // define publish or not
        // $data['is_published'] = Arr::exists($data, 'is_published');

        $game->update($data);

        // if genres are given, add to the game
        // if (Arr::exists($data, 'genres')) $game->genres()->sync($data['genres']);
        // else $game->genres()->detach();

        return to_route('admin.games.show', $game->id)->with('message', "$game->title updated succesfully.")->with('type', 'warning');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        if (count($game->genres)) $game->genres()->detach();

        $game->delete();

        return to_route('admin.games.index')->with('message', "$game->title deleted succesfully.")->with('type', 'danger');
    }
}
