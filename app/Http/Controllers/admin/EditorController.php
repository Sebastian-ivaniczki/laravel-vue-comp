<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Editor;
use Illuminate\Http\Request;

class EditorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $editors = Editor::all();
        return view('admin.editors.index', compact('editors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $editor = new Editor();
        return view('admin.editors.create', compact('editor'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $new_editor = new Editor();
        $new_editor->fill($data);

        $new_editor->save();
        return to_route('admin.editors.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Editor $editor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Editor $editor)
    {
        return view('admin.editors.edit', compact('editor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Editor $editor)
    {
        $data = $request->all();
        $editor->update($data);
        return to_route('admin.editors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Editor $editor)
    {
        $editor->delete();
        return to_route('admin.editors.index');
    }
}
