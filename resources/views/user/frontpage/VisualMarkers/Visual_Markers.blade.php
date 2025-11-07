@extends('user.frontpage.main')
@include('user.frontpage.header')

@section('jasmin-content')

<section class="max-w-6xl mx-auto px-6 py-10 relative mt-20" x-data="{ open: false, selected: {} }">
    <!-- Section Header -->
    <div class="mb-6">
        <h2 class="md:text-2xl text-xl font-bold text-[#234693]">Select Your Location</h2>
        <p class="text-black pt-3 text-sm">Choose from your advertising locations across the city</p>
    </div>

    <!-- Search Bar with Filter -->
    <div class="flex items-center gap-3 bg-gray-100 p-2 rounded-full shadow-sm max-w-6xl relative">
        <form action="" method="GET" class="flex-1 flex items-center">
            <input type="text" name="search" placeholder="Search by location or plot name"
                value="{{ request('search') }}"
                class="flex-1 bg-transparent outline-none px-4 py-2 text-black placeholder-gray-400" />
            <button type="submit" class="hidden"></button>
        </form>

        <!-- Filter Button -->
        <button id="filterBtn" type="button"
            class="flex items-center justify-center bg-white shadow rounded-full w-10 h-10 hover:bg-blue-50 transition">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-blue-600">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 4.5h18m-8.25 7.5h8.25M3 12h5.25m-5.25 7.5h18" />
            </svg>
        </button>

        <!-- Dropdown Submenu -->
        <div id="filterMenu"
            class="hidden absolute top-full right-0 mt-3 w-72 bg-white rounded-xl shadow-lg border border-gray-200 p-4 z-50">
            <h3 class="text-sm font-semibold text-gray-700 mb-3">Filter & Sort</h3>

            <form action="" method="GET" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sort By</label>
                    <select name="sort_by"
                        class="w-full border border-gray-300 rounded-lg p-2 text-sm focus:ring-2 focus:ring-blue-500">
                        <option value="">Select</option>
                        <option value="name" {{ request('sort_by') == 'name' ? 'selected' : '' }}>Name</option>
                        <option value="price" {{ request('sort_by') == 'price' ? 'selected' : '' }}>Price</option>
                        <option value="order" {{ request('sort_by') == 'order' ? 'selected' : '' }}>Order</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Order</label>
                    <select name="sort_order"
                        class="w-full border border-gray-300 rounded-lg p-2 text-sm focus:ring-2 focus:ring-blue-500">
                        <option value="">Default</option>
                        <option value="asc" {{ request('sort_order') == 'asc' ? 'selected' : '' }}>Ascending</option>
                        <option value="desc" {{ request('sort_order') == 'desc' ? 'selected' : '' }}>Descending</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Availability</label>
                    <select name="status"
                        class="w-full border border-gray-300 rounded-lg p-2 text-sm focus:ring-2 focus:ring-blue-500">
                        <option value="">All</option>
                        <option value="available" {{ request('status') == 'available' ? 'selected' : '' }}>Available</option>
                        <option value="limited" {{ request('status') == 'limited' ? 'selected' : '' }}>Limited</option>
                        <option value="unavailable" {{ request('status') == 'unavailable' ? 'selected' : '' }}>Unavailable</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Price Range (₹)</label>
                    <div class="flex gap-2">
                        <input type="number" name="min_price" placeholder="Min"
                            class="w-1/2 border border-gray-300 rounded-lg p-2 text-sm focus:ring-2 focus:ring-blue-500">
                        <input type="number" name="max_price" placeholder="Max"
                            class="w-1/2 border border-gray-300 rounded-lg p-2 text-sm focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>

                <button type="submit"
                    class="w-full bg-blue-700 text-white py-2 rounded-lg hover:bg-blue-800 transition text-sm">
                    Apply Filters
                </button>
            </form>
        </div>
    </div>

    <!-- Card Section -->
    <section class="my-7">
        <div class="grid grid-cols-12 gap-5">
            @foreach ($locations as $location)
                <div class="col-span-12 md:col-span-4 lg:col-span-4 bg-white shadow-xl rounded-3xl">
                    <img src="{{ asset($location['image']) }}" class="w-full rounded-t-3xl" alt="{{ $location['title'] }}" />

                    <div class="flex pt-4 px-5 justify-between">
                        <h2 class="text-lg font-medium font-sans text-[#234693]">{{ $location['title'] }}</h2>
                        <p class="text-sm font-medium font-sans text-[#234693] bg-[#EEF7FF] py-2 px-3 rounded-3xl">
                            {{ $location['seats'] }} Seats Available
                        </p>
                    </div>

                    <div class="flex gap-2 px-5 mt-1 items-center">
                        <i class="fa-solid fa-location-dot text-[#747474] text-sm"></i>
                        <p class="text-[#747474] text-sm font-medium font-sans">{{ $location['place'] }}</p>
                    </div>

                    <div class="text-center mt-5 mb-2">
                        <button
                            @click="selected = {{ json_encode($location) }}; open = true"
                            class="bg-gradient-to-b from-[#0033A8] to-[#001442] text-white lg:text-sm text-xs font-medium font-['Inter'] lg:px-20 px-10 lg:my-3 lg:py-3 py-3 rounded-full shadow-md hover:opacity-90 transition">
                            Select Marker
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section 
   
