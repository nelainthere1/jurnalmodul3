@extends('layouts.app')

@section('title', 'Konfirmasi Laporan')

@section('content')
    <h2>Konfirmasi Laporan</h2>

    <x-alert type="success" message="Laporan banjir Anda berhasil dikirim. Terima kasih atas partisipasinya." />

    <div class="card">
        <h3>Data yang Anda kirim</h3>
        <p><strong>Nama Pelapor:</strong> {{ $laporan['nama'] }}</p>
        <p><strong>Lokasi Kejadian:</strong> {{ $laporan['lokasi'] }}</p>
        <p><strong>Tinggi Genangan:</strong> {{ $laporan['tinggi'] }} cm</p>
    </div>

    <a href="{{ route('laporan.form') }}" class="btn">Kirim Laporan Lagi</a>
    <a href="{{ route('laporan.index') }}" class="btn">Lihat Daftar Laporan</a>
@endsection
