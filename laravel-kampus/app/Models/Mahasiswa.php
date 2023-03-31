<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $primarykey = 'id';
    public $timestaps = false;
    public $fillable = [
        'nama','alamat','jenis_kelamin'
    ];
}
