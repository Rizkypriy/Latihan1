<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View as IlluminateView;

class InfoController extends Controller
{
    public function halo()
    {
        return "Halo ini adalah respon InfoController";
    }

    public function ikmi()
    {
        return "Halo saya dari Ikmi";
    }

    public function dosen(): IlluminateView
    {
        // 1. Menyiapkan data dalam variabel
        $namaDosen = "Rudi Kurniawan, S.Kom., M.T.";
        $matkul = "Pemrograman Web Lanjut";
        $mahasiswa = ["Andi", "Budi", "Siti", "Dedi", "Udin", "Joko"];
        $tahun = "2025/2026";
        $nim = "101, 102, 103, 104, 105, 106";
        // Contoh data Array
        // 2. Mengirim data ke view menggunakan fungsi compact() atau array
        return view('info_dosen', [
            'nama' => $namaDosen,
            'mata_kuliah' => $matkul,
            'list_mhs' => $mahasiswa,
            'tahun_ajaran' => $tahun,
            'nim_mhs' => $nim,

        ]);
    }

    public function detailMahasiswa($nama, $nim): IlluminateView
    {
        // Parameter $nama akan berisi data yang diambil dari URL
        return view('detail_mahasiswa', [
            'nama_mhs' => $nama,
            'nim_mhs' => $nim,
        ]);
    }
}
