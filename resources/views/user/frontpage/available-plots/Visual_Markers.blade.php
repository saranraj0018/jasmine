 @section('jasmin-content')
 @extends('user.frontpage.main')
 @include('user.frontpage.header')




 <section class="max-w-6xl mx-auto px-6 py-10 relative mt-20">
     <!-- Section Header -->
     <div class="mb-6">
         <h2 class="md:text-2xl text-xl font-bold text-[#234693]">Select Your Location</h2>
         <p class="text-black pt-3 text-sm">Choose from your advertising locations across the city</p>
     </div>

     <!-- Search Bar with Filter -->
     <div class="flex items-center gap-3 bg-gray-100 p-2 rounded-full shadow-sm max-w-6xl relative">
         <form action="" method="GET" class="flex-1 flex items-center">
             <input
                 type="text"
                 name="search"
                 placeholder="Search by location or plot name"
                 value="{{ request('search') }}"
                 class="flex-1 bg-transparent outline-none px-4 py-2 text-black placeholder-gray-400" />
             <button type="submit" class="hidden"></button>

         </form>

         <!-- Filter Button -->
         <button
             id="filterBtn"
             type="button"
             class="flex items-center justify-center bg-white shadow rounded-full w-10 h-10 hover:bg-blue-50 transition">
             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke-width="1.5" stroke="currentColor"
                 class="w-5 h-5 text-blue-600">
                 <path stroke-linecap="round" stroke-linejoin="round"
                     d="M3 4.5h18m-8.25 7.5h8.25M3 12h5.25m-5.25 7.5h18" />
             </svg>
         </button>

         <!-- Dropdown Submenu -->
         <div id="filterMenu"
             class="hidden absolute top-full right-0 mt-3 w-72 bg-white rounded-xl shadow-lg border border-gray-200 p-4 z-50">
             <h3 class="text-sm font-semibold text-gray-700 mb-3">Filter & Sort</h3>

             <form action="" method="GET" class="space-y-4">

                 <!-- Sort By -->
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

                 <!-- Sort Order -->
                 <div>
                     <label class="block text-sm font-medium text-gray-700 mb-1">Order</label>
                     <select name="sort_order"
                         class="w-full border border-gray-300 rounded-lg p-2 text-sm focus:ring-2 focus:ring-blue-500">
                         <option value="">Default</option>
                         <option value="asc" {{ request('sort_order') == 'asc' ? 'selected' : '' }}>Ascending</option>
                         <option value="desc" {{ request('sort_order') == 'desc' ? 'selected' : '' }}>Descending</option>
                     </select>
                 </div>

                 <!-- Availability -->
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

                 <!-- Price Range -->
                 <div>
                     <label class="block text-sm font-medium text-gray-700 mb-1">Price Range (₹)</label>
                     <div class="flex gap-2">
                         <input type="number" name="min_price" placeholder="Min"
                             class="w-1/2 border border-gray-300 rounded-lg p-2 text-sm focus:ring-2 focus:ring-blue-500">
                         <input type="number" name="max_price" placeholder="Max"
                             class="w-1/2 border border-gray-300 rounded-lg p-2 text-sm focus:ring-2 focus:ring-blue-500">
                     </div>
                 </div>



                 <!-- Apply Button -->
                 <button type="submit"
                     class="w-full bg-blue-700 text-white py-2 rounded-lg hover:bg-blue-800 transition text-sm">
                     Apply Filters
                 </button>
             </form>
         </div>
     </div>

     <!--card section-->
     <section class="my-7">
         <div class="grid grid-cols-12 gap-5">
             <div class="col-span-12 md:col-span-4 lg:col-span-4 bg-white shadow-xl rounded-3xl">
    <!-- Image -->
    <img src="./img/visual.png" class="w-full rounded-t-3xl" alt="visual" />

    <!-- Title & Seats -->
    <div class="flex pt-4 px-5 justify-between">
        <h2 class="text-lg font-medium font-sans text-[#234693]">Valankulam</h2>
        <p class="text-sm font-medium font-sans text-[#234693] bg-[#EEF7FF] py-2 px-3 rounded-3xl">
            10 Seats Available
        </p>
    </div>

    <!-- Location -->
    <div class="flex gap-2 px-5 mt-1 items-center">
        <i class="fa-solid fa-location-dot text-[#747474] text-sm"></i>
        <p class="text-[#747474] text-sm font-medium font-sans">Periyakulam Lake</p>
    </div>

    <!-- Button -->
    <div class="text-center mt-5">
        <button onclick="openBookingModal()"
            class="bg-gradient-to-b from-[#0033A8] to-[#001442] text-white lg:text-sm text-xs font-medium font-['Inter'] lg:px-20 px-10 lg:my-3 lg:py-3 py-3 rounded-full shadow-md hover:opacity-90 transition">
            Select Marker
        </button>
    </div>
