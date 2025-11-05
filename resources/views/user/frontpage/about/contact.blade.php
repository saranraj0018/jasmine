 @extends('user.frontpage.main')

 @section('jasmin-content')
 @include('user.frontpage.header')
 <script src="/user/js/about.js"></script>

 <!--banner section-->

 <section>

     <img id="bannerImage" src="./img/contact banner.png" class="w-full cursor-pointer" alt="banner">

 </section>

 <!--form section-->
 <section class="">
     <h2 class="text-sans font-medium text-[#234693] text-lg px-20 pt-7">Booking Summary</h2>
     <div class="max-w-6xl mx-auto bg-white rounded-2xl shadow-xl overflow-hidden mt-10 grid md:grid-cols-2">

         <!-- Left Section -->
         <div class="bg-[url('./img/contact1.png')] bg-cover bg-no-repeat rounded-2xl text-white p-10 flex flex-col justify-center">
             <h2 class="text-3xl font-semibold font-sans text-white mb-8">Need a Quick Query?</h2>

             <!-- Contact Number -->
             <div class="flex items-start gap-4 mb-8">
                 <img src="./img/phone1.png" class="" alt="phone" />
                 <div>
                     <h4 class="font-semibold text-white font-sans text-lg">Contact Number</h4>
                     <p class="text-sm text-white font-normal font-sans opacity-90">+91 98422 66161<br>+91 73737 66161</p>
                 </div>
             </div>

             <!-- Email -->
             <div class="flex items-start gap-4 mb-8">
                 <img src="./img/mail1.png" class="" alt="mail" />
                 <div>
                     <h4 class="font-semibold text-white font-sans text-lg">Our Mail</h4>
                     <p class="text-sm text-white font-normal font-sans opacity-90">jasmineadvertising2014@gmail.com</p>
                 </div>
             </div>

             <!-- Location -->
             <div class="flex items-start gap-4">
                 <img src="./img/location1.png" class="" alt="location" />
                 <div>
                     <h4 class="font-semibold text-white font-sans text-lg">Our Location</h4>
                     <p class="text-sm text-white font-normal font-sans opacity-90 leading-snug">
                         No – 53, Vasanth Nagar, Opp to Uzhavar Santhai,<br>
                         Near Chemmozhi Park,<br>
                         Singanallur, Coimbatore - 641005
                     </p>
                 </div>
             </div>
         </div>

         <!-- Right Section (Form) -->
         <div class="p-10">
             <div class="text-center mb-8">
                 <p class="text-sm texx-black font-sans font-normal">Leave us Message</p>
                 <h2 class="text-xl font-semibold  font-sans text-[#0033A8] pt-2">How May We Help You !</h2>
             </div>

             <form id="contactForm" class="space-y-4">
                 <h2 class="text-lg font-sans font-normal text-[#002168]">Full Name</h2>
                 <input type="text" id="name" placeholder="Full Name" class="w-full p-3 border-b-2 border-[#B5B5B5] rounded-full">
                 <h2 class="text-lg font-sans font-normal text-[#002168]">Phone Number</h2>
                 <input type="text" id="phone" placeholder="Phone Number" class="w-full p-3 border-b-2 border-[#B5B5B5]  rounded-full ">
                 <h2 class="text-lg font-sans font-normal text-[#002168]">Email</h2>
                 <input type="email" id="email" placeholder="Email" class="w-full p-3 rounded-full border-b-2 border-[#B5B5B5] ">
                 <h2 class="text-lg font-sans font-normal text-[#002168]">Subject</h2>
                 <textarea id="subject" placeholder="Write a Subject" class="w-full p-3 h-28 rounded-xl border-b-2 border-[#B5B5B5] "></textarea>
                 <div class=" flex mx-auto justify-center">
                     <button type="submit" class="w-full md:w-auto px-20 py-3 mt-5 bg-gradient-to-b from-[#0033A8] to-[#001442] text-white rounded-full font-semibold hover:opacity-90">
                         Send Message
                     </button>
                 </div>
             </form>
         </div>
     </div>
 </section>

 @include('user.frontpage.footer')