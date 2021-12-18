<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use App\Models\Calon;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function kotak()
    {
        return view('suara.kotak', [
            'title' => 'Kotak Suara',
            'votes' => Vote::latest()->get()
        ]);
    }

    public function bilik()
    {
        return view('suara.bilik', [
            'title' => 'Bilik Suara',
            'calons' => Calon::latest()->get()
        ]);
    }

    public function detail(Calon $calon)
    {
        return view('suara.detail', [
            'title' => 'Detail Kandidat',
            'calon' => $calon
        ]);
    }

    public function pilih(Calon $calon)
    {
        return view('suara.pilih', [
            'title' => 'Pilih Kandidat',
            'calon' => $calon
        ]);
    }

    public function success(Calon $calon)
    {
        $dateTime = new DateTime();

        User::where('id', auth()->user()->id)->update(['status' => '0']);
        Vote::insert([
            'id_calon' => $calon->id,
            'id_pemilih' => auth()->user()->id,
            'waktu_vote' => $dateTime->format('Y-m-d H:i:s')
        ]);

        return redirect('/dashboard/bilik')->with('success', 'Anda berhasil memilih!');
    }

    public function hitung(Vote $vote)
    {
        $hasil = [];

        $calons = Calon::latest()->get();
        foreach ($calons as $calon) {
            $hitung = $vote->where('id_calon', $calon->id)->count();

            $total['nama_calon'] = $calon->nama_calon;
            $total['foto'] = $calon->foto;
            $total['hitung'] = $hitung;
            array_push($hasil, $total);
        }

        return view('suara.hitung', [
            'title' => 'Perhitungan Cepat',
            'counts' => $hasil,
        ]);
    }
}
