 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="home">
     @yield('jasmin-content')
</div>
<script src="https://cdn.tailwindcss.com"></script>
<script src="./user.js.login.js"></script>
  <script>
    // Toggle mobile menu
    function toggleMenu() {
      const menu = document.getElementById('mobile-menu');
      menu.classList.toggle('hidden');
    }
  </script>
</body>
</html>