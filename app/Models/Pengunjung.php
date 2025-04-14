<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengunjung extends Model
{
    protected $table = 'tb_pengunjung';
    protected $primaryKey = 'peng_id';
    public $timestamps = false;

    protected $fillable = [
        'peng_Email',
        'peng_NamaLengkap',
        'peng_KataSandi',
        'peng_NomorTelepon',
        'peng_Pekerjaan',
        'peng_TahunLahir',
    ];
}