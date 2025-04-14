<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengunjung;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'peng_Email' => 'required|email|unique:tb_pengunjung,peng_Email',
            'peng_NamaLengkap' => 'required|string|max:255',
            'peng_KataSandi' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Simpan ke database
        Pengunjung::create([
            'peng_Email' => $request->peng_Email,
            'peng_NamaLengkap' => $request->peng_NamaLengkap,
            'peng_KataSandi' => Hash::make($request->peng_KataSandi),
            'peng_NomorTelepon' => $request->peng_NomorTelepon,
            'peng_Pekerjaan' => $request->peng_Pekerjaan,
            'peng_TahunLahir' => $request->peng_TahunLahir,
        ]);

        // Redirect ke halaman login user
        return redirect()->route('login.user')->with('success', 'Registrasi berhasil! Silakan login.');
    }
}