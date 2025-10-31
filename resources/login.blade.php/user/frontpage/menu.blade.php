<header class="fixed top-0 w-full z-10 bg-white shadow-sm">
  <div class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between">

    <!-- Logo -->
    <div class="flex items-center">
      <img src="{{ asset('img/jasmin logo.png') }}" class="lg:w-[10em] md:w-[5em] w-[5em] -mt-3" alt="logo">
    </div>

    <!-- Desktop Menu -->
    <nav class="hidden md:flex items-center space-x-2 bg-white rounded-full px-2 py-1 shadow-sm">
      <a href="{{ url('/') }}" class="px-4 py-2 text-xs font-medium text-gray-700 hover:text-indigo-700 rounded-full transition">Home</a>
      <a href="#about" class="px-4 py-2 text-xs font-medium text-gray-700 hover:text-indigo-700 rounded-full transition">About Us</a>
      <a href="#services" class="px-4 py-2 text-xs font-medium text-gray-700 hover:text-indigo-700 rounded-full transition">Services</a>
      <a href="#contact" class="px-4 py-2 text-xs font-medium text-gray-700 hover:text-indigo-700 rounded-full transition">Contact</a>
      <a href="{{ route('menu') }}" class="px-4 py-2 text-xs font-medium text-gray-700 hover:text-indigo-700 rounded-full transition">Profile</a>
    </nav>

    <!-- Desktop Buttons -->
    <div class="hidden md:flex items-center space-x-3">
      <button id="togglePopup"
        class="bg-white text-gray-800 px-5 py-2 rounded-full shadow hover:bg-gray-100 transition">
        Login
      </button>
      <a href="{{ route('register') }}" 
        class="bg-linear-to-r from-blue-700 to-indigo-800 text-xs text-white px-5 py-2 rounded-full shadow hover:opacity-90 transition">
        Sign Up
      </a>
    </div>

    <!-- Mobile Menu Button -->
    <button onclick="toggleMenu()" class="md:hidden focus:outline-none">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-indigo-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="hidden md:hidden bg-white/90 backdrop-blur-md shadow-inner">
    <nav class="flex flex-col items-center py-3 space-y-2">
      <a href="{{ url('/') }}" class="text-gray-700 hover:text-indigo-700 transition">Home</a>
      <a href="#about" class="text-gray-700 hover:text-indigo-700 transition">About Us</a>
      <a href="#services" class="text-gray-700 hover:text-indigo-700 transition">Services</a>
      <a href="#contact" class="text-gray-700 hover:text-indigo-700 transition">Contact</a>
      <a href="{{ route('menu') }}" class="text-gray-700 hover:text-indigo-700 transition">Profile</a>

      <div class="flex space-x-3 pt-2">
        <button id="loginBtn" class="px-5 py-2 bg-white text-gray-800 rounded-full hover:bg-gray-100 transition">
          Login
        </button>
        <a href="{{ route('register') }}"
          class="bg-linear-to-r from-blue-700 to-indigo-800 text-white px-5 py-2 rounded-full shadow hover:opacity-90 transition">
          Sign Up
        </a>
      </div>
    </nav>
  </div>
</header>

<!-- Login Modal -->
<div id="loginModal"
  class="hidden fixed inset-0 bg-[#0000008a] flex items-center justify-center z-50">
  <div class="bg-linear-to-t from-[#ffffff] to-[#E5F6FF] p-6 rounded-3xl w-[90%] md:w-1/2 relative shadow-xl">

    <!-- Close Button -->
    <button id="closeModal" class="absolute top-3 right-3 text-gray-500 hover:text-gray-700 text-2xl">&times;</button>

    <h2 class="text-2xl font-bold text-center bg-linear-to-t from-[#0033A8] to-[#001442] bg-clip-text text-transparent mb-4">
      WELCOME BACK
    </h2>
    <p class="text-center text-sm text-gray-700 mb-4">Login to your Banner Book account</p>

    <form action="{{ route('menu') }}" method="POST" class="space-y-4">
      @csrf
      <div class="mb-3 mt-5">
        <label class="block text-sm font-medium text-[#1C356E] mb-1">Email</label>
        <input type="email" placeholder="Enter Your Email"
          class="w-full border text-sm font-light text-black border-gray-300 bg-white rounded-3xl px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
          required>
      </div>

      <div class="mb-3">
        <label class="block text-sm font-medium text-[#1C356E] mb-1">Password</label>
        <input type="password" placeholder="Enter Your Password"
          class="w-full border text-sm font-light text-black border-gray-300 bg-white rounded-3xl px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
          required>
      </div>

      <a href="{{ route('password.request') }}" class="text-xs font-normal text-end block text-[#1C356E]">Forgot Password?</a>

      <div class="flex justify-center">
        <button type="submit"
          class="w-[10rem] bg-linear-to-b from-[#0033A8] to-[#001442] text-white text-sm font-medium rounded-3xl py-2 hover:opacity-90 transition">
          Login
        </button>
      </div>

      <p class="text-center text-xs text-black font-normal my-3">
        Don’t have an account? 
        <a href="{{ route('register') }}" class="text-xs text-indigo-700 font-medium">Sign up here</a>
      </p>
    </form>
  </div>
</div>
