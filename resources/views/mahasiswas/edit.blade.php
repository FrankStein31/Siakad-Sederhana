<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa - {{ $mahasiswa->nama }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-emerald-50 to-teal-100 min-h-screen py-12 px-4">
    <div class="max-w-2xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold bg-gradient-to-r from-emerald-800 to-teal-700 bg-clip-text text-transparent mb-4">Edit Mahasiswa</h1>
            <nav class="flex justify-center space-x-6 text-sm text-gray-500">
                <a href="{{ route('mahasiswas.index') }}" class="hover:text-emerald-600 font-medium">← Kembali ke List</a>
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
            <form method="POST" action="{{ route('mahasiswas.update', $mahasiswa) }}" class="p-10">
                @csrf
                @method('PUT')
                
                <div class="space-y-8">
                    <!-- NIM -->
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-3">NIM</label>
                        <input type="text" 
                               name="nim" 
                               value="{{ old('nim', $mahasiswa->nim) }}"
                               class="w-full px-6 py-5 border border-gray-300 rounded-2xl focus:ring-4 focus:ring-emerald-200 focus:border-emerald-500 transition-all duration-300 text-lg @error('nim') border-red-400 ring-red-200 bg-red-50 @enderror"
                               placeholder="Contoh: 202310101">
                    </div>

                    <!-- Nama -->
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-3">Nama Lengkap</label>
                        <input type="text" 
                               name="nama" 
                               value="{{ old('nama', $mahasiswa->nama) }}"
                               class="w-full px-6 py-5 border border-gray-300 rounded-2xl focus:ring-4 focus:ring-emerald-200 focus:border-emerald-500 transition-all duration-300 text-lg @error('nama') border-red-400 ring-red-200 bg-red-50 @enderror"
                               placeholder="Masukkan nama lengkap mahasiswa">
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-3">Email</label>
                        <input type="email" 
                               name="email" 
                               value="{{ old('email', $mahasiswa->email) }}"
                               class="w-full px-6 py-5 border border-gray-300 rounded-2xl focus:ring-4 focus:ring-emerald-200 focus:border-emerald-500 transition-all duration-300 text-lg @error('email') border-red-400 ring-red-200 bg-red-50 @enderror"
                               placeholder="contoh@universitas.ac.id">
                    </div>

                    <!-- Jurusan & Angkatan -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-3">Jurusan</label>
                            <input type="text" 
                                   name="jurusan" 
                                   value="{{ old('jurusan', $mahasiswa->jurusan) }}"
                                   class="w-full px-6 py-5 border border-gray-300 rounded-2xl focus:ring-4 focus:ring-emerald-200 focus:border-emerald-500 transition-all duration-300 text-lg @error('jurusan') border-red-400 ring-red-200 bg-red-50 @enderror"
                                   placeholder="Teknik Informatika">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-3">Angkatan</label>
                            <input type="number" 
                                   name="angkatan" 
                                   value="{{ old('angkatan', $mahasiswa->angkatan) }}"
                                   min="1901" 
                                   max="{{ date('Y') + 5 }}"
                                   class="w-full px-6 py-5 border border-gray-300 rounded-2xl focus:ring-4 focus:ring-emerald-200 focus:border-emerald-500 transition-all duration-300 text-lg @error('angkatan') border-red-400 ring-red-200 bg-red-50 @enderror"
                                   placeholder="2023">
                        </div>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 mt-12 pt-10 border-t border-gray-200">
                    <a href="{{ route('mahasiswas.index') }}" 
                       class="flex-1 px-10 py-5 bg-gray-500 text-white font-bold rounded-2xl hover:bg-gray-600 focus:ring-4 focus:ring-gray-200 transition-all duration-300 text-center shadow-xl flex items-center justify-center gap-3">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                        Kembali
                    </a>
                    <button type="submit" 
                            class="flex-1 px-10 py-5 bg-gradient-to-r from-emerald-600 to-teal-600 text-white font-bold rounded-2xl hover:from-emerald-700 hover:to-teal-700 focus:ring-4 focus:ring-emerald-300 transition-all duration-300 text-center shadow-2xl hover:shadow-3xl flex items-center justify-center gap-3">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 0 0 4.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 0 1 7.416-7.418M15.582 9H9"/>
                        </svg>
                        Update Mahasiswa
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
