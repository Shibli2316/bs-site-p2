
<footer class="bg-gray-50 text-gray-600 border-t border-gray-200">
  <div class="flex flex-wrap justify-around items-start max-w-5xl mx-auto py-10 px-5">
    <!-- Logo Section -->
    <div class="flex items-center gap-4 mb-8">
      <img src="../assets/logo.png" alt="Bahujan Scholars Logo" class="w-12 h-12">
      <div>
        <h3 class="text-xl text-blue-500 font-bold">Bahujan Scholars</h3>
        <p class="text-sm text-gray-600 mt-2">Mentoring for social transformation.</p>
      </div>
    </div>

    <!-- Quick Links -->
    <div class="mb-8">
      <h4 class="text-lg text-blue-500 font-semibold mb-4">Quick Links</h4>
      <ul class="space-y-2">
        <li><a href="dashboard.php" class="text-gray-600 hover:text-blue-500 text-sm">Home</a></li>
        <li><a href="antiCast.php" class="text-gray-600 hover:text-blue-500 text-sm">Anti Cast Compaign</a></li>
        <li><a href="event.php" class="text-gray-600 hover:text-blue-500 text-sm">Events</a></li>
        <li><a href="mentor.php" class="text-gray-600 hover:text-blue-500 text-sm">Mentoring</a></li>
      </ul>
    </div>

    <!-- Social Links -->
    <div class="mb-8 text-center sm:text-left">
      <h4 class="text-lg text-blue-500 font-semibold mb-4">Follow Us</h4>
      <ul class="flex justify-center sm:justify-start gap-4 mb-4">
        <li>
          <a href="https://docs.google.com/document/d/14VSovzMNp2oRd5kiVrv_1U0ig5dgKVRq/edit" target="_blank"
            class="text-gray-600 text-xl hover:text-blue-500 transition">
            <i class="fa fa-file"></i>
          </a>
        </li>
        <li>
          <a href="https://www.youtube.com/@BahujanScholars-up6ek" target="_blank"
            class="text-gray-600 text-xl hover:text-blue-500 transition">
            <i class="fab fa-youtube"></i>
          </a>
        </li>
      </ul>
      <h4 class="text-lg text-blue-500 font-semibold">Contact</h4>
      <a href="mailto:bahujanscholars.org@gmail.com" class="text-sm text-gray-700 hover:text-blue-500">
        bahujanscholars.org@gmail.com
      </a>
    </div>
  </div>

  <div class="text-center py-4 border-t border-gray-200">
    <p class="text-sm text-gray-500">
      &copy; 2024 <a href="https://github.com/shibli2316/" class="text-blue-500 hover:underline">Shibli</a>. All rights reserved.
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

    





     // Toggle visibility of dropdown menus
     const dropdownButtons = [
            document.getElementById("dropdownButton1"),
            document.getElementById("dropdownButton2"),
            document.getElementById("dropdownButton3")
          ];

          const dropdownMenus = [
            document.getElementById("dropdownMenu1"),
            document.getElementById("dropdownMenu2"),
            document.getElementById("dropdownMenu3")
          ];

          dropdownButtons.forEach((button, index) => {
            button.addEventListener("click", () => {
              dropdownMenus[index].classList.toggle("hidden");
            });
          });

          // Optional: Close dropdowns when clicking outside
          document.addEventListener("click", (event) => {
            dropdownButtons.forEach((button, index) => {
              if (!button.contains(event.target) && !dropdownMenus[index].contains(event.target)) {
                dropdownMenus[index].classList.add("hidden");
              }
            });
          });   
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