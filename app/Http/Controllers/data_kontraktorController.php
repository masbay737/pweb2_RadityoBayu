<?php

namespace App\Http\Controllers;

use App\Models\DataKontraktor;
use Illuminate\Http\Request;

class data_kontraktorController extends Controller
{
    public function index(){
        return view('data_kontraktor');
    }

    public function insert(){
        $datakontraktor = DataKontraktor::create([
            'Id' => '001',
            'Nama_Kontraktor' => 'PT. Maju Jaya',
            'Alamat' => 'Jl. Sinar Terang',
            'Nomor_HP' => '088998765432',
        ]);
    }
}
