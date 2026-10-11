<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    // Halaman form pelaporan
    public function create()
    {
        return view('laporan.form');
    }

    // Terima data POST, tampilkan halaman konfirmasi
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama'   => 'required|string|max:100',
            'lokasi' => 'required|string|max:150',
            'tinggi' => 'required|numeric|min:0|max:1000',
        ], [
            'required' => 'Kolom :attribute wajib diisi.',
            'numeric'  => 'Kolom :attribute harus berupa angka.',
            'min'      => 'Kolom :attribute tidak boleh negatif.',
        ]);

        return view('laporan.konfirmasi', ['laporan' => $data]);
    }

    // Halaman daftar laporan (data array, tanpa database)
    public function index()
    {
        $laporans = [
            ['nama' => 'Budi Santoso',   'lokasi' => 'Baleendah, Kab. Bandung',   'tinggi' => 25, 'waktu' => '10 Okt 2026, 07:15'],
            ['nama' => 'Siti Aminah',    'lokasi' => 'Dayeuhkolot, Kab. Bandung', 'tinggi' => 45, 'waktu' => '10 Okt 2026, 09:40'],
            ['nama' => 'Asep Rahmat',    'lokasi' => 'Bojongsoang, Kab. Bandung', 'tinggi' => 85, 'waktu' => '11 Okt 2026, 02:05'],
            ['nama' => 'Rina Marlina',   'lokasi' => 'Rancaekek, Kab. Bandung',   'tinggi' => 30, 'waktu' => '11 Okt 2026, 05:30'],
            ['nama' => 'Dedi Kurniawan', 'lokasi' => 'Majalaya, Kab. Bandung',    'tinggi' => 70, 'waktu' => '11 Okt 2026, 06:50'],
        ];

        return view('laporan.index', compact('laporans'));
    }
}
