 @extends('user.frontpage.main')
 @include('user.frontpage.header')

 @section('jasmin-content')
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script src="/user/js/plots.js"></script>
 <!-- Title -->
 <div class="pt-10 mt-20  max-w-5xl mx-auto">
     <h1 class="text-xl  font-medium text-[#234693] mb-1">Booking Duration</h1>
     <p class="text-sm text-black mb-10">Choose your booking period</p>
 </div>
 <div class="bg-white shadow-xl rounded-3xl p-10 mb-40 max-w-5xl mx-auto mt-10">



     <!-- Steps -->
     <div class="flex justify-between items-center mb-10 max-w-2xl mx-auto">
         <!-- Step 1 -->
         <div class="flex flex-col items-center">
            <div class="flex gap-4">
             <div class="w-10 h-10 rounded-full bg-green-500 flex items-center justify-center text-white text-xl">✔</div>
             <p class="hover:text-[#21C45D] text-[#3C83F6] text-sm mt-3 font-medium">Select Seats</p>
         </div>
         </div>

         <div class="border-dashed border-t border-green-400 w-20"></div>

         <!-- Step 2 Active -->
         <div class="flex flex-col items-center">
            <div class="flex gap-4">
             <div class="w-10 h-10 rounded-full bg-[#0033A8] flex items-center justify-center text-white text-xl">
                 📅
             </div>
             <p class="hover:text-[#21C45D] text-[#3C83F6] text-sm mt-3 font-medium">Choose Duration</p>
         </div>
         </div>
         <div class="border-dashed border-t border-gray-300 w-20"></div>

         <!-- Step 3 -->
         <div class="flex flex-col items-center opacity-60">
            <div class="flex gap-4">
             <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center text-xl">
                 🧾
             </div>
             <p class="hover:text-[#21C45D] text-[#3C83F6] text-sm mt-3 font-medium">Review & Pay</p>
         </div>
         </div>
     </div>




     <div class="space-y-4 max-w-lg mx-auto ">
         <!-- Choose Duration -->
         <h2 class="text-lg font-medium text-[#002168] mb-6  ">Choose Duration</h2>
         <!-- option 1 -->
         <label class="flex justify-between items-center bg-gray-100 hover:bg-slate-50 px-6 py-4 border-0 hover:border hover:border-blue-500 rounded-full cursor-pointer">
             <div class="flex items-center gap-3">
                 <input type="radio" name="duration" class="text-blue-600 focus:ring-blue-500">
                 <p class="text-black font-medium">1 Month</p>
             </div>
             <p class="font-black text-gray-800">$ 45,000</p>
         </label>

         <!-- option 2 Selected -->
         <label class="flex justify-between items-center  bg-gray-100 hover:bg-slate-50 border-0 hover:border hover:border-blue-500 px-6 py-4 rounded-full cursor-pointer">
             <div class="flex items-center gap-3">
                 <input type="radio" name="duration" checked class="text-blue-600 focus:ring-blue-500">
                 <div class="flex items-center gap-2">
                     <p class="text-black font-medium">3 Month</p>
                     <span class="bg-green-500 text-white text-xs font-semibold px-2 py-1 rounded-full">5% Off</span>
                 </div>
             </div>
             <p class="font-bold text-black">$ 145,000</p>
         </label>

         <!-- option 3 -->
         <label class="flex justify-between items-center bg-gray-100 hover:bg-slate-50 px-6 border-0 hover:border hover:border-blue-500 py-4 rounded-full cursor-pointer">
             <div class="flex items-center gap-3">
                 <input type="radio" name="duration" class="text-blue-600 focus:ring-blue-500">
                 <div class="flex items-center gap-2">
                     <p class="text-black font-medium">6 Month</p>
                     <span class="bg-green-500 text-white text-xs font-semibold px-2 py-1 rounded-full">10% Off</span>
                 </div>
             </div>
             <p class="font-semibold text-black">$ 245,000</p>
         </label>

     </div>

     <!-- Button -->
     <div class="w-full flex justify-center mt-10">
         <button
             class="px-16 py-3 bg-gradient-to-b from-[#0033A8] to-[#001442] text-white font-medium rounded-full shadow hover:from-blue-800 hover:to-blue-950 transition">
             Next
         </button>
     </div>

 </div>