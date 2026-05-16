<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $blog->title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto">
        <div class="bg-white shadow-md rounded-lg p-8">
            <div class="flex justify-between items-start mb-6">
                <h1 class="text-3xl font-bold text-gray-900">{{ $blog->title }}</h1>
                <div class="flex gap-2">
                    <a href="{{ route('blogs.edit', $blog->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                        Edit
                    </a>
                    <a href="{{ route('blogs.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                        Back to List
                    </a>
                </div>
            </div>

            <div class="space-y-4 mb-8">
                <p><strong class="text-gray-700">Tanggal Dibuat:</strong> <span class="text-gray-900">{{ \Carbon\Carbon::parse($blog->created_at)->format('d F Y H:i') }}</span></p>
            </div>

            <div class="prose max-w-none">
                <div class="bg-gray-50 p-6 rounded-lg">{!! nl2br(e($blog->content)) !!}</div>
            </div>

        </div>
    </div>
</body>
</html>

