<?php

namespace App\Http\Controllers;

use App\Models\DataKontraktor;
use Illuminate\Http\Request;

class KontraktorController extends Controller
{
    public function index()
    {
        $data = DataKontraktor::all();
        return view('kontraktor.daftar-kontraktor', compact('data'));
    }

    public function create()
    {
        return view('kontraktor.tambah-kontraktor');
    }

    public function insert(Request $request)
    {
        $data = DataKontraktor::create([
            'nama_kontraktor' => $request->nama_kontraktor,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
        ]);
        $data->save();
        return redirect()->route('daftarkontraktor');
    }

    public function edit($id)
    {
        $data = DataKontraktor::find($id);
        // dd($data);
        return view('kontraktor.edit-kontraktor', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = DataKontraktor::findOrFail($id);
        $data->nama_kontraktor = $request->nama_kontraktor;
        $data->alamat = $request->alamat;
        $data->no_hp = $request->no_hp;
        // dd($data);
        $data->save();
        return redirect()->route('daftarkontraktor');
    }

    public function delete($id)
    {
        $data = DataKontraktor::find($id);
        $data->delete();
        return redirect()->route('daftarkontraktor');

    }

}
