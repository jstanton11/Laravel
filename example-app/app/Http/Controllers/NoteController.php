<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Note;
use Illuminate\View\View;

class NoteController extends Controller
{
    public function index(): View
    {
        $notes = Note::all();
        return view('note.index', compact('notes'));
    }

    public function form(): View
    {
        return view('note.formulario');
    }

    public function store(Request $request): RedirectResponse
    {
        Note::create($request->all());

        return redirect()->route('note.index');
    }

    public function edit(Note $note): View
    {
        
        return view('note.edit', compact('note'));

    }

    public function update(Request $request, Note $note): RedirectResponse
    {
        
        $note->update($request->all());
        return redirect()->route('note.index');

    }

    public function show(Note $note): View
    {
        
        return view('note.show', compact('note'));

    }

    public function destroy(Note $note): RedirectResponse
    {
        
        $note->delete();
        return redirect()->route('note.index');

    }
}
