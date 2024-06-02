@extends('layout')

@section('content')
<div class="container mx-auto max-w-3xl mt-5">
    <div class="bg-white shadow-lg rounded-lg">
        <div class="p-8">
            <h1 class="text-4xl font-bold">{{ $post->title }}</h1>
            <p class="text-lg text-gray-700 mt-4 leading-relaxed">{!! nl2br(e($post->body))!!}</p>
            <div class="flex items-center mt-8">
                <x-primary-button>
                    <a href="{{ route('chirps.index') }}">
                        {{ __('Comment') }}
                    </a>
                </x-primary-button>
            </div>
        </div>
    </div>
</div>
@endsection
