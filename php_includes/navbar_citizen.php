<?php if (session_status() === PHP_SESSION_NONE) { session_start(); } ?>
<nav class="bg-blue-600 shadow-lg sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center h-16">
      <!-- Logo and Brand -->
      <div class="flex items-center">
        <a href="/dimplestar/index.php" class="flex items-center space-x-3">
          <img src="/dimplestar/images/logo.png" alt="Dimple Star" class="h-10 w-auto">
          <span class="text-white font-semibold text-lg">Dimple Star Transport</span>
        </a>
      </div>

      <!-- Desktop Navigation -->
      <div class="hidden md:block">
        <div class="ml-10 flex items-baseline space-x-4">
          <a href="/dimplestar/index.php" class="text-white hover:bg-blue-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">Home</a>
          <a href="/dimplestar/about.php" class="text-white hover:bg-blue-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">About</a>
          <a href="/dimplestar/route1.php" class="text-white hover:bg-blue-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">Route 1</a>
          <a href="/dimplestar/route2.php" class="text-white hover:bg-blue-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">Route 2</a>
          <a href="/dimplestar/route3.php" class="text-white hover:bg-blue-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">Route 3</a>
          <a href="/dimplestar/routes.php" class="text-white hover:bg-blue-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">Routes</a>
        </div>
      </div>

      <!-- User Menu -->
      <div class="hidden md:block">
        <div class="ml-4 flex items-center md:ml-6">
          <?php if(isset($_SESSION['email'])): ?>
            <div class="relative">
              <button class="bg-blue-700 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-blue-600 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                <span class="sr-only">Open user menu</span>
                <div class="h-8 w-8 rounded-full bg-blue-500 flex items-center justify-center">
                  <span class="text-white text-sm font-medium"><?php echo strtoupper(substr(htmlspecialchars($_SESSION['email']), 0, 1)); ?></span>
                </div>
              </button>
              <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button">
                <a href="/dimplestar/logout.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Logout</a>
              </div>
            </div>
          <?php else: ?>
            <a href="/dimplestar/signlog.php" class="bg-blue-700 hover:bg-blue-800 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors duration-200">
              Sign In
            </a>
          <?php endif; ?>
        </div>
      </div>

      <!-- Mobile menu button -->
      <div class="md:hidden">
        <button type="button" class="bg-blue-600 inline-flex items-center justify-center p-2 rounded-md text-white hover:text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false" id="mobile-menu-button">
          <span class="sr-only">Open main menu</span>
          <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile menu -->
  <div class="md:hidden hidden" id="mobile-menu">
    <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-blue-700">
      <a href="/dimplestar/index.php" class="text-white hover:bg-blue-600 block px-3 py-2 rounded-md text-base font-medium">Home</a>
      <a href="/dimplestar/about.php" class="text-white hover:bg-blue-600 block px-3 py-2 rounded-md text-base font-medium">About</a>
      <a href="/dimplestar/route1.php" class="text-white hover:bg-blue-600 block px-3 py-2 rounded-md text-base font-medium">Route 1</a>
      <a href="/dimplestar/route2.php" class="text-white hover:bg-blue-600 block px-3 py-2 rounded-md text-base font-medium">Route 2</a>
      <a href="/dimplestar/route3.php" class="text-white hover:bg-blue-600 block px-3 py-2 rounded-md text-base font-medium">Route 3</a>
      <a href="/dimplestar/routes.php" class="text-white hover:bg-blue-600 block px-3 py-2 rounded-md text-base font-medium">Routes</a>
      <?php if(!isset($_SESSION['email'])): ?>
        <a href="/dimplestar/signlog.php" class="text-white hover:bg-blue-600 block px-3 py-2 rounded-md text-base font-medium">Sign In</a>
      <?php else: ?>
        <a href="/dimplestar/logout.php" class="text-white hover:bg-blue-600 block px-3 py-2 rounded-md text-base font-medium">Logout</a>
      <?php endif; ?>
    </div>
  </div>
</nav>

<script>
// Mobile menu toggle
document.getElementById('mobile-menu-button').addEventListener('click', function() {
  const mobileMenu = document.getElementById('mobile-menu');
  mobileMenu.classList.toggle('hidden');
});

// User dropdown toggle
document.getElementById('user-menu-button').addEventListener('click', function() {
  const userMenu = this.nextElementSibling;
  userMenu.classList.toggle('hidden');
});

// Close dropdowns when clicking outside
document.addEventListener('click', function(event) {
  const userMenuButton = document.getElementById('user-menu-button');
  const userMenu = userMenuButton?.nextElementSibling;
  
  if (userMenuButton && !userMenuButton.contains(event.target) && userMenu && !userMenu.contains(event.target)) {
    userMenu.classList.add('hidden');
  }
});
</script>
