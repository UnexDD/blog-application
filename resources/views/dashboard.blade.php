<x-app-layout>
    <div class="py-12 center-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                
                </div>
            </div>
            <div class="row ">
                <div class="col-md-8 offset-md-2">
                    <div class="about-us rounded-lg shadow-lg p-8">
                    <div class="header" style="padding: 20px;">
                <h1 class="font-semibold text-4xl text-gray-800 leading-tight ">Welcome to the Adventures Blog!😎</h1>
                    </div>
                        <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
                        About Us
                        </h2>
                        
                        <div x-data="{ loaded: false }" x-init="setTimeout(() => { loaded = true }, 100)">
    <img src="img/Dashboardbg.png" alt="About Us Image" class="mx-auto opacity-0 transition-opacity duration-500" :class="{ 'opacity-100': loaded }" style="max-width: 700px;">
</div>

                        
                        <p class="text-gray-600">
                        Welcome to Adventure Blog, your ultimate destination for thrilling adventures and unforgettable journeys! Here at Adventure Blog, we're passionate about exploring the great outdoors, seeking adrenaline-pumping experiences, and sharing our escapades with fellow adventure enthusiasts like you.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    body {
        background-color: #b7c3d3;
    }
    .center-content {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .about-us {
        text-align: center;
    }
</style>

