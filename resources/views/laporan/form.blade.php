@extends('layouts.app')

@section('title', 'Form Pelaporan')

@section('content')
    <h2>Form Pelaporan Banjir</h2>

    @if ($errors->any())
        <x-alert type="error" message="Laporan gagal dikirim, periksa kembali isian Anda." />
    @endif

    <div class="card">
        <form action="{{ route('laporan.store') }}" method="POST">
            @csrf

            <label for="nama">Nama Pelapor</label>
            <input type="text" id="nama" name="nama" value="{{ old('nama') }}" placeholder="Contoh: Budi Santoso">
            @error('nama') <div class="error-text">{{ $message }}</div> @enderror

            <label for="lokasi">Lokasi Kejadian</label>
            <input type="text" id="lokasi" name="lokasi" value="{{ old('lokasi') }}" placeholder="Contoh: Baleendah, Kab. Bandung">
            @error('lokasi') <div class="error-text">{{ $message }}</div> @enderror

            <label for="tinggi">Tinggi Genangan Air (cm)</label>
            <input type="number" id="tinggi" name="tinggi" value="{{ old('tinggi') }}" placeholder="Contoh: 40">
            @error('tinggi') <div class="error-text">{{ $message }}</div> @enderror

            <button type="submit">Kirim Laporan</button>
        </form>
    </div>
@endsection
