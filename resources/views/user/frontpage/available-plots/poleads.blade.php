@extends('user.frontpage.main')
@include('user.frontpage.header')

@section('jasmin-content')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/user/js/poleads.js"></script>


<section class="max-w-6xl mx-auto px-6 py-10 relative mt-20">
  <!-- Section Header -->
  <div class="mb-6">
    <h2 class="md:text-2xl text-xl font-bold text-[#234693]">Available Pole Locations</h2>
    <p class="text-black pt-3 text-sm">Send your preferred take and results for advertising</p>
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

  <div class="max-w-7xl mx-auto p-6 space-y-10">

    <section class="bg-[#F4F4F4] rounded-3xl mx-auto max-w-7xl py-10 px-5">
      <div class="flex gap-4 bg-white rounded-2xl py-3 px-3 w-[10rem] ">
        <img src="./img/image 105.png" class="w-1/2 w-5 h-5" alt="location" />
        <h2 class="text-black font-semibold text-sm my-auto">Kurichi Kulam</h2>
      </div>
      <div class="grid grid-cols-12 py-5 gap-5">
        <div class="col-span-12  md:col-span-4 lg:col-span-4 bg-gradient-to-t from-white to-[#E5F6FF]  py-3 px-3 md:py-5 md:px-9 rounded-3xl">
          <h3 class="text-black font-medium md:text-lg lg:text-lg text-sm">Pollachi Highway</h3>
          <p class="text-black font-light md:text-sm  text-xs py-2">45 Plots</p>
          <div class="grid grid-cols-6 gap-4  ">
            <div class="col-span-3  bg-gradient-to-t from-white to-[#E5F6FF] py-3 px-4 rounded-xl shadow-sm border-0 hover:border-2  hover:border-[#00AAFF]">
              <p class="text-[#00AAFF] font-semibold lg:text-lg md:text-sm text-sm">12 <span class="text-black font-light lg:text-sm  text-xs">Premium</span></p>
            </div>
            <div class="col-span-3  bg-gradient-to-t from-white to-[#E5F6FF] py-3 px-4  rounded-xl shadow-sm border-0 hover:border-2  hover:border-[#00AAFF]">
              <p class="text-[#00AAFF] font-semibold  lg:text-xl md:text-lg  text-sm">8 <span class="text-black font-light  lg:text-sm text-xs">Exclusive</span></p>
            </div>
          </div>
          <div class="flex justify-center pt-3">
            <button onclick="openBookingModal()"
              class="bg-gradient-to-b from-[#0033A8] to-[#001442] text-white lg:text-sm text-xs font-medium font-['Inter']  lg:px-20 px-10 lg:my-3  lg:py-2 py-3 rounded-full shadow-md hover:opacity-90 transition  ">
              Select Slots
            </button>
          </div>
        </div>

        <div class="col-span-12  md:col-span-4 lg:col-span-4 bg-gradient-to-t from-white to-[#E5F6FF]  py-3 px-3 md:py-5 md:px-9 rounded-3xl">
          <h3 class="text-black font-medium md:text-lg lg:text-lg text-sm">City Center Route</h3>
          <p class="text-black font-light md:text-sm  text-xs py-2">32 Plots</p>
          <div class="grid grid-cols-6 gap-4  ">
            <div class="col-span-3  bg-gradient-to-t from-white to-[#E5F6FF] py-3 px-4 rounded-xl shadow-sm border-0 hover:border-2  hover:border-[#00AAFF]">
              <p class="text-[#00AAFF] font-semibold lg:text-xl md:text-sm text-sm">15 <span class="text-black font-light lg:text-sm  text-xs">Premium</span></p>
            </div>
            <div class="col-span-3  bg-gradient-to-t from-white to-[#E5F6FF] py-3 px-4  rounded-xl shadow-sm border-0 hover:border-2  hover:border-[#00AAFF]">
              <p class="text-[#00AAFF] font-semibold  lg:text-xl md:text-lg  text-sm">5 <span class="text-black font-light  lg:text-sm text-xs">Exclusive</span></p>
            </div>
          </div>
          <div class="flex justify-center pt-3">
            <button onclick="openBookingModal()"
              class="bg-gradient-to-b from-[#0033A8] to-[#001442] text-white lg:text-sm text-xs font-medium font-['Inter']  lg:px-20 px-10 lg:my-3  lg:py-2 py-3 rounded-full shadow-md hover:opacity-90 transition  ">
              Select Slots
            </button>
            <!-- Booking Modal -->
            <div id="bookingModal"
              class="hidden fixed inset-0 bg-black bg-opacity-40 items-center justify-center z-50">
              <div class="bg-white rounded-3xl shadow-xl max-w-3xl w-full mx-4 p-10 relative">
                <button onclick="closeBookingModal()" class="absolute top-4 right-6 text-gray-500 text-2xl">&times;</button>

                <!-- Title -->
                <h2 class="text-center text-lg font-semibold text-black mb-1">
                  Select Booking Slots
                </h2>
                <p class="text-center text-black mb-8">
                  Choose your preferred slots and sizes
                </p>

                <!-- Laravel Form -->
                <form action="{{ route('booking.confirm') }}" method="POST" id="bookingForm">
                  @csrf

                  <!-- Lighting Options -->
                  <div class="flex justify-center mb-8">
                    <div class="flex bg-white shadow-lg rounded-full p-1 w-[350px] justify-between select-none">

                      <input type="hidden" id="lightingInput">

                      <!-- Backlit Button -->
                      <button
                        type="button"
                        data-value="Backlit"
                        class="lighting-btn active flex items-center gap-2 w-1/2 justify-center py-3 font-medium rounded-full text-[#00AAFF] transition 
             bg-gradient-to-r from-[#e6f7ff] to-[#ccebff] shadow-md">
                        <div class="flex gap-2">
                          <img src="./img/image 108.png" class="w-7 h-7 mx-auto " alt="backlit" />
                          <span>Backlit</span>
                        </div>

                      </button>

                      <!-- Non-lit Button -->
                      <button
                        type="button"
                        data-value="Non-lit"
                        class="lighting-btn flex items-center gap-2 w-1/2 justify-center py-3 font-medium rounded-full text-[#00AAFF] transition">
                        <div class="flex gap-2">
                          <img src="./img/image 109.png" class="w-7 h-7 mx-auto " alt="backlit" />
                          <span>Non-lit</span>
                        </div>
                      </button>

                    </div>
                  </div>

                  <!-- Advertisement Type -->
                  <div class="flex justify-center gap-6 mb-8">
                    <input type="hidden" name="type" id="typeInput">

                    <div data-value="Premium"
                      class="type-card border-2 hover:border-[#234693] bg-gradient-to-b from-[#E5F6FF] to-white rounded-xl px-10 py-6 text-center cursor-pointer hover:shadow-lg transition">
                      <div class="flex gap-4">
                        <img src="./img/image 113.png" class="mx-auto w-12 h-12" alt="premium" />
                        <p class="text-black font-semibold text-lg pt-3">PREMIUM</p>
                      </div>
                    </div>

                    <div data-value="Exclusive"
                      class="type-card border-2 hover:border-[#234693] bg-gradient-to-b from-[#E5F6FF] to-white rounded-xl px-10 py-6 text-center cursor-pointer hover:shadow-lg transition">
                      <div class="flex gap-4">
                        <img src="./img/image 114.png" class="mx-auto w-12 h-12" alt="exclusive" />
                        <p class="text-black font-semibold text-lg pt-2">EXCLUSIVE</p>
                      </div>
                    </div>
                  </div>


                  <!-- Size Options -->
                  <div class="flex justify-center mb-8">
                    <div class="flex bg-white shadow-lg rounded-full p-1 w-[380px] justify-between select-none">

                      <input type="hidden" name="size" id="sizeInput">

                      <!-- 3x3 -->
                      <button
                        type="button"
                        data-value="3x3"
                        class="size-btn active flex items-center justify-center w-1/3 py-3 font-medium rounded-full text-[#00AAFF] transition 
             bg-gradient-to-r from-[#e6f7ff] to-[#ccebff] shadow-md">
                        3 × 3 Ft
                      </button>

                      <!-- 3x4 -->
                      <button
                        type="button"
                        data-value="3x4"
                        class="size-btn flex items-center justify-center w-1/3 py-3 font-medium rounded-full text-[#00AAFF] transition">
                        3 × 4 Ft
                      </button>

                      <!-- 3x5 -->
                      <button
                        type="button"
                        data-value="3x5"
                        class="size-btn flex items-center justify-center w-1/3 py-3 font-medium rounded-full text-[#00AAFF] transition">
                        3 × 5 Ft
                      </button>

                    </div>
                  </div>




                  <!-- Submit Button -->
                   <div class="flex justify-center">
                  <div class="text-center mx-auto">
                    <a href="{{ route('slot.booking') }}"
   class="w-40 py-2.5 rounded-full bg-gradient-to-b from-[#0033A8] to-[#001442] text-white font-medium shadow hover:from-blue-800 hover:to-blue-950 transition flex items-center justify-center">
   Next
</a>


                  </div>
                   </div>
                </form>
              </div>
            </div>

          </div>
        </div>
        <div class="col-span-4"></div>
      </div>

    </section>
  </div>

  <!--section two-->
  <div class="max-w-7xl mx-auto p-6 mt-[-20] ">

    <section class="bg-[#F4F4F4] rounded-3xl mx-auto max-w-7xl py-10 px-5">
      <div class="flex gap-4 bg-white rounded-2xl py-3 px-3 w-[10rem] ">
        <img src="./img/image 105.png" class="w-1/2 w-5 h-5" alt="location" />
        <h2 class="text-black font-semibold text-sm my-auto"> Valankulam</h2>
      </div>
      <div class="grid grid-cols-12 py-5 gap-5">
        <div class="col-span-12  md:col-span-4 lg:col-span-4 bg-gradient-to-t from-white to-[#E5F6FF]  py-3 px-3 md:py-5 md:px-9 rounded-3xl">
          <h3 class="text-black font-medium md:text-lg lg:text-lg text-sm">Thiruvalluvar Statue</h3>
          <div class="flex gap-4">
            <p class=" text-black font-light md:text-sm  text-xs py-2">45 Plots </p>
            <p class=" text-black font-light md:text-sm  text-xs py-2"> Series A</p>
          </div>
          <div class="grid grid-cols-6 gap-4  ">
            <div class="col-span-3  bg-gradient-to-t from-white to-[#E5F6FF] py-3 px-4 rounded-xl shadow-sm border-0 hover:border-2  hover:border-[#00AAFF]">
              <p class="text-[#00AAFF] font-semibold lg:text-lg md:text-sm text-sm">12 <span class="text-black font-light lg:text-sm  text-xs">Premium</span></p>
            </div>
            <div class="col-span-3  bg-gradient-to-t from-white to-[#E5F6FF] py-3 px-4  rounded-xl shadow-sm border-0 hover:border-2  hover:border-[#00AAFF]">
              <p class="text-[#00AAFF] font-semibold  lg:text-xl md:text-lg  text-sm">8 <span class="text-black font-light  lg:text-sm text-xs">Exclusive</span></p>
            </div>
          </div>
          <div class="flex justify-center pt-3">
            <button onclick="openBookingModal()"
              class="bg-gradient-to-b from-[#0033A8] to-[#001442] text-white lg:text-sm text-xs font-medium font-['Inter']  lg:px-20 px-10 lg:my-3  lg:py-2 py-3 rounded-full shadow-md hover:opacity-90 transition  ">
              Select Slots
            </button>
          </div>
        </div>

        <div class="col-span-12  md:col-span-4 lg:col-span-4 bg-gradient-to-t from-white to-[#E5F6FF]  py-3 px-3 md:py-5 md:px-9 rounded-3xl">
          <h3 class="text-black font-medium md:text-lg lg:text-lg text-sm">Main Road</h3>
          <div class="flex gap-4">
            <p class=" text-black font-light md:text-sm  text-xs py-2">45 Plots </p>
            <p class=" text-black font-light md:text-sm  text-xs py-2"> Series A</p>
          </div>
          <div class="grid grid-cols-6 gap-4  ">
            <div class="col-span-3  bg-gradient-to-t from-white to-[#E5F6FF] py-3 px-4 rounded-xl shadow-sm border-0 hover:border-2  hover:border-[#00AAFF]">
              <p class="text-[#00AAFF] font-semibold lg:text-xl md:text-sm text-sm">15 <span class="text-black font-light lg:text-sm  text-xs">Premium</span></p>
            </div>
            <div class="col-span-3  bg-gradient-to-t from-white to-[#E5F6FF] py-3 px-4  rounded-xl shadow-sm border-0 hover:border-2  hover:border-[#00AAFF]">
              <p class="text-[#00AAFF] font-semibold  lg:text-xl md:text-lg  text-sm">5 <span class="text-black font-light  lg:text-sm text-xs">Exclusive</span></p>
            </div>
          </div>
          <div class="flex justify-center pt-3">
            <button onclick="openBookingModal()"
              class="bg-gradient-to-b from-[#0033A8] to-[#001442] text-white lg:text-sm text-xs font-medium font-['Inter']  lg:px-20 px-10 lg:my-3  lg:py-2 py-3 rounded-full shadow-md hover:opacity-90 transition  ">
              Select Slots
            </button>
          </div>
        </div>
        <div class="col-span-12  md:col-span-4 lg:col-span-4 bg-gradient-to-t from-white to-[#E5F6FF]  py-3 px-3 md:py-5 md:px-9 rounded-3xl">
          <h3 class="text-black font-medium md:text-lg lg:text-lg text-sm">Main Road</h3>
          <div class="flex gap-4">
            <p class=" text-black font-light md:text-sm  text-xs py-2">45 Plots </p>
            <p class=" text-black font-light md:text-sm  text-xs py-2"> Series A</p>
          </div>
          <div class="grid grid-cols-6 gap-4  ">
            <div class="col-span-3  bg-gradient-to-t from-white to-[#E5F6FF] py-3 px-4 rounded-xl shadow-sm border-0 hover:border-2  hover:border-[#00AAFF]">
              <p class="text-[#00AAFF] font-semibold lg:text-xl md:text-sm text-sm">15 <span class="text-black font-light lg:text-sm  text-xs">Premium</span></p>
            </div>
            <div class="col-span-3  bg-gradient-to-t from-white to-[#E5F6FF] py-3 px-4  rounded-xl shadow-sm border-0 hover:border-2  hover:border-[#00AAFF]">
              <p class="text-[#00AAFF] font-semibold  lg:text-xl md:text-lg  text-sm">5 <span class="text-black font-light  lg:text-sm text-xs">Exclusive</span></p>
            </div>
          </div>
          <div class="flex justify-center pt-3">
            <button onclick="openBookingModal()"
              class="bg-gradient-to-b from-[#0033A8] to-[#001442] text-white lg:text-sm text-xs font-medium font-['Inter']  lg:px-20 px-10 lg:my-3  lg:py-2 py-3 rounded-full shadow-md hover:opacity-90 transition  ">
              Select Slots
            </button>
          </div>
        </div>
      </div>

    </section>
  </div>

  <!--section three-->

  <div class="max-w-7xl mx-auto p-6 mt-[-20] ">

    <section class="bg-[#F4F4F4] rounded-3xl mx-auto max-w-7xl py-10 px-5">
      <div class="flex gap-4 bg-white rounded-2xl py-3 px-3 w-[10rem] ">
        <img src="./img/image 105.png" class="w-1/2 w-5 h-5" alt="location" />
        <h2 class="text-black font-semibold text-sm my-auto">Periyakulam</h2>
      </div>
      <div class="grid grid-cols-12 py-5 gap-5">
        <div class="col-span-12  md:col-span-4 lg:col-span-4 bg-gradient-to-t from-white to-[#E5F6FF]  py-3 px-3 md:py-5 md:px-9 rounded-3xl">
          <h3 class="text-black font-medium md:text-lg lg:text-lg text-sm">SBOA School Road</h3>
          <div class="flex gap-4">
            <p class=" text-black font-light md:text-sm  text-xs py-2">45 Plots </p>
            <p class=" text-black font-light md:text-sm  text-xs py-2"> Series A</p>
          </div>
          <div class="grid grid-cols-6 gap-4  ">
            <div class="col-span-3  bg-gradient-to-t from-white to-[#E5F6FF] py-3 px-4 rounded-xl shadow-sm border-0 hover:border-2  hover:border-[#00AAFF]">
              <p class="text-[#00AAFF] font-semibold lg:text-lg md:text-sm text-sm">12 <span class="text-black font-light lg:text-sm  text-xs">Premium</span></p>
            </div>
            <div class="col-span-3  bg-gradient-to-t from-white to-[#E5F6FF] py-3 px-4  rounded-xl shadow-sm border-0 hover:border-2  hover:border-[#00AAFF]">
              <p class="text-[#00AAFF] font-semibold  lg:text-xl md:text-lg  text-sm">8 <span class="text-black font-light  lg:text-sm text-xs">Exclusive</span></p>
            </div>
          </div>
          <div class="flex justify-center pt-3">
            <button onclick="openBookingModal()"
              class="bg-gradient-to-b from-[#0033A8] to-[#001442] text-white lg:text-sm text-xs font-medium font-['Inter']  lg:px-20 px-10 lg:my-3  lg:py-2 py-3 rounded-full shadow-md hover:opacity-90 transition  ">
              Select Slots
            </button>
          </div>
        </div>

        <div class="col-span-12  md:col-span-4 lg:col-span-4 bg-gradient-to-t from-white to-[#E5F6FF]  py-3 px-3 md:py-5 md:px-9 rounded-3xl">
          <h3 class="text-black font-medium md:text-lg lg:text-lg text-sm">Market Area</h3>
          <div class="flex gap-4">
            <p class=" text-black font-light md:text-sm  text-xs py-2">45 Plots </p>
            <p class=" text-black font-light md:text-sm  text-xs py-2"> Series A</p>
          </div>
          <div class="grid grid-cols-6 gap-4  ">
            <div class="col-span-3  bg-gradient-to-t from-white to-[#E5F6FF] py-3 px-4 rounded-xl shadow-sm border-0 hover:border-2  hover:border-[#00AAFF]">
              <p class="text-[#00AAFF] font-semibold lg:text-xl md:text-sm text-sm">15 <span class="text-black font-light lg:text-sm  text-xs">Premium</span></p>
            </div>
            <div class="col-span-3  bg-gradient-to-t from-white to-[#E5F6FF] py-3 px-4  rounded-xl shadow-sm border-0 hover:border-2  hover:border-[#00AAFF]">
              <p class="text-[#00AAFF] font-semibold  lg:text-xl md:text-lg  text-sm">5 <span class="text-black font-light  lg:text-sm text-xs">Exclusive</span></p>
            </div>
          </div>
          <div class="flex justify-center pt-3">
            <button onclick="openBookingModal()"
              class="bg-gradient-to-b from-[#0033A8] to-[#001442] text-white lg:text-sm text-xs font-medium font-['Inter']  lg:px-20 px-10 lg:my-3  lg:py-2 py-3 rounded-full shadow-md hover:opacity-90 transition  ">
              Select Slots
            </button>
          </div>
        </div>
        <div class="col-span-12  md:col-span-4 lg:col-span-4 bg-gradient-to-t from-white to-[#E5F6FF]  py-3 px-3 md:py-5 md:px-9 rounded-3xl">
          <h3 class="text-black font-medium md:text-lg lg:text-lg text-sm">Main Road</h3>
          <div class="flex gap-4">
            <p class=" text-black font-light md:text-sm  text-xs py-2">45 Plots </p>
            <p class=" text-black font-light md:text-sm  text-xs py-2"> Series A</p>
          </div>
          <div class="grid grid-cols-6 gap-4  ">
            <div class="col-span-3  bg-gradient-to-t from-white to-[#E5F6FF] py-3 px-4 rounded-xl shadow-sm border-0 hover:border-2  hover:border-[#00AAFF]">
              <p class="text-[#00AAFF] font-semibold lg:text-xl md:text-sm text-sm">15 <span class="text-black font-light lg:text-sm  text-xs">Premium</span></p>
            </div>
            <div class="col-span-3  bg-gradient-to-t from-white to-[#E5F6FF] py-3 px-4  rounded-xl shadow-sm border-0 hover:border-2  hover:border-[#00AAFF]">
              <p class="text-[#00AAFF] font-semibold  lg:text-xl md:text-lg  text-sm">5 <span class="text-black font-light  lg:text-sm text-xs">Exclusive</span></p>
            </div>
          </div>
          <div class="flex justify-center pt-3">
            <button onclick="openBookingModal()"
              class="bg-gradient-to-b from-[#0033A8] to-[#001442] text-white lg:text-sm text-xs font-medium font-['Inter']  lg:px-20 px-10 lg:my-3  lg:py-2 py-3 rounded-full shadow-md hover:opacity-90 transition  ">
              Select Slots
            </button>
          </div>
        </div>
      </div>

    </section>
  </div>