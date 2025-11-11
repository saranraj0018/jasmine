   @section('jasmin-content')
   @extends('user.frontpage.main')
   @include('user.frontpage.header')

   <section class="mx-auto max-w-6xl mt-40">
     <div class="grid grid-cols-12 gap-10">
       <div class="col-span-4 bg-white py-7 px-7 rounded-xl shadow-lg">
         <h2 class="text-2xl font-medium text-[#234693]">Profile Settings</h2>
         <p class="text-black font-light my-2 text-sm">Manage your account information and company details</p>
         <img src="./img/profile.png" class="w-full my-5 px-10 " alt="profile" />
         <h2 class="text-xl font-semibold text-center text-[#002168] my-2">Vasanthkumar</h2>
         <!-- Sidebar -->
         <div class="  space-x-5 space-y-5">
           <ul id="sidebarMenu" class="space-y-2">
             <li data-target="#dashboardSection" class="menu-item  hover:bg-[#E5F6FF] text-[#234693] font-medium px-4 py-3 rounded-3xl flex justify-between cursor-pointer items-center">
               <span class="flex items-center gap-2"><a href="">🔒 Dashboard</a></span> ➜
             </li>
             <li data-target="#bookingSection" class="menu-item px-4 py-3 rounded-3xl font-medium  text-[#234693]  hover:bg-[#E5F6FF] flex justify-between cursor-pointer items-center">
               <span class="flex items-center gap-2"><a href="">👤 My booking</a></span> ➜
             </li>
             <li data-target="#historySection" class="menu-item px-4 py-3  font-medium  rounded-23xl text-[#234693]  hover:bg-[#E5F6FF] flex justify-between cursor-pointer items-center">
               <span class="flex items-center gap-2">🛡️ History</span> ➜
             </li>
             <li data-target="#companySection" class="menu-item px-4 py-3 font-medium   rounded-3xl text-[#234693] hover:bg-[#E5F6FF] flex justify-between cursor-pointer items-center">
               <span class="flex items-center gap-2">🏬 Logout</span> ➜
             </li>
           </ul>
         </div>
       </div>
       <!--Personal Information-->
       <div class="col-span-8 bg-gradient-to-t from-white to-[#E5F6FF] shadow rounded-2xl p-8">
         <h2 class="text-xl font-semibold text-[#002168] mb-6">Personal Information</h2>

         <form class="space-y-6">
           <div>
             <label class="block text-sm text-[#002168] font-medium mb-1">Full Name</label>
             <input type="text" placeholder="Full Name" class=" bg-white/60 w-full rounded-full  text-[#B5B5B5] border-[#B5B5B5] shadow-sm border-b-2 p-3 " />
           </div>

           <div>
             <label class="block text-sm text-[#002168] font-medium mb-1">Phone Number</label>
             <input type="text" placeholder="Phone Number" class=" bg-white/60 w-full rounded-full  text-[#B5B5B5] border-[#B5B5B5] shadow-sm border-b-2 p-3 " />
           </div>

           <div>
             <label class="block text-sm text-[#002168] font-medium mb-1">Email</label>
             <input type="email" placeholder="Email" class=" bg-white/60 w-full rounded-full  text-[#B5B5B5] border-[#B5B5B5] shadow-sm border-b-2 p-3 " />
           </div>

           <div>
             <label class="block text-sm text-[#002168] font-medium mb-1">Address</label>
             <textarea placeholder="Enter Address" rows="3" class=" bg-white/60 w-full rounded-xl  text-[#B5B5B5] border-[#B5B5B5] shadow-sm border-b-2 p-3 "></textarea>
           </div>
           <div class=" flex justify-center  mx-auto">
             <button type="button" class="bg-gradient-to-b from-[#0033A8] to-[#001442] text-white px-20 py-2 my-10 rounded-full font-medium hover:bg-blue-700 transition">Save </button>
           </div>
         </form>
       </div>
     </div>
   </section>

   <!-- company imformation-->
   <section class="my-10 mx-auto max-w-6xl">
     <div class="grid grid-cols-12 gap-10">
       <div class="col-span-8 bg-gradient-to-t from-white to-[#E5F6FF] shadow rounded-2xl p-8">
         <h2 class="text-xl font-semibold text-[#002168] mb-6">Company Information</h2>

         <form class="space-y-6">
           <div>
             <label class="block text-sm text-[#002168] font-medium mb-1">Company Name</label>
             <input type="text" placeholder="Full Name" class="bg-white/60 w-full rounded-full  text-[#B5B5B5] border-[#B5B5B5] shadow-sm border-b-2 p-3 " />
           </div>

           <div>
             <label class="block text-sm text-[#002168] font-medium mb-1 flex items-center gap-2">
               GST Number <span class="text-xs bg-green-500 text-white px-2 py-0.5 rounded-full">Verified</span>
             </label>
             <input type="text" value="29ABCDE1234F2Z5" disabled class="bg-white/60 w-full rounded-full  text-[#B5B5B5] border-[#B5B5B5] shadow-sm border-b-2 p-3  " />
             <p class="text-xs text-[#888888] mt-1">GST Number cannot be changed after verification</p>
           </div>

           <div>
             <label class="block text-sm text-[#002168] font-medium mb-1">Business Email</label>
             <input type="email" placeholder="Email" class="bg-white/60 w-full rounded-full  text-[#B5B5B5] border-[#B5B5B5] shadow-sm border-b-2 p-3 " />
           </div>

           <div>
             <label class="block text-sm text-[#002168] font-medium mb-1">Business Address</label>
             <input type="text" placeholder="Address" class="bg-white/60 w-full rounded-full  text-[#B5B5B5] border-[#B5B5B5] shadow-sm border-b-2 p-3 " />
           </div>
           <div class=" flex justify-center  mx-auto">
             <button type="button" class="bg-gradient-to-b from-[#0033A8] to-[#001442] text-white px-20 py-2 my-5 rounded-full font-medium hover:bg-blue-700 transition">Save </button>
           </div>
         </form>
       </div>
       <!--security-->
       <div class="col-span-4  ">
         <div class="bg-gradient-to-t from-white to-[#E5F6FF] shadow rounded-2xl p-10">
           <h2 class="text-xl font-semibold text-[#234693]">Security</h2>
           <div class="flex justify-between">
             <p class="text-lg text-black font-medium py-5">Change Password </p>
             <p class="text-black font-medium text-lg py-5"> > </p>
           </div>

         </div>
         <!--account-->
         <div class="bg-gradient-to-t from-white to-[#E5F6FF] mt-7 shadow rounded-2xl p-10">
           <h2 class="text-lg font-medium text-[#002168] mt-20">Account Status</h2>
           <div class="flex justify-between pt-5">
             <p class="text-sm font-normal text-[#595959] ">Member Since : </p>
             <p class="text-sm font-medium text-[#002168]">January 2024</p>
           </div>

           <div class="flex justify-between pt-5">
             <p class="text-sm font-normal text-[#595959] ">Total Bookings : </p>
             <p class="text-sm font-medium text-[#002168]">12</p>
           </div>
           <div class="flex justify-between pt-5">
             <p class="text-sm font-normal text-[#595959] ">Active Campaigns : </p>
             <p class="text-sm font-medium text-[#002168]">3</p>
           </div>
           <div class="flex justify-between pt-5 mb-20">
             <p class="text-sm font-normal text-[#595959] ">Account Status : </p>
             <p class="text-sm font-medium text-[#002168]">Verified</p>
           </div>
         </div>
       </div>
   </section>

   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="/user/js/poleads.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
   @endsection