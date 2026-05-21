<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SIAKAD')</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; background: #f8f8f8; color: #1a1a1a; }
        .navbar { background: #1a1a1a; color: white; padding: 1rem 2rem; box-shadow: 0 2px 8px rgba(0,0,0,0.15); display: flex; justify-content: space-between; align-items: center; border-bottom: 2px solid #333; }
        .navbar h1 { font-size: 1.5rem; font-weight: 600; letter-spacing: 0.5px; }
        .nav-links { display: flex; gap: 2rem; }
        .nav-links a { color: white; text-decoration: none; transition: color 0.3s; font-weight: 500; }
        .nav-links a:hover { color: #bbb; }
        .container { display: flex; min-height: calc(100vh - 60px); }
        .sidebar { width: 220px; background: #2a2a2a; color: white; padding: 2rem 0; border-right: 1px solid #444; }
        .sidebar-menu { list-style: none; }
        .sidebar-menu li { padding: 0; }
        .sidebar-menu a { display: block; padding: 0.9rem 1.5rem; text-decoration: none; color: #ddd; transition: all 0.3s; border-left: 3px solid transparent; font-size: 0.95rem; }
        .sidebar-menu a:hover { background: #333; color: white; }
        .sidebar-menu a.active { background: #333; color: white; border-left-color: #888; }
        .content { flex: 1; padding: 2rem; }
        .card { background: white; border-radius: 6px; padding: 1.5rem; margin-bottom: 1.5rem; box-shadow: 0 1px 3px rgba(0,0,0,0.08); border: 1px solid #e0e0e0; }
        .card h2 { margin-bottom: 1rem; color: #1a1a1a; font-size: 1.4rem; font-weight: 600; }
        .stats { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; margin-bottom: 2rem; }
        .stat-card { background: white; padding: 1.5rem; border-radius: 6px; box-shadow: 0 1px 3px rgba(0,0,0,0.08); text-align: center; border: 1px solid #e0e0e0; }
        .stat-card h3 { color: #1a1a1a; font-size: 2rem; margin: 0.5rem 0; font-weight: 600; }
        .stat-card p { color: #666; font-size: 0.9rem; }
        .btn { display: inline-block; padding: 0.5rem 1rem; background: #1a1a1a; color: white; text-decoration: none; border-radius: 4px; border: none; cursor: pointer; transition: background 0.3s; font-weight: 500; font-size: 0.9rem; }
        .btn:hover { background: #333; }
        .btn-danger { background: #d32f2f; }
        .btn-danger:hover { background: #b71c1c; }
        .btn-info { background: #555; }
        .btn-info:hover { background: #333; }
        table { width: 100%; border-collapse: collapse; margin-top: 1rem; }
        table thead { background: #f0f0f0; border-bottom: 2px solid #ddd; }
        table th { padding: 0.9rem 0.75rem; text-align: left; font-weight: 600; color: #1a1a1a; font-size: 0.9rem; }
        table td { padding: 0.75rem; text-align: left; border-bottom: 1px solid #e0e0e0; }
        table tbody tr:hover { background: #fafafa; }
        .form-group { margin-bottom: 1rem; }
        .form-group label { display: block; margin-bottom: 0.5rem; font-weight: 500; color: #333; }
        .form-group input, .form-group select, .form-group textarea { width: 100%; padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px; font-size: 1rem; color: #1a1a1a; }
        .form-group input:focus, .form-group select:focus, .form-group textarea:focus { outline: none; border-color: #1a1a1a; box-shadow: 0 0 0 2px rgba(26, 26, 26, 0.1); }
        .form-actions { margin-top: 1.5rem; display: flex; gap: 1rem; }
        .alert { padding: 1rem; margin-bottom: 1rem; border-radius: 4px; }
        .alert-success { background: #e8f5e9; color: #2e7d32; border: 1px solid #c8e6c9; }
        .alert-danger { background: #ffebee; color: #c62828; border: 1px solid #ffcdd2; }
        .checkbox-scrollable { max-height: 400px; overflow-y: auto; border: 1px solid #ddd; border-radius: 4px; padding: 1rem; }
        .checkbox-group { display: flex; flex-direction: column; gap: 0.8rem; }
        .checkbox-item { display: flex; align-items: flex-start; }
        .checkbox-item input { margin-right: 0.8rem; margin-top: 0.2rem; cursor: pointer; }
        .checkbox-item label { cursor: pointer; display: flex; flex-direction: column; }
        .checkbox-item strong { color: #1a1a1a; }
        .checkbox-item small { color: #666; }
        /* Pagination Styles */
        nav ul.pagination { display: flex; justify-content: flex-end; gap: 0; list-style: none; margin: 2rem 0; flex-wrap: wrap; padding: 0; }
        .pagination li { display: inline-block; margin: 0; }
        .pagination li span, .pagination li a { display: inline-block; padding: 0.6rem 0.9rem; margin: 0 2px 0 0; border: 1px solid #ddd; border-radius: 4px; color: #1a1a1a; text-decoration: none; transition: all 0.3s ease; background: white; font-size: 0.9rem; font-weight: 500; }
        .pagination li a { cursor: pointer; }
        .pagination li a:hover { background: #1a1a1a; color: white; border-color: #1a1a1a; }
        .pagination li.active span { background: #1a1a1a; color: white; border-color: #1a1a1a; padding: 0.6rem 0.9rem; }
        .pagination li.disabled span { color: #999; background: #f5f5f5; border-color: #ddd; cursor: not-allowed; }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>SIAKAD</h1>
        <div class="nav-links">
            <a href="{{ route('dashboard') }}">Dashboard</a>
        </div>
    </div>

    <div class="container">
        <div class="sidebar">
            <ul class="sidebar-menu">
                <li><a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">📊 Dashboard</a></li>
                <li><a href="{{ route('fakultas.index') }}" class="{{ request()->routeIs('fakultas.*') ? 'active' : '' }}">🏫 Fakultas</a></li>
                <li><a href="{{ route('dosen.index') }}" class="{{ request()->routeIs('dosen.*') ? 'active' : '' }}">👨‍🏫 Dosen</a></li>
                <li><a href="{{ route('mahasiswa.index') }}" class="{{ request()->routeIs('mahasiswa.*') ? 'active' : '' }}">🎓 Mahasiswa</a></li>
                <li><a href="{{ route('mata_kuliah.index') }}" class="{{ request()->routeIs('mata_kuliah.*') ? 'active' : '' }}">📚 Mata Kuliah</a></li>
                <li><a href="{{ route('krs.index') }}" class="{{ request()->routeIs('krs.*') ? 'active' : '' }}">📋 KRS</a></li>
            </ul>
        </div>

        <div class="content">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul style="margin: 0; padding-left: 1.5rem;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @yield('content')
        </div>
    </div>
</body>
</html>

