@section('jasmin-content')
@extends('user.frontpage.main')
@include('user.frontpage.header')

<script src="https://cdn.tailwindcss.com"></script>

    <section class="my-20">
        <h1 class="text-xl font-medium font-sans text-[#002168] mb-1 mx-60 pt-10">Booking Summary</h1>
        <div class="bg-white shadow-xl rounded-3xl p-10 max-w-4xl mx-auto mt-10">

    <!-- Steps -->
    <div class="flex justify-between items-center mb-12 max-w-2xl mx-auto mt-6">

        <!-- Step 1 -->
        <div class="flex flex-col items-center">
            <div class="flex gap-3">
            <div class="w-10 h-10 rounded-full bg-green-500 flex items-center justify-center text-white text-xl">✔</div>
            <p class="text-green-600 text-sm mt-2 font-medium">Select Seats</p>
        </div>
        </div>
        <div class="border-dashed border-t border-green-400 w-20"></div>

        <!-- Step 2 -->
        <div class="flex flex-col items-center">
            <div class="flex gap-3">
            <div class="w-10 h-10 rounded-full bg-green-500 flex items-center justify-center text-white text-xl">✔</div>
            <p class="text-green-600 text-sm mt-2 font-medium">Choose Duration</p>
        </div>
        </div>
        <div class="border-dashed border-t border-gray-300 w-20"></div>

        <!-- Step 3 Active -->
        <div class="flex flex-col items-center">
            <div class="flex gap-3">
            <div class="w-10 h-10 rounded-full bg-[#1E63F2] flex items-center justify-center text-white text-xl">🧾</div>
            <p class="text-[#1E63F2] text-sm mt-2 font-medium">Review & Pay</p>
        </div>
        </div>
    </div>

    <!-- Booking Summary Title -->
    <h2 class="text-lg font-semibold text-gray-800 text-center mb-6">Booking Summary</h2>

    <!-- Summary Card -->
    <div class="border rounded-xl p-6 max-w-md mx-auto shadow-sm border-[#2B6FFF]">

        <div class="space-y-4 text-sm">

            <div class="flex justify-between">
                <p class="font-medium">Location :</p>
                <p class="font-semibold text-right">
                    Park Entrance<br>
                    <span class="text-xs text-gray-500">Ukkadam Lake</span>
                </p>
            </div>

            <div class="flex justify-between">
                <p class="font-medium">Banner Seats:</p>
                <p class="font-semibold">7</p>
            </div>

            <div class="flex justify-between">
                <p class="font-medium">Duration:</p>
                <p class="font-semibold">3 Months</p>
            </div>

            <hr>

            <div class="flex justify-between">
                <p class="font-medium">Base Rate :</p>
                <p class="font-semibold">$12,000/month</p>
            </div>

            <div class="flex justify-between">
                <p class="font-medium">Slots × Duration :</p>
                <p class="font-semibold">1 × 1</p>
            </div>

            <div class="flex justify-between">
                <p class="font-medium">Subtotal :</p>
                <p class="font-semibold">$12,000</p>
            </div>

            <div class="flex justify-between">
                <p class="font-medium">GST (18%) :</p>
                <p class="font-semibold">$2,160</p>
            </div>

            <hr>

            <div class="flex justify-between text-base font-semibold">
                <p class="text-[#3C83F6]">Total Amount :</p>
                <p class="text-[#3C83F6] text-lg font-bold">$128,250</p>
            </div>

        </div>
    </div>

    <!-- Button -->
    <div class="flex justify-center mt-10">
         <a href="{{ route('payment') }}"
         class="px-16 py-3 bg-gradient-to-b from-[#0033A8] to-[#001442] text-white font-medium rounded-full shadow hover:from-blue-800 hover:to-blue-950 transition">
            Proceed to Payment
</a>
        
    </div>

</div>

    </section>