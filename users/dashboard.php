<?php include "header.php"; ?>

<div class="container mx-auto p-4">
  <!-- Welcome User Section -->
  <h1 class="text-4xl font-bold text-center text-gray-800 mb-6">Welcome, User!</h1>

  

  <!-- Ongoing Events Section -->
  <section id="ongoing-events" class="mb-12">
    <h2 class="text-2xl font-semibold text-gray-700 mb-4">Ongoing Events</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
      <!-- Event Item -->
      <a href="eventPage.php">
        <div class="relative rounded overflow-hidden">
          <img src="../assets/web/objective.jpg" alt="Nice Event" class="w-full h-48 object-cover">
          <p class="cursor-pointer absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-2xl text-center text-white font-roboto font-medium group-hover:bg-opacity-60 transition">
            Nice Event
          </p>
        </div>
      </a>
      <!-- Event Item -->
      <a href="eventPage.php">
        <div class="relative rounded overflow-hidden">
          <img src="../assets/web/project.jpg" alt="Great Event" class="w-full h-48 object-cover">
          <p class="cursor-pointer absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-2xl text-center text-white font-roboto font-medium group-hover:bg-opacity-60 transition">
            Great Event
          </p>
        </div>
      </a>
    </div>
  </section>

  <!-- Upcoming Events Section -->
  <section id="upcoming-events" class="mb-12">
    <h2 class="text-2xl font-semibold text-gray-700 mb-4">Ongoing Programs</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
      <!-- Event Item -->
      <a href="eventPage.php">
        <div class="relative rounded overflow-hidden">
          <img src="../assets/web/logo.png" alt="Perfect Event" class="w-full h-48 object-cover">
          <p class="cursor-pointer absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-2xl text-center text-white font-roboto font-medium group-hover:bg-opacity-60 transition">
            Perfect Event
          </p>
        </div>
      </a>
      <!-- Event Item -->
      <a href="eventPage.php">
        <div class="relative rounded overflow-hidden">
          <img src="../assets/web/mission.jpg" alt="Amazing Event" class="w-full h-48 object-cover">
          <p class="cursor-pointer absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-2xl text-center text-white font-roboto font-medium group-hover:bg-opacity-60 transition">
            Amazing Event
          </p>
        </div>
      </a>
    </div>
  </section>
</div>

<?php include "footer.php"; ?>
