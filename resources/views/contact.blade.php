<x-app-layout>
    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="p-6 text-3xl text-gray-900 leading-tight">
    {{ __("Recent blogs") }}
</div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Header -->
                <div class="p-6 text-xl text-gray-900 leading-tight">
                    {{ __("Recent blogs") }}
                </div>

                <!-- Main Content -->
                <div class="p-6 text-gray-900"> 
                    {{ __("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.") }}
                </div>

                <!-- Button -->
                <div class="p-6">
                    <x-primary-button>
                    <a href="{{ route('posts.index') }}">
                        {{ __('Posts') }}
                    </a>
                    </x-primary-button>
                </div>
            </div>
        </div>
    </div> 
</x-app-layout>