</div>

<!-- Booking Modal -->
<div id="bookingModal"
    class="fixed inset-0 z-50 hidden flex justify-center items-center bg-black/50 backdrop-blur-sm px-3">
    <div class="bg-white w-full max-w-lg rounded-3xl shadow-xl p-5 md:p-6 relative">

        <!-- Close Button -->
        <button onclick="closeBookingModal()" class="absolute top-3 right-3 text-gray-500 hover:text-black text-xl font-bold">×</button>

        <!-- Image -->
        <div class="w-full overflow-hidden rounded-2xl">
            <img src="./img/visual.png" class="w-full h-48 object-cover" alt="visual">
        </div>

        <!-- Title & Location -->
        <p class="text-lg mt-4 font-semibold text-[#234693] font-sans">Valankulam</p>
        <div class="flex gap-2 mt-2 items-center">
            <i class="fa-solid fa-location-dot text-[#747474] text-sm"></i>
            <p class="text-sm font-semibold text-[#747474] font-sans">Periyakulam Lake</p>
        </div>

        <!-- Duration -->
        

        <div class="space-y-3 max-w-sm mx-auto">
<h3 class="text-left mt-6 mb-2 text-lg font-semibold text-[#002168]">Choose Duration</h3>
            <label class="flex justify-between items-center bg-gray-100 hover:bg-slate-50 px-6 py-4 rounded-full cursor-pointer">
                <div class="flex items-center gap-3">
                    <input type="radio" name="duration">
                    <p class="text-black font-medium">1 Month</p>
                </div>
                <p class="font-black text-gray-800">$ 45,000</p>
            </label>

            <label class="flex justify-between items-center bg-gray-100 hover:bg-slate-50 px-6 py-4 rounded-full cursor-pointer border border-blue-500">
                <div class="flex items-center gap-3">
                    <input type="radio" name="duration" checked>
                    <div class="flex items-center gap-2">
                        <p class="text-black font-medium">3 Months</p>
                        <span class="bg-green-500 text-white text-xs font-semibold px-2 py-1 rounded-full">5% Off</span>
                    </div>
                </div>
                <p class="font-bold text-black">$ 145,000</p>
            </label>

            <label class="flex justify-between items-center bg-gray-100 hover:bg-slate-50 px-6 py-4 rounded-full cursor-pointer">
                <div class="flex items-center gap-3">
                    <input type="radio" name="duration">
                    <div class="flex items-center gap-2">
                        <p class="text-black font-medium">6 Months</p>
                        <span class="bg-green-500 text-white text-xs font-semibold px-2 py-1 rounded-full">10% Off</span>
                    </div>
                </div>
                <p class="font-semibold text-black">$ 245,000</p>
            </label>

        </div>

        <!-- Pay Button -->
        <div class="mt-6 flex justify-center">
            <button onclick ="open ()"
                class="bg-gradient-to-b from-[#0033A8] to-[#001442] text-white px-8 py-2 rounded-full font-semibold">
                Review & Pay
            </button>
        </div>

    </div>
</div>
      
             
             <div class="col-span-12 md:col-span-4 lg:col-span-4 bg-white shadow-xl rounded-3xl">
                 <img src="./img/visual1.png" class="" alt="visual" />
                 <div class="flex pt-4 px-5 justify-between">
                     <h2 class="text-lg font-medium font-sans text-[#234693]">Periyakulam</h2>
                     <p class="text-sm font-medium font-sans text-[#234693] bg-[#EEF7FF]  py-2 px-3 rounded-3xl">10 Seats Available</p>
                 </div>
                 <div class="flex gap-3 px-5">
                     <i class="fas fa-map-marker-alt text-[#747474] text-sm pt-1  font-medium font-sans"></i>
                     <p class=" text-[#747474] text-sm font-medium font-sans">Periyakulam Lake</p>
                 </div>
                 <!-- Next Button -->
                <!-- Button -->
    <div class=" mx-auto text-center  mt-5">
        <button onclick="openBookingModal1()"
            class="bg-gradient-to-b from-[#0033A8] to-[#001442] text-white lg:text-sm text-xs font-medium font-['Inter'] lg:px-20 px-10 lg:my-3 lg:py-3 py-3 rounded-full shadow-md hover:opacity-90 transition">
            Select Marker
        </button>
    </div>
