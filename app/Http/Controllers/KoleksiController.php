<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Infografis;
use App\Models\Ebook;
use Illuminate\Support\Facades\Storage;

class KoleksiController extends Controller
{
    // Landing page
    public function indexLanding()
    {
        $infografis = Infografis::latest()->get();
        $ebooks = Ebook::latest()->get();

        return view('landingpage.home', compact('infografis', 'ebooks'));
    }

    // Admin view
    public function indexAdmin()
    {
        $infografis = Infografis::all();
        $ebooks = Ebook::all();

        // Ganti ini: view('admin.koleksi.index')
        return view('admin.admin_koleksi', compact('infografis', 'ebooks'));
    }

    // Store infografis
    public function storeInfografis(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpg,jpeg,png'
        ]);

        $path = $request->file('gambar')->store('infografis', 'public');

        Infografis::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $path
        ]);

        return back()->with('success', 'Infografis berhasil diupload!');
    }
    // Hapus infografis
    public function destroyInfografis($id)
    {
        $infografis = Infografis::findOrFail($id);

        // Hapus file gambar dari storage
        if ($infografis->gambar && Storage::disk('public')->exists($infografis->gambar)) {
            Storage::disk('public')->delete($infografis->gambar);
        }

        $infografis->delete();

        return back()->with('success', 'Infografis berhasil dihapus!');
    }

    // Hapus ebook
    public function destroyEbook($id)
    {
        $ebook = Ebook::findOrFail($id);

        // Hapus file PDF dari storage
        if ($ebook->nama_file && Storage::disk('public')->exists($ebook->nama_file)) {
            Storage::disk('public')->delete($ebook->nama_file);
        }

        $ebook->delete();

        return back()->with('success', 'Ebook berhasil dihapus!');
    }
}