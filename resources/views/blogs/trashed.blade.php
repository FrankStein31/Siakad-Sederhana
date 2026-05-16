@extends('layouts.app')

@section('content')
<div class="bg-gray-50 min-h-screen py-8">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">



    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-900 mb-4">Trashed Blogs</h1>
        <p class="text-gray-600">Data yang dihapus menggunakan Soft Delete</p>
    </div>

    @if (session('success'))
        <div class="mb-8 p-6 bg-green-50 border border-green-200 rounded-2xl shadow-lg">
            <p class="text-lg font-semibold text-green-800 leading-relaxed">{{ session('success') }}</p>
        </div>
    @endif

    <!-- Back & Add buttons -->
    <div class="flex justify-between items-center mb-10 gap-4">
        <a href="{{ route('blogs.index') }}" class="px-8 py-4 bg-blue-500 text-white font-bold rounded-xl hover:bg-blue-600 focus:ring-4 focus:ring-blue-200 transition-all duration-200 shadow-lg">
            Back to Blogs
        </a>
        <a href="{{ route('blogs.create') }}" class="px-10 py-4 bg-green-600 text-white font-bold rounded-xl hover:bg-green-700 focus:ring-4 focus:ring-green-300 transition-all duration-200 shadow-xl flex items-center gap-3 text-lg">
            Add New Blog
        </a>
    </div>

    <!-- Search -->
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
                    Search
                </button>
                @if(request('search'))
                    <a href="{{ route('blogs.trashed') }}" class="px-8 py-4 bg-gray-500 text-white font-semibold rounded-xl hover:bg-gray-600 focus:ring-4 focus:ring-gray-200 transition-all duration-200 shadow-lg">
                        Clear
                    </a>
                @endif
            </div>
        </form>
    </div>

    <!-- Table -->
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-200">
        <div class="p-8 border-b border-gray-200 bg-gradient-to-r from-red-50 to-rose-50">
            <h3 class="text-2xl font-bold text-gray-900">Data Trashed Blogs</h3>
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
                                <p class="text-sm text-gray-500">{{ $blog->deleted_at }}</p>
                            </div>
                        </td>
                        <td class="px-8 py-6 whitespace-nowrap text-right text-sm font-medium">
                            <div class="flex justify-end space-x-2">
                                <form action="{{ route('blogs.restore', $blog->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="px-4 py-2 bg-emerald-500 text-white rounded-lg hover:bg-emerald-600 focus:ring-4 focus:ring-emerald-200 transition-all duration-200 text-sm font-semibold shadow-md" onclick="return confirm('Restore blog ini?')">
                                        Restore
                                    </button>
                                </form>

                                <form action="{{ route('blogs.forceDelete', $blog->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 focus:ring-4 focus:ring-red-200 transition-all duration-200 text-sm font-semibold shadow-md" onclick="return confirm('Hapus permanen blog ini?')">
                                        Delete Permanently
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="px-8 py-20 text-center">
                            <div class="text-gray-500">
                                <h3 class="mt-2 text-2xl font-semibold text-gray-900">No trashed blogs</h3>
                                <p class="mt-1 text-gray-500">Tidak ada data blog yang tersimpan di Trash.</p>
                            </div>
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        @if($blogs->hasPages())
            <div class="px-8 pb-8 pt-4 border-t border-gray-200">
                <nav aria-label="Pagination">
                    {{ $blogs->appends(request()->query())->links() }}
                </nav>
            </div>
        @endif

    </div>


@endsection

