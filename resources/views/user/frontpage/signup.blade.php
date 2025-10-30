 
  <div id="popupContainer"
    class=" h-[80vh]  fixed w-full z-50 flex items-center justify-center">
    <div class="bg-gradient-to-t from-[#ffffff] to-[#E5F6FF]  p-5 rounded-3xl mx-auto w-1/2 opacity-100 relative">
      <h2 class="lg:text-xl md:text-xl text-sm font-semibold font-[Inter] text-center bg-gradient-to-t from-[#0033A8] to-[#001442] bg-clip-text text-transparent mb-4">Create Account</h2>
       <p class="text-sm font-normal font-[Inter] text-black text-center">Join BannerBook and start advertising</p>
     
       <form>
        <div class="mb-3 mt-5 ">
          <i class=" fa fa-user text-sm font-medium text-[#1C356E] mb-1 ">    Full Name</i>
          <input type="Full Name" placeholder="Enter Your Full Name" class="w-full border text-sm font-light text-black border-gray-300 bg-[#254693] opacity-10 rounded-3xl px-3 py-2" required>
        </div>
        <div class="mb-3  ">
          <i class=" fa fa-building  text-sm font-medium text-[#1C356E] mb-1 ">    Company Name</i>
          <input type="Company Name" placeholder="Enter Your Company Name" class="w-full border text-sm font-light text-black border-gray-300 bg-[#254693] opacity-10 rounded-3xl px-3 py-2" required>
        </div>
        <div class="mb-3  ">
          <i class=" fa fa-file-lines  text-sm font-medium text-[#1C356E] mb-1 ">    GST Number</i>
          <input type="GST Number" placeholder="Enter Your GST Number" class="w-full border text-sm font-light text-black border-gray-300 bg-[#254693] opacity-10 rounded-3xl px-3 py-2" required>
        </div>
        <div class="mb-3  ">
          <i class=" fa fa-envelope  text-sm font-medium text-[#1C356E] mb-1 ">    Email</i>
          <input type="Email" placeholder="Enter Your Email" class="w-full border text-sm font-light text-black border-gray-300 bg-[#254693] opacity-10 rounded-3xl px-3 py-2" required>
        </div>
         <div class="mb-3  ">
          <i class=" fa fa-phone text-sm font-medium text-[#1C356E] mb-1 ">   Phone Number</i>
          <input type="Phone Number" placeholder="Enter Your Phone Number" class="w-full border text-sm font-light text-black border-gray-300 bg-[#254693] opacity-10 rounded-3xl px-3 py-2" required>
        </div>
        <div class="mb-3  ">
          <i class=" fa fa-lock  text-sm font-medium text-[#1C356E] mb-1 ">  Password</i>
          <input type="Password" placeholder="Enter Your Password" class="w-full border text-sm font-light text-black border-gray-300 bg-[#254693] opacity-10 rounded-3xl px-3 py-2" required>
        </div>
        <div class="mb-3  ">
          <i class=" fa fa-lock  text-sm font-medium text-[#1C356E] mb-1 ">  Confirm Password</i>
          <input type="Confirm Password" placeholder="Confirm Password" class="w-full border text-sm font-light text-black border-gray-300 bg-[#254693] opacity-10 rounded-3xl px-3 py-2" required>
        </div>
        
        <div class="flex justify-center">
        <button type="button"
  class="w-[10rem] bg-gradient-to-b from-[#0033A8] to-[#001442] text-white lg:text-xl md:text-xl text-sm font-medium  rounded-3xl py-2  hover:opacity-90 transition">
  Create Account
</button>
        </div>
        <p class="text-center lg:text-sm md:text-sm text-xs text-black font-normal my-3">Already have an account? Login here</a></p>

        </div>
      </form>

      <!-- ❌ Close button -->
      <button id="closePopup"
        class="absolute top-3 right-5 text-2xl text-gray-600 hover:text-gray-800">&times;</button>
    </div>
  </div>