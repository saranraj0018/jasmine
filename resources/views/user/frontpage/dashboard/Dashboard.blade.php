    @section('jasmin-content')
    @extends('user.frontpage.main')
    @include('user.frontpage.header')

    <section class="  mt-20  md:mt-40 mx-auto max-w-6xl px-5">
        <h1 class=" text-lg md:text-2xl font-medium text-[#264795]">Welcome Back, Acme Corp !</h1>
        <p class="text-sm text-black mt-2 mb-6">Here's an overview of your advertising campaigns</p>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
            <!-- Booked Plots -->
            <div class="bg-[#FFEEF1] p-4 rounded-xl shadow-sm flex items-center justify-between">
                <div>
                    <p class="text-lg text-black font-medium">Booked Plots</p>
                    <div class="flex justify-between">
                        <h2 class="text-3xl mt-2 font-medium text-black">5</h2>
                        <img src="./img/image 65.png" class="" alt="location" />
                    </div>

                    <div class=" flex justify-center  mx-auto">
                        <button type="button" class="bg-gradient-to-b from-[#0033A8] to-[#001442] text-white text-sm px-3 py-2 mt-5 rounded-full font-medium hover:bg-blue-700 transition">Active advertising locations </button>
                    </div>
                </div>

            </div>

            <!-- Active Ads -->
            <div class="bg-[#EEF7FF] p-4 rounded-xl shadow-sm flex items-center justify-between">
                <div>
                    <p class="text-lg text-black font-medium">Active Ads</p>
                    <div class="flex justify-between">
                        <h2 class="text-3xl mt-2 font-medium text-black">3</h2>
                        <img src="./img/image 66 (1).png" class="" alt="location" />
                    </div>

                    <div class=" flex justify-center  mx-auto">
                        <button type="button" class="bg-gradient-to-b from-[#0033A8] to-[#001442] text-white text-sm px-3 py-2 mt-5 rounded-full font-medium hover:bg-blue-700 transition">Currently running campaigns </button>
                    </div>
                </div>

            </div>

            <!-- Amount Spend -->
            <div class="bg-[#FCFFD5] p-4 rounded-xl shadow-sm flex items-center justify-between">
                <div>
                    <p class="text-lg text-black font-medium">Amount Spend</p>
                    <div class="flex justify-between ">
                        <h2 class="text-3xl mt-2 font-medium text-black">$1,25,000</h2>
                        <img src="./img/image 67 (2).png" class="" alt="location" />
                    </div>

                    <div class=" flex justify-center  mx-auto">
                        <button type="button" class="bg-gradient-to-b from-[#0033A8] to-[#001442] text-white text-sm px-3 py-2 mt-5 rounded-full font-medium hover:bg-blue-700 transition">Total advertising investment </button>
                    </div>
                </div>

            </div>

            <!-- Next Payment -->
            <div class="bg-[#F0EBFF] p-4 rounded-xl shadow-sm flex items-center justify-between">
                <div>
                    <p class="text-lg text-black font-medium">Next Payment</p>
                    <div class="flex justify-between ">
                        <h2 class="text-3xl mt-2 font-medium text-black">15</h2>
                        <img src="./img/Group 35322.png" class="" alt="location" />
                    </div>

                    <div class=" flex justify-center  mx-auto">
                        <button type="button" class="bg-gradient-to-b from-[#0033A8] to-[#001442] text-white text-sm px-3 py-2 mt-5 rounded-full font-medium hover:bg-blue-700 transition">Untill next billing cycle </button>
                    </div>
                </div>

            </div>
    </section>

    <!-- Recent Bookings -->
    <section class="mx-auto max-w-6xl mt-5 mb-20 px-5">
        <h3 class="text-lg font-semibold text-[#264795] mb-4">Recent Bookings</h3>

        <div class="bg-[#F4F4F4] rounded-xl shadow-2xs py-3 px-5">
            <h5 class="text-black font-medium text-sm mt-2">Ukkadam Lake</h5>
            <div class="flex justify-between gap-2 md:gap-0">
                <p class="text-sm font-light text-black mt-3">3 months . Started 2024-01-15</p>
                <p class="text-sm text-white rounded-3xl mt-3 bg-[#1C356E] py-1  px-2 md:px-5 font-medium">Active</p>
            </div>
            <p class="text-sm font-light text-black">$45,000</p>

        </div>
        <div class="bg-[#F4F4F4] rounded-xl shadow-2xs py-3 px-5 mt-5">
            <h5 class="text-black font-medium text-sm mt-2">RS Puram Junction</h5>
            <div class="flex justify-between gap-2 md:gap-0">
                <p class="text-sm font-light text-black mt-3">6 months . Started 2024-01-15</p>
                <p class="text-sm text-white rounded-3xl mt-3 bg-[#1C356E] py-1 px-2 md:px-5 font-medium">Active</p>
            </div>
            <p class="text-sm font-light text-black">$80,000</p>

        </div>
        <div class="bg-[#F4F4F4] rounded-xl shadow-2xs py-3 px-5 mt-5">
            <h5 class="text-black font-medium text-sm mt-2">Peelamedu Flyover</h5>
            <div class="flex justify-between gap-2 md:gap-0">
                <p class="text-sm font-light text-black mt-3">9 months . Started 2024-01-15</p>
                <p class="text-sm text-white rounded-3xl mt-3 bg-[#1C356E] py-1 px-2 md:px-5 font-medium">Active</p>
            </div>
            <p class="text-sm font-light text-black">$90,000</p>

        </div>
        <div class="bg-[#F4F4F4] rounded-xl shadow-2xs py-3 px-5 mt-5">
            <h5 class="text-black font-medium text-sm mt-2">Ukkadam Lake</h5>
            <div class="flex justify-between gap-2 md:gap-0 ">
                <p class="text-sm font-light text-black mt-3">3 months . Started 2024-01-15</p>
                <p class="text-sm text-white rounded-3xl mt-3 bg-[#1C356E] py-1 px-2 md:px-5 font-medium">Active</p>
            </div>
            <p class="text-sm font-light text-black">$45,000</p>

        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/user/js/poleads.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    @endsection