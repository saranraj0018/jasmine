 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>
<body>
<div class="home">
     @yield('jasmin-content')
</div>
<script src="https://cdn.tailwindcss.com"></script>
  <script>
    // Toggle mobile menu
    function toggleMenu() {
      const menu = document.getElementById('mobile-menu');
      menu.classList.toggle('hidden');
    }
  </script>
</body>
</html>