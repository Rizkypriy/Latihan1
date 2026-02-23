<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_buku = [
            "Laskar Pelangi",
            "Bumi Manusia",
            "Negeri 5 Menara",
            "Filosofi Kopi"
        ];

        return view('perpus_index', compact('data_buku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Halaman untuk menambah buku baru";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "Proses menyimpan buku baru";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "Anda sedang melihat detail buku dengan Kode: " . $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "Halaman untuk mengedit buku dengan ID: " . $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Proses memperbarui buku dengan ID: " . $id;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Proses menghapus buku dengan ID: " . $id;
    }
}
