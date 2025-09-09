<header class="bg-amber-800 text-white shadow-md sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-6 flex items-center justify-between h-[90px]">

    <!-- Logo / Brand -->
    <h1 class="text-2xl font-extrabold tracking-wide cursor-pointer hover:text-amber-200 transition">
      Listo<span class="text-amber-400">Notes</span>
    </h1>

    <!-- Desktop Nav -->
    <nav class="hidden md:flex space-x-6 text-lg font-medium items-center justify-center">
      <a href="/" class="hover:text-amber-300 transition">Home</a>
      <a href="/login" class="hover:text-amber-300 transition">Login</a>
      <a href="/register" class="bg-amber-600 px-4 py-2 rounded-md hover:bg-amber-500 transition">
        Register
      </a>
    </nav>

    <!-- Mobile Menu Button -->
    <button id="menu-btn" class="md:hidden flex flex-col space-y-1">
      <span class="block w-6 h-0.5 bg-white"></span>
      <span class="block w-6 h-0.5 bg-white"></span>
      <span class="block w-6 h-0.5 bg-white"></span>
    </button>

  </div>

  <!-- Mobile Nav -->
  <nav id="mobile-menu" class="hidden flex-col items-center bg-amber-700 md:hidden pb-4 space-y-4 text-lg h-[90vh]">
    <a href="/" class="hover:text-amber-300 transition">Home</a>
    <a href="/login" class="hover:text-amber-300 transition">Login</a>
    <a href="/register" class="bg-amber-600 px-4 py-2 rounded-xl hover:bg-amber-500 transition">
      Register
    </a>
  </nav>
</header>

<script>
  const menuBtn = document.getElementById("menu-btn");
  const mobileMenu = document.getElementById("mobile-menu");

  menuBtn.addEventListener("click", () => {
    mobileMenu.classList.toggle("hidden");
  });
</script>
