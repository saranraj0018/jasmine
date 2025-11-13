   <script src="https://cdn.tailwindcss.com"></script>


@section('content')
<section class="max-w-7xl mx-auto py-10 px-5 lg:px-10">

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($plots as $plot)
            <div class="bg-[#EEF7FF] rounded-2xl shadow p-5 flex flex-col justify-between">
                <div>
                    <div class="flex justify-between items-center">
                        <h3 class="text-lg font-semibold text-[#234693]">{{ $plot['name'] }}</h3>
                        <div class="flex items-center space-x-2 px-3 py-1 rounded-full 
                            @if($plot['color'] === 'green') bg-green-100 text-green-600
                            @elseif($plot['color'] === 'yellow') bg-yellow-100 text-yellow-600
                            @else bg-red-100 text-red-600 @endif">
                            <span class="w-2.5 h-2.5 rounded-full 
                                @if($plot['color'] === 'green') bg-green-500
                                @elseif($plot['color'] === 'yellow') bg-yellow-400
                                @else bg-red-500 @endif"></span>
                            <span class="text-xs font-medium">{{ $plot['availability'] }}</span>
                        </div>
                    </div>

                    <div class="flex items-center text-gray-600 text-sm mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 12.414A4 4 0 116.586 5.586l4.243 4.243a4 4 0 015.657 5.657z" />
                        </svg>
                        {{ $plot['location'] }}
                    </div>

                    <div class="flex items-center text-gray-600 text-sm mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-3-3H5a3 3 0 00-3 3v2h5m7-9a4 4 0 100-8 4 4 0 000 8z" />
                        </svg>
                        {{ $plot['seats'] }} seats available
                    </div>

                    <p class="text-[#234693] text-sm font-semibold bg-white rounded-full mt-3 inline-block px-3 py-2">
                        {{ $plot['price'] }}
                    </p>
                </div>

                <div class="pt-4">
                    <button 
                        class="w-full px-5 py-2 rounded-full text-white text-sm font-medium shadow 
                        @if($plot['color'] === 'red') bg-gray-400 cursor-not-allowed
                        @else bg-gradient-to-b from-[#0033A8] to-[#001442] hover:opacity-90 transition @endif">
                        Book Now
                    </button>
                </div>
            </div>
        @endforeach
    </div>
</section>
