 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

 </head>

 <body>
   <div class="home">
     @yield('jasmin-content')
   </div>
   <script src="https://cdn.tailwindcss.com"></script>
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

   <script src="/user/js/login.js"></script>
   <script>
     // Toggle mobile menu
     function toggleMenu() {
       const menu = document.getElementById('mobile-menu');
       menu.classList.toggle('hidden');
     }
   </script>
 </body>

 </html>