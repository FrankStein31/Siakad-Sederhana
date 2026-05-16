<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail {{ $dosen->nama }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen py-8">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">Detail Dosen</h1>
            <nav class="flex justify-center space-x-6 text-sm text-gray-500">
                <a href="{{ route('dosens.index') }}" class="hover:text-purple-600 font-medium">← Kembali ke List</a>
            </nav>
        </div>

        <!-- Detail Card -->
        <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-200">
            <div class="p-10 border-b border-gray-200 bg-gradient-to-r from-purple-50 to-indigo-50">
                <h2 class="text-3xl font-bold text-gray-900 mb-2">{{ $dosen->nama }}</h2>
                <span class="bg-purple-100 text-purple-800 text-xs font-semibold px-3 py-1 rounded-full">
                    {{ $dosen->nisn }}
                </span>
            </div>

            <div class="p-10 space-y-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Informasi Pribadi</h3>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">NISN</label>
                                <p class="text-lg text-gray-900 font-semibold">{{ $dosen->nisn }}</p>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
                                <p class="text-lg text-gray-900 font-semibold">{{ $dosen->nama }}</p>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                <p class="text-lg text-gray-900">{{ $dosen->email }}</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Informasi Sistem</h3>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Dibuat pada</label>
                                <p class="text-lg text-gray-900 font-semibold">{{ \Carbon\Carbon::parse($dosen->created_at)->format('d F Y H:i') }}</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="px-10 pb-10 pt-4 border-t border-gray-200">
                <div class="flex flex-col sm:flex-row gap-4 justify-end">
                    <a href="{{ route('dosens.index') }}" class="flex-1 sm:w-auto px-8 py-4 bg-gray-600 text-white font-semibold rounded-xl hover:bg-gray-700 transition-all duration-200 shadow-lg text-center">
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
