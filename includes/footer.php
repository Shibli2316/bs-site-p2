<footer class="bg-gray-50 text-gray-600 border-t border-gray-200">
  <div class="flex flex-wrap justify-around items-start max-w-5xl mx-auto py-10 px-5">
    <!-- Logo Section -->
    <div class="flex items-center gap-4 mb-8">
      <img src="assets/web/logo.png" alt="Bahujan Scholars Logo" class="w-12 h-12">
      <div>
        <h3 class="text-xl text-blue-500 font-bold">Bahujan Scholars</h3>
        <p class="text-sm text-gray-600 mt-2">Mentoring for social transformation.</p>
      </div>
    </div>

    <!-- Quick Links -->
    <div class="mb-8">
      <h4 class="text-lg text-blue-500 font-semibold mb-4">Quick Links</h4>
      <ul class="space-y-2">
        <li><a href="index.php" class="text-gray-600 hover:text-blue-500 text-sm">Home</a></li>
        <li><a href="about.php" class="text-gray-600 hover:text-blue-500 text-sm">About</a></li>
        <li><a href="event.php" class="text-gray-600 hover:text-blue-500 text-sm">Events</a></li>
        <li><a href="program.php" class="text-gray-600 hover:text-blue-500 text-sm">Programs</a></li>
        <li><a href="auth/login.php" class="text-gray-600 hover:text-blue-500 text-sm">Mentoring</a></li>
      </ul>
    </div>

    <!-- Social Links -->
    <div class="mb-8 text-center sm:text-left">
      <h4 class="text-lg text-blue-500 font-semibold mb-4">Follow Us</h4>
      <ul class="flex justify-center sm:justify-start gap-4 mb-4">
        
        <li>
          <a href="https://www.youtube.com/@BahujanScholars-up6ek" target="_blank"
            class="text-gray-600 text-xl hover:text-blue-500 transition">
            <i class="fab fa-youtube text-red-600 hover:text-red-800"></i>
          </a>
        </li>
      </ul>
      <h4 class="text-lg text-blue-500 font-semibold">Contact</h4>
      <a href="mailto:bahujanscholars.org@gmail.com" class="text-sm text-gray-700 hover:text-blue-500">
        bahujanscholars.org@gmail.com
      </a>
      <a href="feedback.php"><p class="text-lg text-blue-500 font-semibold mb-4 mt-4">Give your feedback</p></a>
    </div>
  </div>

  <div class="text-center py-4 border-t border-gray-200">
    <p class="text-sm text-gray-500">
      &copy; 2024 <a href="https://github.com/shibli2316/" class="text-blue-500 hover:underline">Shibli</a>. All rights
      reserved.
    </p>
  </div>
</footer>

<script>
  const menuToggle = document.getElementById('menu-toggle');
  const menu = document.getElementById('menu');

  menuToggle.addEventListener('click', () => {
    menu.classList.toggle('hidden'); // Show/hide the menu
    menu.classList.toggle('animate-dropdown'); // Add animation
  });







  // Mobile Menu Dropdown Handling
  const dropdownButtons = [
    document.getElementById("dropdownButton1"),
  ];
  const dropdownMenus = [
    document.getElementById("dropdownMenu1"),
    
  ];

  dropdownButtons.forEach((button, index) => {
    button.addEventListener("click", () => {
      // Close all other dropdowns
      dropdownMenus.forEach((menu, i) => {
        if (i !== index) menu.classList.add("hidden");
      });

      // Toggle the current dropdown
      dropdownMenus[index].classList.toggle("hidden");

      // Add overlay if on mobile view
      if (!dropdownMenus[index].classList.contains("hidden")) {
        addOverlay();
      } else {
        removeOverlay();
      }
    });
  });

  // Close dropdowns when clicking outside
  document.addEventListener("click", (event) => {
    const isDropdown = dropdownButtons.some((button) => button.contains(event.target));
    const isMenu = dropdownMenus.some((menu) => menu.contains(event.target));
    if (!isDropdown && !isMenu) {
      dropdownMenus.forEach((menu) => menu.classList.add("hidden"));
      removeOverlay();
    }
  });

  // Add overlay for mobile view
  function addOverlay() {
    if (!document.querySelector(".mobile-overlay")) {
      const overlay = document.createElement("div");
      overlay.className = "mobile-overlay";
      document.body.appendChild(overlay);

      // Close dropdowns if overlay is clicked
      overlay.addEventListener("click", () => {
        dropdownMenus.forEach((menu) => menu.classList.add("hidden"));
        removeOverlay();
      });
    }
  }

  // Remove overlay
  function removeOverlay() {
    const overlay = document.querySelector(".mobile-overlay");
    if (overlay) overlay.remove();
  }

</script>

<style>
  /* Dropdown animation */
  #menu.animate-dropdown {
    animation: dropdown 0.3s ease-in-out forwards;
  }

  @keyframes dropdown {
    from {
      opacity: 0;
      transform: translateY(-20px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
</style>
</body>

</html>