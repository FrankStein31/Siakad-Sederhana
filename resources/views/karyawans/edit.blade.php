<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Karyawan - {{ $karyawan->name }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen py-12 px-4">
    <div class="max-w-2xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold bg-gradient-to-r from-gray-900 to-gray-700 bg-clip-text text-transparent mb-4">Edit Karyawan</h1>
            <nav class="flex justify-center space-x-6 text-sm text-gray-500">
                <a href="{{ route('karyawans.index') }}" class="hover:text-blue-600 font-medium">← Kembali ke List</a>
            </nav>
        </div>

        <!-- Success/Error Messages -->
        @if ($errors->any())
            <div class="bg-red-50 border border-red-200 rounded-2xl p-6 mb-8 shadow-lg">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-6 w-6 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-bold text-red-800 mb-2">Ada kesalahan!</h3>
                        <ul class="text-sm text-red-700 space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif

        @if (session('success'))
            <div class="bg-green-50 border border-green-200 rounded-2xl p-6 mb-8 shadow-lg">
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

        <!-- Form Card -->
        <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-200">
            <form method="POST" action="{{ route('karyawans.update', $karyawan) }}" class="p-10">
                @csrf
                @method('PUT')
                
                <div class="space-y-8">
                    <!-- Nama -->
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-3">Nama Lengkap</label>
                        <input type="text" 
                               name="name" 
                               value="{{ old('name', $karyawan->name) }}"
                               class="w-full px-6 py-5 border border-gray-300 rounded-2xl focus:ring-4 focus:ring-blue-200 focus:border-blue-500 transition-all duration-300 text-lg @error('name') border-red-400 ring-red-200 bg-red-50 @enderror"
                               placeholder="Masukkan nama lengkap karyawan">
                    </div>

                    <!-- Alamat -->
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-3">Alamat</label>
                        <textarea name="alamat" 
                                  rows="4"
                                  class="w-full px-6 py-5 border border-gray-300 rounded-2xl focus:ring-4 focus:ring-blue-200 focus:border-blue-500 transition-all duration-300 text-lg resize-vertical @error('alamat') border-red-400 ring-red-200 bg-red-50 @enderror"
                                  placeholder="Masukkan alamat lengkap">{{ old('alamat', $karyawan->alamat) }}</textarea>
                    </div>

                    <!-- No Telp & Jenis Kelamin -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-3">No. Telepon</label>
                            <input type="text" 
                                   name="no_telp" 
                                   value="{{ old('no_telp', $karyawan->no_telp) }}"
                                   class="w-full px-6 py-5 border border-gray-300 rounded-2xl focus:ring-4 focus:ring-blue-200 focus:border-blue-500 transition-all duration-300 text-lg @error('no_telp') border-red-400 ring-red-200 bg-red-50 @enderror"
                                   placeholder="08xxxxxxxxxx">
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-3">Jenis Kelamin</label>
                            <select name="jenis_kelamin" 
                                    class="w-full px-6 py-5 border border-gray-300 rounded-2xl focus:ring-4 focus:ring-blue-200 focus:border-blue-500 transition-all duration-300 text-lg @error('jenis_kelamin') border-red-400 ring-red-200 bg-red-50 @enderror">
                                <option value="">Pilih jenis kelamin</option>
                                <option value="Laki-laki" {{ old('jenis_kelamin', $karyawan->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="Perempuan" {{ old('jenis_kelamin', $karyawan->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 mt-12 pt-10 border-t border-gray-200">
                    <a href="{{ route('karyawans.index') }}" 
                       class="flex-1 px-10 py-5 bg-gray-500 text-white font-bold rounded-2xl hover:bg-gray-600 focus:ring-4 focus:ring-gray-200 transition-all duration-300 text-center shadow-xl flex items-center justify-center gap-3">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                        Kembali
                    </a>
                    <button type="submit" 
                            class="flex-1 px-10 py-5 bg-gradient-to-r from-blue-600 to-blue-700 text-white font-bold rounded-2xl hover:from-blue-700 hover:to-blue-800 focus:ring-4 focus:ring-blue-300 transition-all duration-300 text-center shadow-2xl hover:shadow-3xl flex items-center justify-center gap-3">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 0 0 4.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 0 1 7.416-7.418M15.582 9H9"/>
                        </svg>
                        Update Karyawan
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
