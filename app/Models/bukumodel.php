<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bukumodel extends Model
{
    use HasFactory;
    protected $table = "buku";

    protected $fillable = ['id', 'judul', "tahun_terbit"];
}