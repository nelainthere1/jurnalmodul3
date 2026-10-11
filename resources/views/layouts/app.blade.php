<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - LaporBanjir</title>
    <style>
        * { box-sizing: border-box; }
        body { font-family: Arial, sans-serif; margin: 0; background: #f2f6fa; color: #222; }
        header { background: #0b5394; color: #fff; padding: 20px 30px; }
        header h1 { margin: 0; font-size: 26px; }
        header p { margin: 4px 0 0; font-size: 14px; opacity: .85; }
        nav { background: #073763; padding: 0 30px; }
        nav a { display: inline-block; color: #fff; text-decoration: none; padding: 12px 16px; font-size: 14px; }
        nav a:hover, nav a.active { background: #0b5394; }
        main { max-width: 800px; margin: 25px auto; padding: 0 20px; min-height: 60vh; }
        h2 { color: #073763; }
        footer { background: #073763; color: #fff; text-align: center; padding: 14px; font-size: 13px; }
        label { display: block; margin: 14px 0 6px; font-weight: bold; }
        input[type=text], input[type=number] { width: 100%; padding: 10px; border: 1px solid #bbb; border-radius: 4px; font-size: 14px; }
        button, .btn { display: inline-block; margin-top: 18px; background: #0b5394; color: #fff; border: 0; padding: 10px 20px; border-radius: 4px; font-size: 14px; cursor: pointer; text-decoration: none; }
        button:hover, .btn:hover { background: #073763; }
        .card { background: #fff; border-radius: 6px; padding: 18px; margin-bottom: 14px; box-shadow: 0 1px 4px rgba(0,0,0,.12); }
        .error-text { color: #c0392b; font-size: 13px; margin-top: 4px; }
    </style>
</head>
<body>
    <header>
        <h1>LaporBanjir</h1>
        <p>Sistem Pelaporan Banjir - BPBD Kabupaten Bandung</p>
    </header>

    <nav>
        <a href="{{ route('laporan.form') }}" class="{{ request()->routeIs('laporan.form', 'laporan.store') ? 'active' : '' }}">Form Pelaporan</a>
        <a href="{{ route('laporan.index') }}" class="{{ request()->routeIs('laporan.index') ? 'active' : '' }}">Daftar Laporan</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        &copy; {{ date('Y') }} BPBD Kabupaten Bandung - LaporBanjir (Prototipe)
    </footer>
</body>
</html>
