<?php

namespace Database\Seeders;

use App\Models\DataKontraktor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KontraktorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DataKontraktor::create([
            'id' => '1',
            'nama_kontraktor' => 'Marisa Nasution',
            'alamat' => 'Jln. Sumbawa',
            'no_hp' => '087678787678',
        ]); 
        DataKontraktor::create([
            'id' => '2',
            'nama_kontraktor' => 'Aditya Prayoga',
            'alamat' => 'Jln. Sulawesi',
            'no_hp' => '087291827261',
        ]); 
        DataKontraktor::create([
            'id' => '3',
            'nama_kontraktor' => 'Wahidin Malik',
            'alamat' => 'Jln. Martasinga',
            'no_hp' => '089728178271',
        ]); 
    }
}
