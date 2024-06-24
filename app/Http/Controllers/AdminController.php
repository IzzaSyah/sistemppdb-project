<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Formulir;
use App\Models\Document;
use App\Models\kartupeserta;

class AdminController extends Controller
{
    //
   
    public function index()
    {
        $users = User::all(); // Mengambil semua data user dari model User
        return view('admin.home', compact('users'));
    }
    
    public function uploadKartuPeserta(Request $request, User $user)
{
    $request->validate([
        'kartupeserta' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
    ]);

    // Simpan file ke storage
    $fileName = 'kartupeserta_' . $user->id . '.' . $request->file('kartupeserta')->getClientOriginalExtension();
    $request->file('kartupeserta')->storeAs('public/uploads/kp', $fileName);
    $kp = $request->file('kartupeserta')->getClientOriginalName();

    // Simpan data kartu peserta ke database
    $kartuPeserta = new KartuPeserta();
    $kartuPeserta->id_user = $user->id;
    $kartuPeserta->kartupeserta = $fileName;
    $kartuPeserta->save();

    // Tampilkan kembali halaman admin home dengan pesan sukses
    $users = User::all(); // Ambil semua data user
    return view('admin.home', compact('users'))->with('success', 'Kartu Peserta uploaded successfully.');
}

}