>


    <!-- Popup 1: Choose Duration -->
    <div 
        x-show="open" 
        x-transition
        class="fixed inset-0 z-50 flex justify-center items-center bg-black/50 backdrop-blur-sm px-3"
    >
        <div class="bg-white w-full max-w-lg rounded-3xl shadow-xl p-5 md:p-6 relative">
            
            <!-- Close -->
            <button @click="open = false"
                class="absolute top-3 right-3 text-gray-500 hover:text-black text-xl font-bold">×</button>

            <!-- Image -->
            <img :src="'{{ asset('') }}' + selected.image"
                class="w-full h-48 object-cover rounded-2xl" alt="visual">

            <p class="text-lg mt-4 font-semibold text-[#234693]" x-text="selected.title"></p>
            <p class="text-sm text-[#747474]" x-text="selected.place"></p>

            <h3 class="text-left mt-6 mb-2 text-lg font-semibold text-[#002168]">Choose Duration</h3>

            <div class="space-y-3 max-w-sm mx-auto">

                <!-- 1 Month -->
                <label class="flex justify-between items-center bg-gray-100 px-6 py-4 rounded-full cursor-pointer">
                    <div class="flex items-center gap-3">
                        <input type="radio" name="duration" value="1 Month" @change="duration = '1 Month'; price = '45,000'">
                        <p class="text-black font-medium">1 Month</p>
                    </div>
                    <p class="font-black text-gray-800">$ 45,000</p>
                </label>

                <!-- 3 Months -->
                <label class="flex justify-between items-center bg-gray-100 px-6 py-4 rounded-full cursor-pointer border border-blue-500">
                    <div class="flex items-center gap-3">
                        <input type="radio" name="duration" value="3 Months" checked @change="duration = '3 Months'; price = '145,000'">
                        <div class="flex items-center gap-2">
                            <p class="text-black font-medium">3 Months</p>
                            <span class="bg-green-500 text-white text-xs font-semibold px-2 py-1 rounded-full">5% Off</span>
                        </div>
                    </div>
                    <p class="font-bold text-black">$ 145,000</p>
                </label>

                <!-- 6 Months -->
                <label class="flex justify-between items-center bg-gray-100 px-6 py-4 rounded-full cursor-pointer">
                    <div class="flex items-center gap-3">
                        <input type="radio" name="duration" value="6 Months" @change="duration = '6 Months'; price = '245,000'">
                        <div class="flex items-center gap-2">
                            <p class="text-black font-medium">6 Months</p>
                            <span class="bg-green-500 text-white text-xs font-semibold px-2 py-1 rounded-full">10% Off</span>
                        </div>
                    </div>
                    <p class="font-semibold text-black">$ 245,000</p>
                </label>
            </div>

            <div class="mt-6 flex justify-center">
                <button 
                    @click="open = false; openSummary = true"
                    class="bg-gradient-to-b from-[#0033A8] to-[#001442] text-white px-8 py-2 rounded-full font-semibold hover:opacity-90">
                    Review & Pay
                </button>
            </div>
        </div>
    </div>


    <!-- Popup 2: Booking Summary -->
    <div 
        x-show="openSummary" 
        x-transition
        class="fixed inset-0 z-50 flex justify-center items-center bg-black/50 backdrop-blur-sm px-3"
    >
        <div class="bg-white w-full max-w-lg rounded-3xl shadow-xl p-5 md:p-6 relative">
            
            <!-- Close -->
            <button @click="openSummary = false"
                class="absolute top-3 right-3 text-gray-500 hover:text-black text-xl font-bold">×</button>

            <!-- Image -->
            <div class="w-full overflow-hidden rounded-2xl">
                <img :src="'{{ asset('') }}' + selected.image"
                    class="w-full h-48 object-cover"
                    alt="Selected Location">
            </div>

            <h2 class="text-lg font-semibold text-[#002168] mt-5 text-left mb-6">Booking Summary</h2>

            <div class="border rounded-xl p-6 max-w-md mx-auto shadow-sm border-[#2B6FFF] space-y-4 text-sm">
                
                <div class="flex justify-between">
                    <p class="font-medium text-black">Location :</p>
                    <p class="font-semibold text-right text-[#234693]">
                        <span x-text="selected.title"></span><br>
                        <span class="text-xs text-[#6C6C6C]" x-text="selected.place"></span>
                    </p>
                </div>

                <div class="flex justify-between">
                    <p class="font-medium text-black">Duration :</p>
                    <p class="font-semibold text-black" x-text="duration"></p>
                </div>

                <div class="flex justify-between">
                    <p class="font-medium text-black">Base Rate :</p>
                    <p class="font-semibold text-black" x-text="'$ ' + price"></p>
                </div>

                <div class="flex justify-between text-base font-semibold">
                    <p class="text-[#3C83F6] font-medium">Total Amount :</p>
                    <p class="text-[#3C83F6] text-lg font-medium" x-text="'$ ' + price"></p>
                </div>

                <div class="mt-6 flex justify-center">
                    <a :href="selected.url"
                        class="bg-gradient-to-b from-[#0033A8] to-[#001442] text-white px-8 py-2 rounded-full font-semibold hover:opacity-90">
                        Proceed to Payment
                    </a>
                </div>
            </div>
        </div>
    </div>

</section>




</section>

<script src="//unpkg.com/alpinejs" defer></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<script src="/user/js/poleads.js"></script>

@endsection
