 @extends('user.frontpage.main')
 @include('user.frontpage.header')

 @section('jasmin-content')
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script src="/user/js/plots.js"></script>

 <section class="max-w-6xl mx-auto px-6 py-10 relative mt-20">
     <!-- Section Header -->
     <div class="mb-6">
         <h2 class="md:text-2xl text-xl font-medium text-[#234693]">Book Your Banner Space</h2>
         <p class="text-black pt-3 text-sm">Select how many advertising slots you need</p>
     </div>

     <!-- Search Bar with Filter -->
     <div class="flex items-center gap-3 bg-gray-100 p-2 rounded-full shadow-sm max-w-7xl ms-10 relative">
         <form action="" method="GET" class="flex-1 flex items-center">
             <input
                 type="text"
                 name="search"
                 placeholder="Search by location or plot name"
                 value="{{ request('search') }}"
                 class="flex-1 bg-transparent outline-none px-4 py-2 text-black placeholder-gray-400" />
             <button type="submit" class="hidden"></button>
         </form>
     </div>


     <div class="flex justify-center items-center min-h-screen  py-20">
         <div class="bg-white shadow-lg rounded-2xl p-8 w-full max-w-5xl">

             <!-- Step Header -->
             <div class="flex justify-center items-center mb-10">
                 <div class="flex items-center space-x-2">
                     <div class="flex gap-4 items-center justify-center rounded-full ">
                         <img src="./img/Group 35283.png" class="w-10 h-10" alt="location" />
                         <p class=" text-[#565656] hover:text-[#3C83F6] font-medium">Select Seats </p>
                     </div>

                 </div>
                 <p class="px-3">----------</p>
                 <div class="flex items-center text-gray-400 space-x-8 ">
                     <div class="flex items-center space-x-2">
                         <div class="w-8 h-8 flex items-center justify-center rounded-full ms-3 bg-gray-200">📅</div>
                         <p class="ms-3 text-[#565656] hover:text-[#3C83F6]  font-medium"> Choose Duration </p>
                     </div>
                     <p class="px-3">--------------</p>
                     <div class="flex items-center space-x-2">
                         <div class="w-8 h-8 flex items-center justify-center rounded-full ms[-10]  bg-gray-200">🖼️</div>
                         <p class="text-[#565656] hover:text-[#3C83F6]  font-medium"> Review & Pay</p>
                     </div>
                 </div>
             </div>

             <!-- Booking Layout -->
             <form action="" method="POST" id="seatForm">
                 @csrf
                 <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                     <!-- Seat Selection Section -->
                     <div class="border border-[#ACC5FF] rounded-xl p-6">
                         <div class="flex justify-between items-center mb-4">
                             <h3 class="font-medium text-[#00309C]">EXCLUSIVE</h3>
                             <span class="text-xs text-medium text-black bg-gradient-to-b from-[#E5F6FF] to-white rounded-xl px-3 py-2">22 Available</span>
                         </div>

                         <div class="grid grid-cols-6 gap-3">
                             @for ($i = 1; $i <= 30; $i++)
                                 <button type="button"
                                 data-seat="{{ $i }}"
                                 class="seat-btn w-10 h-10 flex items-center justify-center rounded-full border border-gray-300 text-gray-600 hover:border-blue-500 hover:text-blue-700 transition">
                                 {{ $i }}
                                 </button>
                                 @endfor
                         </div>

                         <input type="hidden" name="selected_seats" id="selectedSeats">
                     </div>

                     <!-- Images/Videos Section -->
                     <div class="border border- border-[#ACC5FF] rounded-xl p-6">
                         <div class="flex justify-between items-center mb-4">
                             <h3 class="font-medium text-black">Images / Videos</h3>
                         </div>

                         <div class="grid grid-cols-3 gap-3">
                             <!-- Example Thumbnails -->
                             <img src="./img/booking.png" alt="Ad" class="rounded-lg object-cover shadow-sm">
                             <img src="./img/booking1.png" alt="Ad" class="rounded-lg object-cover shadow-sm">
                             <img src="./img/booking2.png" alt="Ad" class="rounded-lg object-cover shadow-sm">

                             <div class="relative rounded-lg overflow-hidden">
                                 <img src="https://via.placeholder.com/150x100" alt="Video" class="object-cover w-full h-full">
                                 <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40">
                                     <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="none" class="w-10 h-10">
                                         <path d="M5 3l14 9-14 9V3z" />
                                     </svg>
                                 </div>
                             </div>
                             <img src="./img/booking3.png" alt="Ad" class="rounded-lg object-cover shadow-sm">

                             <div class="relative rounded-lg overflow-hidden">
                                 <img src="https://via.placeholder.com/150x100" alt="Video" class="object-cover w-full h-full">
                                 <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40">
                                     <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="none" class="w-10 h-10">
                                         <path d="M5 3l14 9-14 9V3z" />
                                     </svg>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

                 <!-- Next Button -->
                 <div class="text-center mt-8">
                     <div class="flex justify-center">
                         <div class="text-center mx-auto">
                             <a href="{{ route('Select_Duration') }}"
                                 class="w-40 py-2.5 px-3.5 rounded-full bg-gradient-to-b from-[#0033A8] to-[#001442] text-white font-medium shadow hover:from-blue-800 hover:to-blue-950 transition flex items-center justify-center">
                                 Next
                             </a>


                         </div>
                     </div>
                 </div>
             </form>
         </div>
     </div>
     @endsection