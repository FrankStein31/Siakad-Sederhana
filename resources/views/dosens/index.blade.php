<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen py-8">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">Data Dosen</h1>
            <nav class="flex justify-center space-x-6 text-sm text-gray-500">
                <a href="{{ route('blogs.index') }}" class="hover:text-blue-600">Blogs</a>
                <a href="{{ route('mahasiswas.index') }}" class="hover:text-blue-600">Mahasiswa</a>
                <a href="{{ route('karyawans.index') }}" class="hover:text-blue-600">Karyawan</a>
            </nav>
        </div>

        <!-- Search Form -->
        <div class="bg-white shadow-xl rounded-2xl p-8 mb-10 border border-gray-200">
            <form method="GET" class="flex flex-col sm:flex-row gap-4 items-end">
                <div class="flex-1">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Search Nama</label>
                    <div class="relative">
                        <input type="text" 
                               name="search" 
                               value="{{ request('search') }}" 
                               class="w-full pl-12 pr-4 py-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 text-lg"
                               placeholder="Cari berdasarkan nama dosen...">
                        <svg class="absolute left-4 top-1/2 -translate-y-1/2 h-6 w-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                </div>
                <div class="flex gap-3">
                    <button type="submit" class="px-8 py-4 bg-blue-600 text-white font-semibold rounded-xl hover:bg-blue-700 focus:ring-4 focus:ring-blue-200 transition-all duration-200 shadow-lg flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                        Search
                    </button>
                    @if(request('search'))
                    <a href="{{ route('dosens.index') }}" class="px-8 py-4 bg-gray-500 text-white font-semibold rounded-xl hover:bg-gray-600 focus:ring-4 focus:ring-gray-200 transition-all duration-200 shadow-lg">
                        Clear
                    </a>
                    @endif
                </div>
            </form>
        </div>

        @if (session('success'))
            <div class="bg-green-50 border-l-4 border-green-400 p-6 rounded-xl shadow-lg mb-8 mx-2">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-6 w-6 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-bold text-green-800">{{ session('success') }}</p>
                    </div>
                </div>
            </div>
        @endif

        <!-- Table Card -->
        <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-200">
            <div class="p-8 border-b border-gray-200 bg-gradient-to-r from-purple-50 to-indigo-50 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                <h3 class="text-2xl font-bold text-gray-900">List Dosen</h3>
                <a href="{{ route('dosens.create') }}" class="px-8 py-3 bg-gradient-to-r from-purple-600 to-purple-700 text-white font-bold rounded-xl hover:from-purple-700 hover:to-purple-800 shadow-xl hover:shadow-2xl transition-all duration-300 flex items-center gap-2 ml-auto sm:w-auto">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                    </svg>
                    Add Dosen
                </a>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-8 py-6 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">No</th>
                            <th class="px-8 py-6 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">NISN</th>
                            <th class="px-8 py-6 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Nama</th>
<th class="px-8 py-6 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Email</th>
                            <th class="px-8 py-6 text-center text-xs font-bold text-gray-500 uppercase tracking-wider">Aksi</th>
                            <th class="px-8 py-6 text-sm font-medium text-gray-900">Created</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @forelse($dosens as $index => $dosen)
                            <tr class="hover:bg-gray-50 transition-colors duration-200">
                                <td class="px-8 py-6 whitespace-nowrap text-sm font-semibold text-gray-900">
                                    {{ $dosens->firstItem() + $index }}
                                </td>
                                <td class="px-8 py-6 whitespace-nowrap">
                                    <span class="bg-purple-100 text-purple-800 text-xs font-semibold px-3 py-1 rounded-full">
                                        {{ $dosen->nisn }}
                                    </span>
                                </td>
                                <td class="px-8 py-6">
                                    <div>
                                        <h4 class="font-semibold text-gray-900">{{ $dosen->nama }}</h4>
                                    </div>
                                </td>
                                <td class="px-8 py-6 whitespace-nowrap">
                                    <span class="text-sm text-gray-900 font-medium">{{ $dosen->email }}</span>
                                </td>
                                <td class="px-8 py-6 whitespace-nowrap text-right text-sm font-medium">
                                    <div class="flex justify-end space-x-2">
                                        <a href="{{ route('dosens.show', $dosen->id) }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:ring-4 focus:ring-blue-200 transition-all duration-200 text-sm font-semibold shadow-md">
                                            View
                                        </a>
                                        <a href="{{ route('dosens.edit', $dosen->id) }}" class="px-4 py-2 bg-amber-500 text-white rounded-lg hover:bg-amber-600 focus:ring-4 focus:ring-amber-200 transition-all duration-200 text-sm font-semibold shadow-md">
                                            Edit
                                        </a>
                                        <form action="{{ route('dosens.destroy', $dosen->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 focus:ring-4 focus:ring-red-200 transition-all duration-200 text-sm font-semibold shadow-md" onclick="return confirm('Yakin hapus dosen ini?')">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                                <td class="px-8 py-6 whitespace-nowrap text-sm text-gray-500">
                                    {{ \Carbon\Carbon::parse($dosen->created_at)->format('d M Y') }}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-8 py-20 text-center">
                                    <div class="text-gray-500">
                                        <svg class="mx-auto h-24 w-24 mb-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 12l2 2 4-4m6 1a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                        <h3 class="mt-2 text-2xl font-semibold text-gray-900">No dosen found</h3>
                                        <p class="mt-1 text-gray-500">Belum ada data dosen. <a href="{{ route('dosens.create') }}" class="text-purple-600 hover:underline font-medium">Tambah dosen pertama</a></p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            @if($dosens->hasPages())
                <div class="px-8 pb-8 pt-4 border-t border-gray-200">
                    <nav aria-label="Pagination">
                        {{ $dosens->appends(request()->query())->links() }}
                    </nav>
                </div>
            @endif
        </div>
    </div>
</body>
</html>

