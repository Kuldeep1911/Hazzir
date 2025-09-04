<header class="bg-white shadow px-4 py-3 flex justify-between items-center">
  <!-- Left: Hamburger + Title -->
  <div class="flex items-center space-x-4">
    <!-- Mobile Menu Button -->
    <button onclick="toggleMenu()" class="md:hidden text-2xl focus:outline-none">
      ☰
    </button>
    <h1 class="text-lg md:text-xl font-bold">@yield('page-title', 'Dashboard')</h1>
  </div>

  <!-- Right: Admin Info -->
  <div class="relative">
    <button onclick="toggleProfile()" class="flex items-center space-x-2 focus:outline-none">
      <span class="hidden sm:inline text-gray-600">Admin</span>
      <img src="https://via.placeholder.com/32" alt="avatar" class="w-8 h-8 rounded-full">
    </button>

    <!-- Dropdown (visible on click) -->
    <div id="profileMenu" class="hidden absolute right-0 mt-2 w-40 bg-white rounded-lg shadow-lg border">
      <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profile</a>
      <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Settings</a>
        <a href="{{route('logout')}}" class="block px-4 py-2 text-danger text-gray-700 hover:bg-gray-100">Logout</a>
    </div>
  </div>
</header>

<script>
  function toggleMenu() {
    alert("Sidebar toggle here"); // Replace with your sidebar logic
  }

  function toggleProfile() {
    const menu = document.getElementById("profileMenu");
    menu.classList.toggle("hidden");
  }
</script>
