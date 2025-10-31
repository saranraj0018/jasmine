 @section('jasmin-content')
@extends('user.frontpage.main')
@include('user.frontpage.header')  
   <script src="/user/js/plots.js"></script>  
     

 <section class="mx-auto max-w-7xl py-40">
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