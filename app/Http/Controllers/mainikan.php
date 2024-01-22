<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class mainikan extends Controller
{
    public function tambah_ikan(Request $request)
    {
        // Validasi form tambah ikan
        $request->validate([
            'nama_ikan' => 'required',
            'jenis_ikan' => 'required',
            // Tambahkan validasi sesuai kebutuhan
        ]);

        // Insert data ikan baru
        DB::table("ikan")->insert([
            "nama_ikan" => $request->nama_ikan,
            "jenis_ikan" => $request->jenis_ikan,
            "stok_ikan" => 0,
            "created_at" => now(),
        ]);

        // Redirect ke halaman lihat_ikan setelah berhasil ditambahkan
        return redirect("lihat_ikan");
    }

    public function lihat_ikan()
    {
        // Ambil data semua ikan
        $lihat = DB::table("ikan")->get();

        // Tampilkan view 'ikan' dengan data ikan
        return view("ikan")->with("lihat", $lihat);
    }

    public function hapus_ikan($id)
    {
        // Hapus data ikan berdasarkan ID
        DB::table("ikan")->where('id', $id)->delete();

        // Redirect ke halaman lihat_ikan setelah berhasil dihapus
        return redirect("lihat_ikan");
    }

    public function kontak()
    {
        // Tampilkan view 'kontak'
        return view('kontak');
    }

    public function edit_ikan($id)
    {
        // Ambil data ikan berdasarkan ID
        $ikan = DB::table("ikan")->where('id', $id)->first();

        // Tampilkan view 'edit_ikan' dengan data ikan yang akan di-update
        return view('edit_ikan')->with('ikan', $ikan);
    }

    public function update_ikan(Request $request, $id)
    {
        // Validasi form update ikan
        $request->validate([
            'nama_ikan' => 'required',
            'jenis_ikan' => 'required',
            // Tambahkan validasi sesuai kebutuhan
        ]);

        // Lakukan update data ikan
        DB::table("ikan")->where('id', $id)->update([
            "nama_ikan" => $request->nama_ikan,
            "jenis_ikan" => $request->jenis_ikan,
            // Tambahkan field lain yang ingin di-update
            "updated_at" => now(),
        ]);

        // Redirect ke halaman lihat_ikan setelah berhasil di-update
        return redirect("lihat_ikan");
    }
}
