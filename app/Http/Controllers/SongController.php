<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

// VALIDATE
use Illuminate\Support\Facades\Validator;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $songs = Song::all();
        // $songs = Song::all(); <-- senza pagination
        $songs = Song::paginate(20);

        return view('songs.list', compact('songs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('songs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validation($request->all());
        $song = new Song;
        $song->fill($data);
        $song->save();
        return redirect()->route('songs.show', $song);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Song $song)
    {
        return view('songs.show', compact('song'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Song $song)
    {
        return view('songs.edit', compact('song'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Song $song)
    {
        $data = $this->validation($request->all());
        $song->update($data);
        return redirect()->route('songs.show', $song);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Song $song)
    {
        $song->delete();
        return redirect()->route('songs.index');
    }



    private function validation($data)
    {
        $validator = Validator::make(
            $data,
            [
                'title' => 'required|string|max:80',
                'album' => 'string|max:60',
                "author" => "string|max:50",
                "editor" => "string|max:50",
                "length" => "required|decimal:2,4",
                "img" => "nullable|string",
            ],
            [
                'title.required' => 'Il titolo è obbligatorio',
                'title.string' => 'Il titolo deve essere una stringa',
                'title.max' => 'Il nome deve avere un massimo di 80 caratteri',

                'album.max' => 'Il nome deve avere un massimo di 80 caratteri',
                'album.string' => 'L\'album deve essere una stringa',

                'author.max' => 'Il nome deve avere un massimo di 80 caratteri',
                'author.string' => 'L\'autore deve essere una stringa',


                'editor.max' => 'Il nome deve avere un massimo di 50 caratteri',
                'editor.string' => 'L\'editor deve essere una stringa',


                'length.decimal' => 'La length deve essere un numero',
                'length.required' => 'La length è obbligatoria',

                'img.string' => 'L\'immagine deve essere una stringa',
            ]
        )->validate();
        return $validator;
    }
}
