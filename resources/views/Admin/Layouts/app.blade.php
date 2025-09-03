<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'Admin Panel')</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-gray-100">

  <div class="flex h-screen">
    <!-- Sidebar -->
    @include('Admin.layouts.sidebar')

    <!-- Content -->
    <div class="flex-1 flex flex-col">
      <!-- Header -->
      @include('Admin.layouts.header')

      <!-- Main Content -->
      <main class="p-6">
        @yield('content')
      </main>

      <!-- Footer -->
      @include('Admin.layouts.footer')
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    function toggleMenu() {
      const menu = document.getElementById("mobileMenu");
      menu.classList.toggle("-translate-x-full");
    }
  </script>
</body>
</html>
