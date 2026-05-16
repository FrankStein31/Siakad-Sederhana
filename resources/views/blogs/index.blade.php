<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen py-8">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">Blog List</h1>
        </div>

        @if (session('success'))
        <div class="mb-8 p-6 bg-green-50 border border-green-200 rounded-2xl shadow-lg">
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <svg class="h-8 w-8 text-green-400 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                </div>
                <div class="ml-4 flex-1">
                    <p class="text-lg font-semibold text-green-800 leading-relaxed">{{ session('success') }}</p>
                </div>
                <button type="button" class="ml-auto flex-shrink-0 text-green-400 hover:text-green-500 transition-colors" onclick="this.parentElement.parentElement.remove()">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
        @endif

        <!-- Search Form -->
        <div class="bg-white shadow-xl rounded-2xl p-8 mb-10 border border-gray-200">
            <form method="GET" class="flex flex-col sm:flex-row gap-4 items-end">
                <div class="flex-1">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Search Title</label>
                    <div class="relative">
                        <input type="text" 
                               name="search" 
                               value="{{ request('search') }}" 
                               class="w-full pl-12 pr-4 py-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 text-lg"
                               placeholder="Cari berdasarkan judul...">
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
                    <a href="{{ route('blogs.index') }}" class="px-8 py-4 bg-gray-500 text-white font-semibold rounded-xl hover:bg-gray-600 focus:ring-4 focus:ring-gray-200 transition-all duration-200 shadow-lg">
                        Clear
                    </a>
                    @endif
                </div>
            </form>
        </div>

        <!-- Add Blog Button -->
        <div class="bg-white shadow-xl rounded-2xl p-6 mb-10 border border-gray-200">
            <div class="flex justify-between items-center gap-4">
                <a href="{{ route('blogs.trashed') }}" class="px-8 py-4 bg-gray-600 text-white font-bold rounded-xl hover:bg-gray-700 focus:ring-4 focus:ring-gray-200 transition-all duration-200 shadow-lg flex items-center gap-2 text-lg">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12V7a2 2 0 00-2-2H5a2 2 0 00-2 2v5m4 0v9a2 2 0 002 2h6a2 2 0 002-2v-9m-8 5h4"/>
                    </svg>
                    Trashed
                </a>

                <a href="{{ route('blogs.create') }}" class="px-10 py-4 bg-green-600 text-white font-bold rounded-xl hover:bg-green-700 focus:ring-4 focus:ring-green-300 transition-all duration-200 shadow-xl flex items-center gap-3 text-lg">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                    </svg>
                    Add New Blog
                </a>
            </div>
        </div>


        <!-- Table Card -->
        <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-200">
            <div class="p-8 border-b border-gray-200 bg-gradient-to-r from-blue-50 to-indigo-50">
                <h3 class="text-2xl font-bold text-gray-900">Data Blogs</h3>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-8 py-6 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">No</th>
                            <th class="px-8 py-6 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Title</th>
                            <th class="px-8 py-6 text-right text-xs font-bold text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @forelse($blogs as $index => $blog)
                            <tr class="hover:bg-gray-50 transition-colors duration-200">
                                <td class="px-8 py-6 whitespace-nowrap text-sm font-semibold text-gray-900">
                                    {{ $blogs->firstItem() + $index }}
                                </td>
                                <td class="px-8 py-6">
                                    <div class="max-w-md">
                                        <h4 class="font-semibold text-gray-900 mb-1 line-clamp-2 leading-tight">{{ $blog->title }}</h4>
                                        <p class="text-sm text-gray-500">{{ $blog->created_at }}</p>
                                    </div>
                                </td>
                                <td class="px-8 py-6 whitespace-nowrap text-right text-sm font-medium">
<div class="flex justify-end space-x-2">
                                        <a href="{{ route('blogs.show', $blog->id) }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:ring-4 focus:ring-blue-200 transition-all duration-200 text-sm font-semibold shadow-md">
                                            View
                                        </a>
                                        <a href="{{ route('blogs.edit', $blog->id) }}" class="px-4 py-2 bg-amber-500 text-white rounded-lg hover:bg-amber-600 focus:ring-4 focus:ring-amber-200 transition-all duration-200 text-sm font-semibold shadow-md">
                                            Edit
                                        </a>
                                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 focus:ring-4 focus:ring-red-200 transition-all duration-200 text-sm font-semibold shadow-md" onclick="return confirm('Yakin hapus blog ini?')">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="px-8 py-20 text-center">
                                    <div class="text-gray-500">
                                        <svg class="mx-auto h-24 w-24 mb-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" 
                                            d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3
                                            .42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010
                                             4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 
                                             3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 
                                             3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                                        </svg>
                                        <h3 class="mt-2 text-2xl font-semibold text-gray-900">No blogs found</h3>
                                        <p class="mt-1 text-gray-500">Belum ada data blog. Silakan tambahkan blog baru.</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            @if($blogs->hasPages())
                <div class="px-8 pb-8 pt-4 border-t border-gray-200">
                    <nav aria-label="Pagination">
                        {{ $blogs->appends(request()->query())->links() }}
                    </nav>
                </div>
            @endif
        </div>

    </div>
</body>
</html>

