<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SIAKAD')</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; background: #f5f5f5; color: #333; line-height: 1.5; }
        
        .navbar { background: white; border-bottom: 1px solid #ddd; padding: 1rem 2rem; display: flex; justify-content: space-between; align-items: center; }
        .navbar h1 { font-size: 1.3rem; font-weight: 600; color: #333; }
        .nav-links { display: flex; gap: 1.5rem; }
        .nav-links a { color: #666; text-decoration: none; font-size: 0.9rem; transition: color 0.2s; }
        .nav-links a:hover { color: #333; }
        
        .container { display: flex; }
        .sidebar { width: 200px; background: white; padding: 1.5rem 0; border-right: 1px solid #ddd; height: 100vh; }
        .sidebar-menu { list-style: none; }
        .sidebar-menu li { padding: 0; }
        .sidebar-menu a { display: block; padding: 0.7rem 1.5rem; text-decoration: none; color: #666; font-size: 0.9rem; transition: all 0.2s; border-left: 3px solid transparent; }
        .sidebar-menu a:hover { background: #f9f9f9; color: #333; }
        .sidebar-menu a.active { background: #f0f0f0; color: #333; border-left-color: #333; font-weight: 500; }
        
        .content { flex: 1; padding: 2rem; min-height: 100vh; }
        .card { background: white; border-radius: 4px; padding: 1.5rem; margin-bottom: 1.5rem; border: 1px solid #e0e0e0; }
        .card h2 { font-size: 1.2rem; margin-bottom: 1rem; color: #333; font-weight: 600; }
        
        .stats { display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 1rem; margin-bottom: 2rem; }
        .stat-card { background: white; padding: 1.5rem; border-radius: 4px; border: 1px solid #e0e0e0; text-align: center; }
        .stat-card p { color: #666; font-size: 0.85rem; margin-bottom: 0.5rem; }
        .stat-card h3 { color: #333; font-size: 1.8rem; font-weight: 600; }
        
        .btn { display: inline-block; padding: 0.5rem 1rem; background: #333; color: white; text-decoration: none; border-radius: 3px; border: none; cursor: pointer; transition: background 0.2s; font-weight: 500; font-size: 0.85rem; }
        .btn:hover { background: #555; }
        .btn-danger { background: #d32f2f; }
        .btn-danger:hover { background: #b71c1c; }
        .btn-info { background: #666; }
        .btn-info:hover { background: #444; }
        
        table { width: 100%; border-collapse: collapse; margin-top: 1rem; font-size: 0.9rem; }
        table thead { background: #f9f9f9; border-bottom: 1px solid #ddd; }
        table th { padding: 0.8rem 0.75rem; text-align: left; font-weight: 600; color: #333; }
        table td { padding: 0.7rem 0.75rem; border-bottom: 1px solid #e0e0e0; }
        table tbody tr:hover { background: #fafafa; }
        
        .form-group { margin-bottom: 1rem; }
        .form-group label { display: block; margin-bottom: 0.4rem; font-weight: 500; color: #333; font-size: 0.9rem; }
        .form-group input, .form-group select, .form-group textarea { width: 100%; padding: 0.5rem; border: 1px solid #ddd; border-radius: 3px; font-size: 0.9rem; color: #333; }
        .form-group input:focus, .form-group select:focus, .form-group textarea:focus { outline: none; border-color: #333; box-shadow: 0 0 0 2px rgba(51, 51, 51, 0.1); }
        .form-actions { margin-top: 1.5rem; display: flex; gap: 1rem; }
        
        .alert { padding: 1rem; margin-bottom: 1rem; border-radius: 3px; font-size: 0.9rem; }
        .alert-success { background: #e8f5e9; color: #2e7d32; border: 1px solid #c8e6c9; }
        .alert-danger { background: #ffebee; color: #c62828; border: 1px solid #ffcdd2; }
        
        .checkbox-scrollable { max-height: 400px; overflow-y: auto; border: 1px solid #ddd; border-radius: 3px; padding: 1rem; }
        .checkbox-group { display: flex; flex-direction: column; gap: 0.7rem; }
        .checkbox-item { display: flex; align-items: flex-start; }
        .checkbox-item input { margin-right: 0.7rem; margin-top: 0.3rem; cursor: pointer; }
        .checkbox-item label { cursor: pointer; display: flex; flex-direction: column; }
        .checkbox-item strong { color: #333; font-size: 0.9rem; }
        .checkbox-item small { color: #666; font-size: 0.8rem; }
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
                <li><a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">Dashboard</a></li>
                <li><a href="{{ route('fakultas.index') }}" class="{{ request()->routeIs('fakultas.*') ? 'active' : '' }}">Fakultas</a></li>
                <li><a href="{{ route('dosen.index') }}" class="{{ request()->routeIs('dosen.*') ? 'active' : '' }}">Dosen</a></li>
                <li><a href="{{ route('mahasiswa.index') }}" class="{{ request()->routeIs('mahasiswa.*') ? 'active' : '' }}">Mahasiswa</a></li>
                <li><a href="{{ route('mata_kuliah.index') }}" class="{{ request()->routeIs('mata_kuliah.*') ? 'active' : '' }}">Mata Kuliah</a></li>
                <li><a href="{{ route('krs.index') }}" class="{{ request()->routeIs('krs.*') ? 'active' : '' }}">KRS</a></li>
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

