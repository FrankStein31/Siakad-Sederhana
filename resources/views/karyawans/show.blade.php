<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail {{ $karyawan->name }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen py-8">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">Detail Karyawan</h1>
            <nav class="flex justify-center space-x-6 text-sm text-gray-500">
                <a href="{{ route('karyawans.index') }}" class="hover:text-blue-600 font-medium">← Kembali ke List</a>
            </nav>
        </div>

        <!-- Detail Card -->
        <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-200">
            <div class="p-10 border-b border-gray-200 bg-gradient-to-r from-blue-50 to-indigo-50">
                <h2 class="text-3xl font-bold text-gray-900 mb-2">{{ $karyawan->name }}</h2>
                <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full">
                    {{ $karyawan->no_telp }}
                </span>
            </div>

            <div class="p-10 space-y-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Informasi Pribadi</h3>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
                                <p class="text-lg text-gray-900 font-semibold">{{ $karyawan->name }}</p>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Alamat</label>
                                <p class="text-lg text-gray-900 whitespace-pre-line leading-relaxed">{{ $karyawan->alamat }}</p>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">No Telp</label>
                                <p class="text-lg text-gray-900 font-semibold">{{ $karyawan->no_telp }}</p>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Kelamin</label>
                                <span class="px-3 py-1 rounded-full text-sm bg-orange-100 text-orange-800 font-medium">
                                    {{ $karyawan->jenis_kelamin }}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Informasi Sistem</h3>
                        <div class="space-y-2">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Dibuat pada</label>
                                <p class="text-lg text-gray-900 font-semibold">{{ \Carbon\Carbon::parse($karyawan->created_at)->format('d F Y H:i') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="px-10 pb-10 pt-4 border-t border-gray-200">
                <div class="flex flex-col sm:flex-row gap-4 justify-end">
                    <a href="{{ route('karyawans.index') }}" class="flex-1 sm:w-auto px-8 py-4 bg-gray-600 text-white font-semibold rounded-xl hover:bg-gray-700 transition-all duration-200 shadow-lg text-center">
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
