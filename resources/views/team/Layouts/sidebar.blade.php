{{-- Sidebar for Team Member --}}
<aside class="w-64 bg-gray-900 text-white hidden md:block">
  <div class="p-4 text-xl font-bold border-b border-gray-700">Team Panel</div>
  <nav class="p-4">
    <a href="{{ route('team.dashboard') }}" class="block py-2 px-4 rounded hover:bg-gray-700">
      Dashboard
    </a>
    <a href="{{ route('team.services') }}" class="block py-2 px-4 rounded hover:bg-gray-700">
      My Booked Services
    </a>
    <a href="{{ route('team.totalServices') }}" class="block py-2 px-4 rounded hover:bg-gray-700">
      Total Services
    </a>
    <a href="{{ route('team.performance') }}" class="block py-2 px-4 rounded hover:bg-gray-700">
      Performance
    </a>
    <a href="{{ route('logout') }}" class="block py-2 px-4 rounded hover:bg-gray-700">
      Logout
    </a>
  </nav>
</aside>

<!-- Mobile Sidebar -->
<div id="mobileMenu" class="fixed inset-0 bg-gray-900 text-white w-64 transform -translate-x-full transition-transform duration-300 md:hidden z-50">
  <div class="p-4 text-xl font-bold border-b border-gray-700 flex justify-between">
    <span>Team Panel</span>
    <button onclick="toggleMenu()">✖</button>
  </div>
  <nav class="p-4">
    <a href="{{ route('team.dashboard') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Dashboard</a>
    <a href="{{ route('team.services') }}" class="block py-2 px-4 rounded hover:bg-gray-700">My Booked Services</a>
    <a href="{{ route('team.totalServices') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Total Services</a>
    <a href="{{ route('team.performance') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Performance</a>
    <a href="{{ route('logout') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Logout</a>
  </nav>
</div>
