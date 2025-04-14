<?php

namespace App\Http\Controllers;

use App\Models\Pengunjung;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        // Ambil query pencarian dari URL
        $search = $request->query('search');
        
        // Jika ada query pencarian, lakukan pencarian berdasarkan nama lengkap pengunjung
        if ($search) {
            $pengunjung = Pengunjung::where('peng_NamaLengkap', 'like', '%' . $search . '%')->get();
        } else {
            // Jika tidak ada pencarian, ambil semua data pengunjung
            $pengunjung = Pengunjung::all();
        }

        // Kembalikan view dengan data pengunjung
        return view('admin.dashboard', compact('pengunjung'));
    }
}