<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ebook extends Model
{
    use HasFactory;

    protected $table = 'Ebooks';
    protected $fillable = ['judul', 'deskripsi', 'nama_file', 'tanggal_upload'];

}