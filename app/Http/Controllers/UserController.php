<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.index', [
            'title' => 'Data Pemilih',
            'users' => User::latest()->where('level', 'Pemilih')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create', [
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
            'nim' => 'required',
            'nama_pengguna' => 'required|max:255',
            'jenis_kelamin' => 'required',
            'jurusan' => 'required',
            'prodi' => 'required',
            'kelas' => 'required',
            'level' => 'required',
            'username' => 'required|min:3|max:255|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        if ($validatedData['level'] == 'Pemilih') {
            $validatedData['status'] = 1;
        } else {
            $validatedData['status'] = 0;
        }

        User::create($validatedData);
        return redirect('/dashboard/user')->with('success', 'Pengguna baru telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('user.edit', [
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
        return redirect('/dashboard/user')->with('success', 'Data Pengguna telah diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('/dashboard/user');
    }
}
