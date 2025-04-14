<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;
use App\Models\Pengunjung;

class LoginController extends Controller
{
    // ====== TAMPILKAN HALAMAN LOGIN ADMIN ======
    public function showAdminLogin()
    {
        return view('auth.login-admin');
    }

    // ====== PROSES LOGIN ADMIN ======
    public function loginAdmin(Request $request)
    {
        $request->validate([
            'admin_nama' => 'required',
            'admin_password' => 'required',
        ]);

        $admin = Admin::where('admin_nama', $request->admin_nama)->first();

        if ($admin && Hash::check($request->admin_password, $admin->admin_password)) {
            session([
                'admin_id' => $admin->admin_id,
                'admin_nama' => $admin->admin_nama
            ]);
            return redirect('/admin');
        }

        return back()->withErrors(['admin_nama' => 'Login admin gagal.']);
    }

    // ====== TAMPILKAN HALAMAN LOGIN USER/PENGUNJUNG ======
    public function showUserLogin()
    {
        return view('auth.login-user');
    }

    // ====== PROSES LOGIN USER/PENGUNJUNG ======
    public function loginUser(Request $request)
    {
        $request->validate([
            'peng_Email' => 'required|email',
            'peng_KataSandi' => 'required',
        ]);

        $user = Pengunjung::where('peng_Email', $request->peng_Email)->first();

        if ($user && Hash::check($request->peng_KataSandi, $user->peng_KataSandi)) {
            session([
                'peng_id' => $user->peng_id,
                'peng_Email' => $user->peng_Email
            ]);
            return redirect('/user');
        }

        return back()->withErrors(['peng_Email' => 'Login gagal.']);
    }

    // ====== PROSES REGISTER USER/PENGUNJUNG ======
    public function registerUser(Request $request)
    {
        $request->validate([
            'peng_NamaLengkap' => 'required',
            'peng_Email' => 'required|email|unique:tb_pengunjung,peng_Email',
            'peng_KataSandi' => 'required|confirmed|min:6',
            'peng_NomorTelepon' => 'required',
            'peng_Pekerjaan' => 'required',
            'peng_TahunLahir' => 'required|digits:4',
        ]);

        Pengunjung::create([
            'peng_NamaLengkap' => $request->peng_NamaLengkap,
            'peng_Email' => $request->peng_Email,
            'peng_KataSandi' => Hash::make($request->peng_KataSandi),
            'peng_NomorTelepon' => $request->peng_NomorTelepon,
            'peng_Pekerjaan' => $request->peng_Pekerjaan,
            'peng_TahunLahir' => $request->peng_TahunLahir,
        ]);

        // Setelah register, arahkan ke halaman login user
        return redirect()->route('login.user')->with('success', 'Registrasi berhasil. Silakan login.');
    }

    // ====== LOGOUT UNTUK ADMIN DAN USER ======
    public function logout()
    {
        Session::flush();
        return redirect('/landing');
    }

    // ====== TAMPILKAN DATA PENGUNJUNG UNTUK DASHBOARD ADMIN ======
    public function index(Request $request)
    {
        $search = $request->query('search');

        $pengunjung = Pengunjung::when($search, function ($query, $search) {
            return $query->where('peng_NamaLengkap', 'like', "%$search%")
                        ->orWhere('peng_Email', 'like', "%$search%");
        })->get();

        return view('admin.admin_dashboard', compact('pengunjung'));
    }
    public function destroy($id)
    {
        $pengunjung = Pengunjung::findOrFail($id);
        $pengunjung->delete();

        return redirect('/admin')->with('success', 'Data pengunjung berhasil dihapus.');
    }
}