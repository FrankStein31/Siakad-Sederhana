<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen py-8">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">Add New Blog</h1>
            <p class="text-xl text-gray-600">Fill in the details to create a new blog post</p>
        </div>

        <!-- Form Card -->
        <div class="bg-white shadow-2xl rounded-3xl p-10 border border-gray-200">
            
            <!-- Back Button -->
            <div class="mb-8">
                <a href="{{ route('blogs.index') }}" class="inline-flex items-center px-6 py-3 bg-gray-500 text-white font-semibold rounded-xl hover:bg-gray-600 focus:ring-4 focus:ring-gray-200 transition-all duration-200 shadow-lg">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                    Back to Blogs
                </a>
            </div>

            <form method="POST" action="{{ route('blogs.store') }}">
                @csrf
                
                <!-- Title Field -->
                <div class="mb-8">
                    <label for="title" class="block text-sm font-bold text-gray-700 mb-3">Blog Title</label>
                    <input type="text" 
                           id="title"
                           name="title" 
                           value="{{ old('title') }}" 
                           class="w-full px-6 py-5 border border-gray-300 rounded-2xl focus:ring-3 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 text-lg @error('title') border-red-500 ring-2 ring-red-200 @enderror"
                           placeholder="Enter blog title...">
                    @error('title')
                        <p class="mt-2 text-sm text-red-600 flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                            </svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Content Field -->
                <div class="mb-10">
                    <label for="content" class="block text-sm font-bold text-gray-700 mb-3">Blog Content</label>
                    <textarea id="content"
                              name="content"
                              rows="12"
                              class="w-full px-6 py-5 border border-gray-300 rounded-2xl focus:ring-3 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 text-lg resize-vertical @error('content') border-red-500 ring-2 ring-red-200 @enderror"
                              placeholder="Write your blog content here...">{{ old('content') }}</textarea>
                    @error('content')
                        <p class="mt-2 text-sm text-red-600 flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                            </svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Author Field -->
                <div class="mb-8">
                    <label for="author" class="block text-sm font-bold text-gray-700 mb-3">Author</label>
                    <input type="text"
                           id="author"
                           name="author"
                           value="{{ old('author') }}"
                           class="w-full px-6 py-5 border border-gray-300 rounded-2xl focus:ring-3 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 text-lg @error('author') border-red-500 ring-2 ring-red-200 @enderror"
                           placeholder="Enter blog author...">
                    @error('author')
                        <p class="mt-2 text-sm text-red-600 flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                            </svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="flex flex-col sm:flex-row gap-4 justify-end pt-6 border-t border-gray-200">
                    <a href="{{ route('blogs.index') }}" class="px-10 py-4 bg-gray-500 text-white font-semibold rounded-xl hover:bg-gray-600 focus:ring-4 focus:ring-gray-200 transition-all duration-200 shadow-lg text-lg flex-1 sm:flex-none text-center">
                        Cancel
                    </a>
                    <button type="submit" class="px-12 py-4 bg-green-600 text-white font-bold rounded-xl hover:bg-green-700 focus:ring-4 focus:ring-green-200 transition-all duration-200 shadow-xl text-lg">
                        <svg class="w-6 h-6 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                        Create Blog
                    </button>
                </div>
            </form>
        </div>
        
        <!-- Client-side validation script -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const form = document.querySelector('form');
                const titleInput = document.getElementById('title');
                const contentInput = document.getElementById('content');
                const authorInput = document.getElementById('author');
                
                form.addEventListener('submit', function(e) {
                    const title = titleInput.value.trim();
                    const content = contentInput.value.trim();
                    const author = authorInput.value.trim();
                    
                    if (title === '') {
                        e.preventDefault();
                        alert('Mohon isi judul blog!');
                        titleInput.focus();
                        return false;
                    }
                    
                    if (title.length > 255) {
                        e.preventDefault();
                        alert('Judul blog tidak boleh lebih dari 255 karakter!');
                        titleInput.focus();
                        return false;
                    }
                    
                    if (content === '') {
                        e.preventDefault();
                        alert('Mohon isi content blog!');
                        contentInput.focus();
                        return false;
                    }
                    
                    if (author === '') {
                        e.preventDefault();
                        alert('Mohon isi author blog!');
                        authorInput.focus();
                        return false;
                    }
                });
            });
        </script>
    </div>
</body>
</html>
