@extends('layout')

@section('content')
    <div class="flex justify-between items-center mb-8">
        <h1 class="top-heading font-semibold text-4xl text-gray-800 leading-tight">Blog Posts</h1>
    </div>

    <div class="posts-container">
        @foreach ($posts as $post)
            <div class="post-item border-b border-gray-200 py-4">
                <h2 class="text-xl font-semibold"><a href="{{ route('posts.show', $post->id) }}" class="text-white hover:text-red-500 hover:underline">{{ $post->title }}</a></h2>
                <p class="text-gray-1000 mt-2">{{ Str::limit($post->body, 100) }}</p>
                <div class="flex justify-between items-center mt-2">
                    <p class="text-sm text-gray-900">Posted on {{ $post->created_at->format('M d, Y \a\t H:i') }}</p>
                    
                </div>
            </div>
        @endforeach
    </div>

    <div class="flex justify-between items-center mt-4">
        <p class="text-sm text-gray-500">Dev Notice📝: Blogs are updated Weekly</p>
        <x-primary-button>
            <a href="{{ route('posts.create') }}" class="text-white">
                {{ __('Create your own post') }}
            </a>
        </x-primary-button>
    </div>
@endsection
