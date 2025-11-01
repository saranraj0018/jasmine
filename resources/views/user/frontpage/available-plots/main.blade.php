@section('jasmin-content')
@extends('user.frontpage.main')
@include('user.frontpage.header')
 <section class=" py-10 mx-auto max-w-7xl">
     <section class="max-w-7xl mx-auto px-4 py-6">
         <!-- 🟦 Section Header -->
         <h2 class="text-xl font-semibold text-[#234693] mb-1 mt-10">Available Plots</h2>
         <p class="text-sm font-light text-black mb-4">
             Browse and book advertising banner plots across the city
         </p>

         <section class="mx-auto max-w-7xl pt-10">
     <!-- Search Bar with Filter -->
  <div class="flex items-center gap-3 bg-gray-100 p-2 rounded-full shadow-sm max-w-6xl relative">
    <form action="" method="GET" class="flex-1 flex items-center">
      <input
        type="text"
        name="search"
        placeholder="Search by location or plot name"
        value="{{ request('search') }}"
        class="flex-1 bg-transparent outline-none px-4 py-2 text-gray-700 placeholder-gray-400"
      />
      <button type="submit" class="hidden"></button>
    </form>

    <!-- Filter Button -->
    <button
      id="filterBtn"
      type="button"
      class="flex items-center justify-center bg-white shadow rounded-full w-10 h-10 hover:bg-blue-50 transition"
    >
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

 </section>
     </section>

 </section>
 <!--section2-->
 <section class="py-5 max-w-7xl lg:px-12 md:px-5 px-5">
     <div class="grid grid-cols-12 lg:gap-7 md:gap-4 gap-5">
         <div class=" col-span-12 lg:col-span-4 md:col-span-4  bg-[#EEF7FF] py-3 px-3 md:py-5 px-5 rounded-2xl ">
             <div class="flex justify-between gap-0">
                 <h3 class="lg:text-xl  text-sm font-[Inter] font-medium text-[#234693]">Ukkadam Lake</h3>
                 <div class="flex items-center space-x-2 bg-green-200  text-[#05BD49] px-3 py-1 rounded-full w-fit">
                     <span class="w-3 h-3 bg-green-500 rounded-full"></span>
                     <span class=" text-xs lg:text-sm font-[Inter] font-medium">Available</span>
                 </div>
             </div>
             <div class="flex items-center space-x-2 py-2 text-black  ">
                 <!-- Location Icon -->
                 <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 " fill="currentColor"
                     viewBox="0 0 24 24">
                     <path
                         d="M12 2C8.1 2 5 5.1 5 9c0 5.3 7 13 7 13s7-7.7 7-13c0-3.9-3.1-7-7-7zm0 9.5c-1.4 0-2.5-1.1-2.5-2.5S10.6 6.5 12 6.5s2.5 1.1 2.5 2.5S13.4 11.5 12 11.5z" />
                 </svg>
                 <span class=" lg:text-sm  text-xs  font-light  py-2">Ukkadam, Coimbatore</span>
             </div>
             <div class="flex items-center space-x-2    py-1">
                 <!-- User Icon -->
                 <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-black" fill="currentColor"
                     viewBox="0 0 24 24">
                     <path
                         d="M16 11c1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3 1.34 3 3 3zM8 11c1.66 0 3-1.34 3-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5C15 14.17 10.33 13 8 13zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                 </svg>
                 <span class="lg:text-sm  text-xs font-light font-Inter">10 seats available</span>
             </div>
             <div class="flex py-2">
                 <p class="text-xs font-[Inter] text-semibold text-[#234693] px-3 py-3 bg-white rounded-3xl ">$15,000
                     (Per month)</p>

             </div>
             <div class="flex justify-center pt-5">
                 <button id="openAdModalBtn" 
                     class="bg-gradient-to-b from-[#0033A8] to-[#001442] text-white lg:text-sm text-xs font-medium font-['Inter']  lg:px-20 px-10 lg:my-3  lg:py-2 py-3 rounded-full shadow-md hover:opacity-90 transition  ">
                     Book Now
                 </button>
             </div>
              <!-- Popup Modal -->
  <div id="adModal" class="fixed inset-0 hidden bg-black bg-opacity-40 items-center justify-center z-50">
    <div class="bg-white rounded-3xl shadow-xl max-w-4xl w-full mx-4 p-10 relative">

      <!-- Close Button -->
      <button id="closeAdModalBtn" class="absolute top-4 right-6 text-gray-400 hover:text-gray-600 text-2xl">
        &times;
      </button>

      <!-- Modal Content -->
      <h3 class="text-center text-lg font-semibold text-black mb-2">
        Select Advertisement Type
      </h3>
      <p class="text-center text-black mb-8">
        Choose the type of advertising that best suits your needs
      </p>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Pole Ads -->
        <div class="cursor-pointer border border-gray-100  shadow-xl rounded-2xl p-6 text-center transition bg-white ">
          <div class="flex flex-col  ">
            <div class="flex  mb-3 gap-4 bg-gradient-to-t from-[#ffffff] to-[#E5F6FF] relative rounded-2xl py-5 px-5">
              <img src="./img/image 105.png" class="w [-10rem]" alt="img"/>
              <h4  id="poleAdsLink" class="text-[#234693] font-semibold text-lg mb-1"><a href="{{ route('poleads') }}">Pole Ads</a></p></h4>
              
            </div>
            <p class="text-black  text-left text-sm pt-3">
              Premium outdoor advertising on strategic pole locations across multiple lakes.
            </p>
          </div>
        </div>

        <!-- Visual Markers -->
        <div class="cursor-pointer border border-gray-100  shadow-xl rounded-2xl p-6 text-center transition bg-white ">
          <div class="flex flex-col  ">
            <div class="flex  mb-3 gap-4 bg-gradient-to-t from-[#ffffff] to-[#E5F6FF] relative rounded-2xl py-5 px-5">
              <img src="./img/image 106.png" class="w [-10rem]" alt="img"/>
              <h4 class="text-[#234693] font-semibold text-lg mb-1">Visual Markers</h4>
            </div>
            <p class="text-black  text-left text-sm pt-3">
             High-Visibility markers for enhanced brand presence and wayfinding
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>


         </div>
         <div class=" col-span-12 lg:col-span-4 md:col-span-4  bg-[#EEF7FF] py-3 px-3 md:py-5 px-5 rounded-2xl ">
             <div class="flex justify-between gap-0">
                 <h3 class="lg:text-xl  text-sm font-[Inter] font-medium text-[#234693]">RS Puram Junction</h3>
                 <div class="flex items-center space-x-2 bg-[#FFE6A8] text-[#DBA002] px-3 py-1 rounded-full w-fit">
                     <span class="w-3 h-3 bg-[#DBA002] rounded-full"></span>
                     <span class=" text-xs lg:text-sm">Limited</span>
                 </div>
             </div>
             <div class="flex items-center space-x-2 py-2 text-black  ">
                 <!-- Location Icon -->
                 <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-black" fill="currentColor"
                     viewBox="0 0 24 24">
                     <path
                         d="M12 2C8.1 2 5 5.1 5 9c0 5.3 7 13 7 13s7-7.7 7-13c0-3.9-3.1-7-7-7zm0 9.5c-1.4 0-2.5-1.1-2.5-2.5S10.6 6.5 12 6.5s2.5 1.1 2.5 2.5S13.4 11.5 12 11.5z" />
                 </svg>
                 <span class=" lg:text-sm  text-xs font-light font-Inter py-2">RS Puram, Coimbatore</span>
             </div>
             <div class="flex items-center space-x-2  text-black py-1">
                 <!-- User Icon -->
                 <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-black" fill="currentColor"
                     viewBox="0 0 24 24">
                     <path
                         d="M16 11c1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3 1.34 3 3 3zM8 11c1.66 0 3-1.34 3-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5C15 14.17 10.33 13 8 13zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                 </svg>
                 <span class="lg:text-sm  text-xs font-light font-Inter">20 seats available</span>
             </div>
             <div class="flex py-2">
                 <p class="text-xs font-[Inter] text-semibold text-[#234693] px-3 py-3 bg-white rounded-3xl ">$45,000
                     (Per month)</p>

             </div>
             <div class="flex justify-center pt-5">
                  <button id="openAdModalBtn1" 
                     class="bg-gradient-to-b from-[#0033A8] to-[#001442] text-white lg:text-sm text-xs font-medium font-['Inter']  lg:px-20 px-10 lg:my-3  lg:py-2 py-3 rounded-full shadow-md hover:opacity-90 transition  ">
                     Book Now
                 </button>
             </div>
              <!-- Popup Modal -->
  <div id="adModal" class="fixed inset-0 hidden bg-black bg-opacity-40 items-center justify-center z-50">
    <div class="bg-white rounded-3xl shadow-xl max-w-4xl w-full mx-4 p-10 relative">

      <!-- Close Button -->
      <button id="closeAdModalBtn" class="absolute top-4 right-6 text-gray-400 hover:text-gray-600 text-2xl">
        &times;
      </button>

      <!-- Modal Content -->
      <h3 class="text-center text-lg font-semibold text-black mb-2">
        Select Advertisement Type
      </h3>
      <p class="text-center text-black mb-8">
        Choose the type of advertising that best suits your needs
      </p>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Pole Ads -->
        <div class="cursor-pointer border border-gray-100  shadow-xl rounded-2xl p-6 text-center transition bg-white ">
          <div class="flex flex-col  ">
            <div class="flex  mb-3 gap-4 bg-gradient-to-t from-[#ffffff] to-[#E5F6FF] relative rounded-2xl py-5 px-5">
              <img src="./img/image 105.png" class="w [-10rem]" alt="img"/>
              <h4 class="text-[#234693] font-semibold text-lg mb-1">Pole Ads</h4>
            </div>
            <p class="text-black  text-left text-sm pt-3">
              Premium outdoor advertising on strategic pole locations across multiple lakes.
            </p>
          </div>
        </div>

        <!-- Visual Markers -->
        <div class="cursor-pointer border border-gray-100  shadow-xl rounded-2xl p-6 text-center transition bg-white ">
          <div class="flex flex-col  ">
            <div class="flex  mb-3 gap-4 bg-gradient-to-t from-[#ffffff] to-[#E5F6FF] relative rounded-2xl py-5 px-5">
              <img src="./img/image 106.png" class="w [-10rem]" alt="img"/>
              <h4 class="text-[#234693] font-semibold text-lg mb-1">Visual Markers</h4>
            </div>
            <p class="text-black  text-left text-sm pt-3">
             High-Visibility markers for enhanced brand presence and wayfinding
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>


         
             

         </div>
         <div class=" col-span-12 lg:col-span-4 md:col-span-4 bg-[#EEF7FF] py-3 px-3 md:py-5 px-5 rounded-2xl ">
             <div class="flex justify-between gap-0">
                 <h3 class="lg:text-xl  text-sm font-[Inter] font-medium text-[#234693]">Gandhipuram Signal</h3>
                 <div class="flex items-center space-x-2 bg-[#FFB5B5] text-[#EF4343] px-3 py-1 rounded-full w-fit">
                     <span class="w-3 h-3 bg-[#EF4343] rounded-full"></span>
                     <span class=" text-xs lg:text-sm">Available</span>
                 </div>
             </div>
             <div class="flex items-center space-x-2 py-2 text-black  ">
                 <!-- Location Icon -->
                 <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-black" fill="currentColor"
                     viewBox="0 0 24 24">
                     <path
                         d="M12 2C8.1 2 5 5.1 5 9c0 5.3 7 13 7 13s7-7.7 7-13c0-3.9-3.1-7-7-7zm0 9.5c-1.4 0-2.5-1.1-2.5-2.5S10.6 6.5 12 6.5s2.5 1.1 2.5 2.5S13.4 11.5 12 11.5z" />
                 </svg>
                 <span class=" lg:text-sm  text-xs font-light font-Inter py-2">Gandhipuram, Coimbatore</span>
             </div>
             <div class="flex items-center space-x-2  text-black py-1">
                 <!-- User Icon -->
                 <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-black" fill="currentColor"
                     viewBox="0 0 24 24">
                     <path
                         d="M16 11c1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3 1.34 3 3 3zM8 11c1.66 0 3-1.34 3-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5C15 14.17 10.33 13 8 13zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                 </svg>
                 <span class="lg:text-sm  text-xs font-light font-Inter">0 seats available</span>
             </div>
             <div class="flex py-2">
                 <p class="text-xs font-[Inter] text-semibold text-[#234693] px-3 py-3 bg-white rounded-3xl ">$50,000
                     (Per month)</p>

             </div>
             <div class="flex justify-center pt-5">
                  <button id="openAdModalBtn2" 
                     class="bg-gradient-to-b from-[#0033A8] to-[#001442] text-white lg:text-sm text-xs font-medium font-['Inter']  lg:px-20 px-10 lg:my-3  lg:py-2 py-3 rounded-full shadow-md hover:opacity-90 transition  ">
                     Book Now
                 </button>
             </div>

         </div>
     </div>
 </section>
 <!--other section-->
 <section class="py-15 mt-7 max-w-7xl lg:px-12 md:px-5 px-5">
     <div class="grid grid-cols-12 lg:gap-7 md:gap-4 gap-5">
         <div class=" col-span-12 lg:col-span-4 md:col-span-4  bg-[#EEF7FF] py-3 px-3 md:py-5 px-5 rounded-2xl ">
             <div class="flex justify-between gap-0">
                 <h3 class="lg:text-xl  text-sm font-[Inter] font-medium text-[#234693]">RS Puram Junction</h3>
                 <div class="flex items-center space-x-2 bg-[#FFE6A8] text-[#DBA002] px-3 py-1 rounded-full w-fit">
                     <span class="w-3 h-3 bg-[#DBA002] rounded-full"></span>
                     <span class=" text-xs lg:text-sm">Limited</span>
                 </div>
             </div>
             <div class="flex items-center space-x-2 py-2 text-black  ">
                 <!-- Location Icon -->
                 <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-black" fill="currentColor"
                     viewBox="0 0 24 24">
                     <path
                         d="M12 2C8.1 2 5 5.1 5 9c0 5.3 7 13 7 13s7-7.7 7-13c0-3.9-3.1-7-7-7zm0 9.5c-1.4 0-2.5-1.1-2.5-2.5S10.6 6.5 12 6.5s2.5 1.1 2.5 2.5S13.4 11.5 12 11.5z" />
                 </svg>
                 <span class=" lg:text-sm  text-xs font-light font-Inter py-2">RS Puram, Coimbatore</span>
             </div>
             <div class="flex items-center space-x-2  text-black py-1">
                 <!-- User Icon -->
                 <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-black" fill="currentColor"
                     viewBox="0 0 24 24">
                     <path
                         d="M16 11c1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3 1.34 3 3 3zM8 11c1.66 0 3-1.34 3-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5C15 14.17 10.33 13 8 13zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                 </svg>
                 <span class="lg:text-sm  text-xs font-light font-Inter">20 seats available</span>
             </div>
             <div class="flex py-2">
                 <p class="text-xs font-[Inter] text-semibold text-[#234693] px-3 py-3 bg-white rounded-3xl ">$45,000
                     (Per month)</p>

             </div>
             <div class="flex justify-center pt-5">
                 <button id="openAdModalBtn3" 
                     class="bg-gradient-to-b from-[#0033A8] to-[#001442] text-white lg:text-sm text-xs font-medium font-['Inter']  lg:px-20 px-10 lg:my-3  lg:py-2 py-3 rounded-full shadow-md hover:opacity-90 transition  ">
                     Book Now
                 </button>
             </div>
             

         </div>
         <div class=" col-span-12 lg:col-span-4 md:col-span-4  bg-[#EEF7FF] py-3 px-3 md:py-5 px-5 rounded-2xl ">
             <div class="flex justify-between gap-0">
                 <h3 class="lg:text-xl  text-sm font-[Inter] font-medium text-[#234693]">RS Puram Junction</h3>
                 <div class="flex items-center space-x-2 bg-[#FFE6A8] text-[#DBA002] px-3 py-1 rounded-full w-fit">
                     <span class="w-3 h-3 bg-[#DBA002] rounded-full"></span>
                     <span class=" text-xs lg:text-sm">Limited</span>
                 </div>
             </div>
             <div class="flex items-center space-x-2 py-2 text-black  ">
                 <!-- Location Icon -->
                 <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-black" fill="currentColor"
                     viewBox="0 0 24 24">
                     <path
                         d="M12 2C8.1 2 5 5.1 5 9c0 5.3 7 13 7 13s7-7.7 7-13c0-3.9-3.1-7-7-7zm0 9.5c-1.4 0-2.5-1.1-2.5-2.5S10.6 6.5 12 6.5s2.5 1.1 2.5 2.5S13.4 11.5 12 11.5z" />
                 </svg>
                 <span class=" lg:text-sm  text-xs font-light font-Inter py-2">RS Puram, Coimbatore</span>
             </div>
             <div class="flex items-center space-x-2  text-black py-1">
                 <!-- User Icon -->
                 <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-black" fill="currentColor"
                     viewBox="0 0 24 24">
                     <path
                         d="M16 11c1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3 1.34 3 3 3zM8 11c1.66 0 3-1.34 3-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5C15 14.17 10.33 13 8 13zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                 </svg>
                 <span class="lg:text-sm  text-xs font-light font-Inter">20 seats available</span>
             </div>
             <div class="flex py-2">
                 <p class="text-xs font-[Inter] text-semibold text-[#234693] px-3 py-3 bg-white rounded-3xl ">$45,000
                     (Per month)</p>

             </div>
             <div class="flex justify-center pt-5">
                  <button id="openAdModalBtn4" 
                     class="bg-gradient-to-b from-[#0033A8] to-[#001442] text-white lg:text-sm text-xs font-medium font-['Inter']  lg:px-20 px-10 lg:my-3  lg:py-2 py-3 rounded-full shadow-md hover:opacity-90 transition  ">
                     Book Now
                 </button>
             </div>

         </div>
         <div class=" col-span-12 lg:col-span-4 md:col-span-4 bg-[#EEF7FF] py-3 px-3 md:py-5 px-5 rounded-2xl ">
             <div class="flex justify-between gap-0">
                 <h3 class="lg:text-xl  text-sm font-[Inter] font-medium text-[#234693]">Ukkadam Lake</h3>
                 <div class="flex items-center space-x-2 bg-green-200 text-[#05BD49] px-3 py-1 rounded-full w-fit">
                     <span class="w-3 h-3 bg-green-500 rounded-full"></span>
                     <span class=" text-xs lg:text-sm">Available</span>
                 </div>
             </div>
             <div class="flex items-center space-x-2 py-2 text-black  ">
                 <!-- Location Icon -->
                 <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-black" fill="currentColor"
                     viewBox="0 0 24 24">
                     <path
                         d="M12 2C8.1 2 5 5.1 5 9c0 5.3 7 13 7 13s7-7.7 7-13c0-3.9-3.1-7-7-7zm0 9.5c-1.4 0-2.5-1.1-2.5-2.5S10.6 6.5 12 6.5s2.5 1.1 2.5 2.5S13.4 11.5 12 11.5z" />
                 </svg>
                 <span class=" lg:text-sm  text-xs font-light font-Inter py-2">Ukkadam, Coimbatore</span>
             </div>
             <div class="flex items-center space-x-2  text-black  py-1">
                 <!-- User Icon -->
                 <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-black" fill="currentColor"
                     viewBox="0 0 24 24">
                     <path
                         d="M16 11c1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3 1.34 3 3 3zM8 11c1.66 0 3-1.34 3-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5C15 14.17 10.33 13 8 13zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                 </svg>
                 <span class="lg:text-sm  text-xs font-light font-Inter">10 seats available</span>
             </div>
             <div class="flex py-2">
                 <p class="text-xs font-[Inter] text-semibold text-[#234693] px-3 py-3 bg-white rounded-3xl ">$10,000
                     (Per month)</p>

             </div>
             <div class="flex justify-center pt-5">
                 <button id="openAdModalBtn5" 
                     class="bg-gradient-to-b from-[#0033A8] to-[#001442] text-white lg:text-sm text-xs font-medium font-['Inter']  lg:px-20 px-10 lg:my-3  lg:py-2 py-3 rounded-full shadow-md hover:opacity-90 transition  ">
                     Book Now
                 </button>
             </div>

         </div>
     </div>

 </section>
 <section class="py-15 mt-7 max-w-7xl lg:px-12 md:px-5 px-5">
     <div class="grid grid-cols-12 lg:gap-7 md:gap-4 gap-5">
         <div class=" col-span-12 lg:col-span-4 md:col-span-4  bg-[#EEF7FF] py-3 px-3 md:py-5 px-5 rounded-2xl ">
             <div class="flex justify-between gap-0">
                 <h3 class="lg:text-xl  text-sm font-[Inter] font-medium text-[#234693]">Gandhipuram Signal</h3>
                 <div class="flex items-center space-x-2 bg-[#FFB5B5] text-[#EF4343] px-3 py-1 rounded-full w-fit">
                     <span class="w-3 h-3 bg-[#EF4343] rounded-full"></span>
                     <span class=" text-xs lg:text-sm">UnAvailable</span>
                 </div>
             </div>
             <div class="flex items-center space-x-2 py-2 text-black  ">
                 <!-- Location Icon -->
                 <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-black" fill="currentColor"
                     viewBox="0 0 24 24">
                     <path
                         d="M12 2C8.1 2 5 5.1 5 9c0 5.3 7 13 7 13s7-7.7 7-13c0-3.9-3.1-7-7-7zm0 9.5c-1.4 0-2.5-1.1-2.5-2.5S10.6 6.5 12 6.5s2.5 1.1 2.5 2.5S13.4 11.5 12 11.5z" />
                 </svg>
                 <span class=" lg:text-sm  text-xs font-light font-Inter py-2">Gandhipuram, Coimbatore</span>
             </div>
             <div class="flex items-center space-x-2  text-black py-1">
                 <!-- User Icon -->
                 <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-black" fill="currentColor"
                     viewBox="0 0 24 24">
                     <path
                         d="M16 11c1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3 1.34 3 3 3zM8 11c1.66 0 3-1.34 3-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5C15 14.17 10.33 13 8 13zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                 </svg>
                 <span class="lg:text-sm  text-xs font-light font-Inter">0 seats available</span>
             </div>
             <div class="flex py-2">
                 <p class="text-xs font-[Inter] text-semibold text-[#234693] px-3 py-3 bg-white rounded-3xl ">$50,000
                     (Per month)</p>

             </div>
             <div class="flex justify-center pt-5">
                  <button id="openAdModalBtn6" 
                     class="bg-gradient-to-b from-[#0033A8] to-[#001442] text-white lg:text-sm text-xs font-medium font-['Inter']  lg:px-20 px-10 lg:my-3  lg:py-2 py-3 rounded-full shadow-md hover:opacity-90 transition  ">
                     Book Now
                 </button>
             </div>

         </div>
         <div class=" col-span-12 lg:col-span-4 md:col-span-4  ">
         </div>
         <div class=" col-span-12 lg:col-span-4 md:col-span-4  ">
         </div>


 </section>
 <script src="/user/js/plots.js"></script>
 @endsection