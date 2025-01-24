<?php
include "includes/header.php";
?>

<div class="container mx-auto p-4">
  <!-- Heading -->
  <h1 class="text-4xl font-bold text-center text-gray-800 mb-6">Events</h1>

  <!-- Sections -->
  <div class="space-y-12">
    <!-- Upcoming Events Section -->
    <section id="upcoming-events">
      <h2 class="text-2xl font-semibold text-gray-700 mb-4">Upcoming Events</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <!-- Event Items for Upcoming Events -->


        <a href="eventPage.php">
          <div class="relative rounded overflow-hidden">
            <img src="../assets/web/ambedkar.jpg" alt="Hanging Planters" class="w-full h-48 object-cover">
            <p
              class="cursor-pointer absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-2xl text-center text-white font-roboto font-medium group-hover:bg-opacity-60 transition">
              Good event</p>
          </div>
        </a>


        
        
      </div>
    </section>

    <!-- Ongoing Events Section -->
    <section id="ongoing-events">
      <h2 class="text-2xl font-semibold text-gray-700 mb-4">Ongoing Events</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <!-- Event Items for Ongoing Events -->
        <a href="eventPage.php">
          <div class="relative rounded overflow-hidden">
            <img src="../assets/web/objective.jpg" alt="Table Top Planters" class="w-full h-48 object-cover">
            <p
              class="cursor-pointer absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-2xl text-center text-white font-roboto font-medium group-hover:bg-opacity-60 transition">
              Nice event</p>
          </div>
        </a>
        
      </div>
    </section>

    <!-- Past Events Section -->
    <section id="past-events">
      <h2 class="text-2xl font-semibold text-gray-700 mb-4">Past Events</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <!-- Event Items for Past Events -->
        <a href="eventPage.php">
          <div class="relative rounded overflow-hidden">
            <img src="../assets/web/vission.jpg" alt="Hanging Birds" class="w-full h-48 object-cover">
            <p
              class="cursor-pointer absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-2xl text-center text-white font-roboto font-medium group-hover:bg-opacity-60 transition">
              Nice event</p>
          </div>
        </a>
        
      </div>
    </section>
  </div>
</div>

<?php
include "includes/footer.php";
?>