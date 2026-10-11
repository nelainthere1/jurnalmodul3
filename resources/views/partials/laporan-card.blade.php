<div class="card">
    <h3 style="margin-top:0;">{{ $laporan['nama'] }}</h3>
    <p><strong>Lokasi:</strong> {{ $laporan['lokasi'] }}</p>
    <p><strong>Waktu:</strong> {{ $laporan['waktu'] }}</p>
    <p><strong>Tinggi Genangan:</strong> {{ $laporan['tinggi'] }} cm</p>
    <p>
        <strong>Status:</strong>
        @if ($laporan['tinggi'] < 30)
            <span style="background:#f1c40f; color:#000; padding:3px 10px; border-radius:12px;">Waspada</span>
        @elseif ($laporan['tinggi'] <= 70)
            <span style="background:#e67e22; color:#fff; padding:3px 10px; border-radius:12px;">Siaga</span>
        @else
            <span style="background:#c0392b; color:#fff; padding:3px 10px; border-radius:12px;">Awas</span>
        @endif
    </p>
</div>
