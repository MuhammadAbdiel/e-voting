<?php

namespace App\Http\Controllers;

use App\Models\Calon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CalonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('calon.index', [
            'title' => 'Data Kandidat',
            'calons' => Calon::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('calon.create', [
            'title' => 'Tambah Data'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_calon' => 'required',
            'foto' => 'image|file|max:5120',
            'username' => 'required|unique:calons',
            'keterangan' => 'required'
        ]);

        if ($request->file('foto')) {
            $validatedData['foto'] = $request->file('foto')->store('foto-kandidat');
        }

        Calon::create($validatedData);
        return redirect('/dashboard/calon')->with('success', 'Kandidat baru telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Calon  $calon
     * @return \Illuminate\Http\Response
     */
    public function show(Calon $calon)
    {
        return view('calon.show', [
            'title' => 'Detail',
            'calon' => $calon
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Calon  $calon
     * @return \Illuminate\Http\Response
     */
    public function edit(Calon $calon)
    {
        return view('calon.edit', [
            'title' => 'Edit Data',
            'calon' => $calon
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Calon  $calon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Calon $calon)
    {
        $rules = [
            'nama_calon' => 'required',
            'keterangan' => 'required'
        ];

        if ($request->username != $calon->username) {
            $rules['username'] = 'required|unique:calons';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('foto')) {
            if ($request->fotoLama) {
                Storage::delete($request->fotoLama);
            }
            $validatedData['foto'] = $request->file('foto')->store('foto-kandidat');
        }

        Calon::where('id', $calon->id)->update($validatedData);
        return redirect('/dashboard/calon')->with('success', 'Data Kandidat telah diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Calon  $calon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Calon $calon)
    {
        if ($calon->foto) {
            Storage::delete($calon->foto);
        }

        Calon::destroy($calon->id);
        return redirect('/dashboard/calon');
    }
}
