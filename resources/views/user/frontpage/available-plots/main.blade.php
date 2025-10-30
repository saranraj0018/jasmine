 @extends('user.frontpage.main')
 @section('jasmin-content')
 <section class=" py-10 mx-auto max-w-7xl">
 <section class="max-w-7xl mx-auto px-4 py-6">
  <!-- 🟦 Section Header -->
  <h2 class="text-xl font-semibold text-[#234693] mb-1">Available Plots</h2>  
  <p class="text-sm font-light text-black mb-4">
    Browse and book advertising banner plots across the city
  </p>

  <!--  Grid Layout -->
  <div class="grid grid-cols-12 items-center gap-4">
    
    <!--  Search Bar -->
    <div class="col-span-12 md:col-span-8">
      <div class="relative w-full rounded-3xl px-3 py-3 rounded-3xl">
        <i class="fa fa-search absolute left-6 top-1/2 transform -translate-y-1/2  text-gray-400"></i>
        <input 
          type="text" 
          placeholder="Search by location or plot name" 
          class="w-full text-sm font-medium text-gray-700 border border-gray-300 rounded-full py-2 pl-10 pr-4 focus:outline-none focus:ring-2 focus:ring-[#0033A8]" 
        />
      </div>
    </div>

    <!--  Placeholder for other content -->
    <div class="col-span-12 md:col-span-4 flex justify-end">
      <i class="fa fa-fitler"></i>
    </div>
  </div>
</section>

 </section>
 <!--section2-->
  <section class="py-5 max-w-7xl lg:px-12 md:px-5 px-5">
        <div class="grid grid-cols-12 lg:gap-7 md:gap-4 gap-5">
            <div class=" col-span-12 lg:col-span-4 md:col-span-4  bg-[#EEF7FF] py-3 px-3 md:py-5 px-5 rounded-2xl ">
                <div class="flex justify-between gap-0">
                    <h3 class="lg:text-xl  text-sm font-[Inter] font-medium text-[#234693]">Ukkadam Lake</h3>
                    <div class="flex items-center space-x-2 bg-green-200 text-green-700 px-3 py-1 rounded-full w-fit">
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
                    <button
                        class="bg-gradient-to-b from-[#0033A8] to-[#001442] text-white lg:text-sm text-xs font-medium font-['Inter']  lg:px-20 px-10 lg:my-3  lg:py-2 py-3 rounded-full shadow-md hover:opacity-90 transition  ">
                        Book Now
                    </button>
                </div>

            </div>
            <div class=" col-span-12 lg:col-span-4 md:col-span-4  bg-[#EEF7FF] py-3 px-3 md:py-5 px-5 rounded-2xl ">
                <div class="flex justify-between gap-0">
                    <h3 class="lg:text-xl  text-sm font-[Inter] font-medium text-[#234693]">RS Puram Junction</h3>
                    <div class="flex items-center space-x-2 bg-green-200 text-green-700 px-3 py-1 rounded-full w-fit">
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
                    <button
                        class="bg-gradient-to-b from-[#0033A8] to-[#001442] text-white lg:text-sm text-xs font-medium font-['Inter']  lg:px-20 px-10 lg:my-3  lg:py-2 py-3 rounded-full shadow-md hover:opacity-90 transition  ">
                        Book Now
                    </button>
                </div>

            </div>
           <div class=" col-span-12 lg:col-span-4 md:col-span-4 bg-[#EEF7FF] py-3 px-3 md:py-5 px-5 rounded-2xl ">
                <div class="flex justify-between gap-0">
                    <h3 class="lg:text-xl  text-sm font-[Inter] font-medium text-[#234693]">Gandhipuram Signal</h3>
                    <div class="flex items-center space-x-2 bg-green-200 text-green-700 px-3 py-1 rounded-full w-fit">
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
                    <button
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
                    <div class="flex items-center space-x-2 bg-green-200 text-green-700 px-3 py-1 rounded-full w-fit">
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
                    <button
                        class="bg-gradient-to-b from-[#0033A8] to-[#001442] text-white lg:text-sm text-xs font-medium font-['Inter']  lg:px-20 px-10 lg:my-3  lg:py-2 py-3 rounded-full shadow-md hover:opacity-90 transition  ">
                        Book Now
                    </button>
                </div>

            </div>
            <div class=" col-span-12 lg:col-span-4 md:col-span-4  bg-[#EEF7FF] py-3 px-3 md:py-5 px-5 rounded-2xl ">
                <div class="flex justify-between gap-0">
                    <h3 class="lg:text-xl  text-sm font-[Inter] font-medium text-[#234693]">RS Puram Junction</h3>
                    <div class="flex items-center space-x-2 bg-green-200 text-green-700 px-3 py-1 rounded-full w-fit">
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
                    <button
                        class="bg-gradient-to-b from-[#0033A8] to-[#001442] text-white lg:text-sm text-xs font-medium font-['Inter']  lg:px-20 px-10 lg:my-3  lg:py-2 py-3 rounded-full shadow-md hover:opacity-90 transition  ">
                        Book Now
                    </button>
                </div>

            </div>
           <div class=" col-span-12 lg:col-span-4 md:col-span-4 bg-[#EEF7FF] py-3 px-3 md:py-5 px-5 rounded-2xl ">
                <div class="flex justify-between gap-0">
                    <h3 class="lg:text-xl  text-sm font-[Inter] font-medium text-[#234693]">Ukkadam Lake</h3>
                    <div class="flex items-center space-x-2 bg-green-200 text-green-700 px-3 py-1 rounded-full w-fit">
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
                    <button
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
                    <div class="flex items-center space-x-2 bg-green-200 text-green-700 px-3 py-1 rounded-full w-fit">
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
                    <button
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
 @endsection