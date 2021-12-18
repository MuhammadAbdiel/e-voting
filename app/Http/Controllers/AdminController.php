<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'title' => 'Data User',
            'admins' => User::latest()->where('level', '!=', 'Pemilih')->get()
        ]);
    }

    public function edit(User $user)
    {
        return view('admin.edit', [
            'title' => 'Edit Data',
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'nim' => 'required',
            'nama_pengguna' => 'required|max:255',
            'jenis_kelamin' => 'required',
            'jurusan' => 'required',
            'prodi' => 'required',
            'kelas' => 'required',
            'level' => 'required'
        ];

        if ($request->username != $user->username) {
            $rules['username'] = 'required|unique:users';
        }

        $validatedData = $request->validate($rules);

        User::where('id', $user->id)->update($validatedData);
        return redirect('/dashboard/admin')->with('success', 'Data User telah diperbarui');
    }

    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('/dashboard/admin')->with('success', 'Data User telah dihapus');
    }
}