</div>

             
             <div class="col-span-12 md:col-span-4 lg:col-span-4 bg-white shadow-xl rounded-3xl">
                 <img src="./img/visual2.png" class="" alt="visual" />
                 <div class="flex pt-4 px-5 justify-between">
                     <h2 class="text-lg font-medium font-sans text-[#234693]">Selva Chinthamani<br> Kulam</h2>
                     <p class="text-sm font-medium font-sans text-[#234693] bg-[#EEF7FF]  py-2 px-3 rounded-3xl">10 Seats Available</p>
                 </div>
                 <div class="flex gap-3 px-5">
                     <i class="fas fa-map-marker-alt text-[#747474] text-sm pt-1  font-medium font-sans"></i>
                     <p class=" text-[#747474] text-sm font-medium font-sans">Periyakulam Lake</p>
                 </div>
                 <!-- Next Button -->
                 <!-- Button -->
    <div class=" mx-auto text-center mt-3 mb-3">
        <button onclick="openBookingModal2()"
            class="bg-gradient-to-b from-[#0033A8] to-[#001442] text-white lg:text-sm text-xs font-medium font-['Inter'] lg:px-20 px-10 lg:my-3 lg:py-3 py-3 rounded-full shadow-md hover:opacity-90 transition">
            Select Marker
        </button>
    </div>
</div>
         </div>
     </section>

     <!--add card section-->
     <section class="mt-7 mb-20">
         <div class="grid grid-cols-12 gap-5">
             <div class="col-span-12 md:col-span-4 lg:col-span-4 bg-white shadow-xl rounded-3xl">
                 <img src="./img/visual.png" class="" alt="visual" />
                 <div class="flex pt-4 px-5 justify-between">
                     <h2 class="text-lg font-medium font-sans text-[#234693]">Valankulam</h2>
                     <p class="text-sm font-medium font-sans text-[#234693] bg-[#EEF7FF]  py-2 px-3 rounded-3xl">10 Seats Available</p>
                 </div>
                 <div class="flex gap-3 px-5">
                     <i class="fas fa-map-marker-alt text-[#747474] text-sm pt-1  font-medium font-sans"></i>
                     <p class=" text-[#747474] text-sm font-medium font-sans">Periyakulam Lake</p>
                 </div>
                 <!-- Next Button -->
                 <!-- Button -->
    <div class=" text-center mt-5">
        <button onclick="openBookingModal3()"
            class="bg-gradient-to-b from-[#0033A8] to-[#001442] text-white lg:text-sm text-xs font-medium font-['Inter'] lg:px-20 px-10 lg:my-3 lg:py-3 py-3 rounded-full shadow-md hover:opacity-90 transition">
            Select Marker
        </button>
    </div>
</div>
             
             <div class="col-span-12 md:col-span-4 lg:col-span-4 bg-white shadow-xl rounded-3xl">
                 <img src="./img/visual2.png" class="" alt="visual" />
                 <div class="flex pt-4 px-5 justify-between">
                     <h2 class="text-lg font-medium font-sans text-[#234693] ">Selva Chinthamani Kulam</h2>
                     <p class="text-sm font-medium font-sans text-center text-[#234693] bg-[#EEF7FF]  py-2 px-3 rounded-3xl">10 Seats Available</p>
                 </div>
                 <div class="flex gap-3 px-5">
                     <i class="fas fa-map-marker-alt text-[#747474] text-sm pt-1  font-medium font-sans"></i>
                     <p class=" text-[#747474] text-sm font-medium font-sans">Periyakulam Lake</p>
                 </div>
                 <!-- Next Button -->
                 
              <!-- Button -->
    <div class="  text-center mt-5 mb-5">
        <button onclick="openBookingModal4()"
            class="bg-gradient-to-b from-[#0033A8] to-[#001442] text-white lg:text-sm text-xs font-medium font-['Inter'] lg:px-20 px-10 lg:my-3 lg:py-3 py-3 rounded-full shadow-md hover:opacity-90 transition">
            Select Marker
        </button>
    </div>
</div>

             </div>
             <div class="col-span-12 md:col-span-4 lg:col-span-4">

             </div>
         </div>
     </section>


     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <script src="/user/js/poleads.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
     @endsection