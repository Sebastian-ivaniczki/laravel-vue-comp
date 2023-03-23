<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Models\Editor;
use App\Models\Game;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class GameController extends Controller
{

    public function send(Request $request)
    {
        $data = $request->all();
        $sender = $data['sender'];
        $subject = $data['subject'];
        $message = $data['message'];

        $mail = new ContactMail($sender, $subject, $message);
        Mail::to($sender)->send($mail);
        return response(null, 204);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::orderBy('updated_at', 'DESC')->with('editor', 'genres')->paginate(5);


        return response()->json($games);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $games = Game::find($id);
        $games->genres;
        $games->editor;
        if (!$games) return response(null, 404);
        return response()->json($games);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * games per editor 
     */

    public function editorGamesIndex(string $id)
    {
        // take editor by id 

        $editor = Editor::find($id);
        if (!$editor) {
            return response('', 404);
        }

        $games = $editor->games->all();
        return response()->json(compact('editor'));
    }
}
