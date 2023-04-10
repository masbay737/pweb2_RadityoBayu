<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKontraktor extends Model
{
    use HasFactory;
    protected $table ='data_kontraktor';
    protected $guarded = [];
    // protected $fillable = [
    //     'id',
    //     'nama_kontraktor',
    //     'alamat',
    //     'no_hp',    
    // ];
}
