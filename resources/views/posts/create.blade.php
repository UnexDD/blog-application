@extends('layout')

@section('content')
<div class="container mx-auto max-w-3xl mt-5">
    <h1 class="text-4xl font-bold mb-10">Create Your Own Blog Post</h1>
    <form action="{{ route('posts.store') }}" method="POST" class="create-post-form">
        @csrf
        <div class="mb-8">
            <label for="title" class="block font-bold mb-2">Title</label>
            <input type="text" id="title" name="title" class="w-full px-4 py-2 border rounded-md transition duration-300 focus:border-red-500" value="{{ old('title') }}" required>
        </div>
        <div class="mb-8">
            <label for="body" class="block font-bold mb-2">Body</label>
            <textarea id="body" name="body" class="w-full px-4 py-2 border rounded-md transition duration-300 focus:border-red-500" rows="6" required>{{ old('body') }}</textarea>
        </div>
        <x-tool type="submit"></x-tool>
    </form>
</div>
@endsection
