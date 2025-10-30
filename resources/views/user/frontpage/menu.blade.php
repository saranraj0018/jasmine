  <header class="fixed top-0 w-full z-50">
    <div class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between">
      
      <!-- Logo -->
      <div class="flex items-center ">
        <img src="./img/jasmin logo.png" class="lg:w-[10em] md:w-[5em] w-[5em] mt-[-13px]" alt="logo">
      </div>

      <!-- Desktop Menu -->
      <nav class="hidden md:flex items-center space-x-2 bg-white/100 rounded-full px-2 py-1 shadow-sm">
        <a href="#" class="px-4 py-2 text-xs font-medium text-gray-700 hover:text-indigo-700 hover:bg-white rounded-full transition">Home</a>
        <a href="#" class="px-4 py-2 text-xs font-medium text-gray-700 hover:text-indigo-700 hover:bg-white rounded-full transition">About Us</a>
        <a href="#" class="px-4 py-2 text-xs font-medium text-gray-700 hover:text-indigo-700 hover:bg-white rounded-full transition">Services</a>
        <a href="#" class="px-4 py-2 text-xs font-medium text-gray-700 hover:text-indigo-700 hover:bg-white rounded-full transition">Contact</a>
        <a href="#" class="px-4 py-2 text-xs font-medium text-gray-700 hover:text-indigo-700 hover:bg-white rounded-full transition">Profile</a>
      </nav>

      <!-- Desktop Buttons -->
      <div class="hidden md:flex items-center space-x-3">
        <button class="bg-white text-gray-800 text-xs px-5 py-2 rounded-full shadow bg-white/100 hover:bg-gray-100 transition">Login</button>
        <button class="bg-gradient-to-r from-blue-700 text-xs to-indigo-800 text-white px-5 py-2 rounded-full shadow hover:opacity-90 transition">Sign Up</button>
      </div>

      <!-- Mobile Menu Button -->
      <button onclick="toggleMenu()" class="md:hidden focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-indigo-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white/90 backdrop-blur-md shadow-inner">
      <nav class="flex flex-col items-center py-3 space-y-2">
        <a href="#" class="text-gray-700 hover:text-indigo-700 transition">Home</a>
        <a href="#" class="text-gray-700 hover:text-indigo-700 transition">About Us</a>
        <a href="#" class="text-gray-700 hover:text-indigo-700 transition">Services</a>
        <a href="#" class="text-gray-700 hover:text-indigo-700 transition">Contact</a>
        <a href="#" class="text-gray-700 hover:text-indigo-700 transition">Profile</a>
        <div class="flex space-x-3 pt-2">
          <button class="bg-white text-gray-800 px-5 py-2 rounded-full shadow hover:bg-gray-100 transition">Login</button>
          <button class="bg-gradient-to-r from-blue-700 to-indigo-800 text-white px-5 py-2 rounded-full shadow hover:opacity-90 transition">Sign Up</button>
        </div>
      </nav>
    </div>
  </header>