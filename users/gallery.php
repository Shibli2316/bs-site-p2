<?php
include "header.php";
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
        <div class="relative rounded overflow-hidden">
          <img src="../assets/ambedkar.jpg" alt="Hanging Planters" class="w-full h-48 object-cover">
          <p class="cursor-pointer absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-2xl text-center text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Hanging Planters</p>
        </div>
        <div class="relative rounded overflow-hidden">
          <img src="../assets/contact.jpg" alt="Planter Stand with Pots" class="w-full h-48 object-cover">
          <p class="cursor-pointer absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-2xl text-center text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Planter Stand with Pots</p>
        </div>
        <div class="relative rounded overflow-hidden">
          <img src="../assets/logo.png" alt="Watering Cans" class="w-full h-48 object-cover">
          <p class="cursor-pointer absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-2xl text-center text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Watering Cans</p>
        </div>
        <div class="relative rounded overflow-hidden">
          <img src="../assets/mission.jpg" alt="Metal Planters" class="w-full h-48 object-cover">
          <p class="cursor-pointer absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-2xl text-center text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Metal Planters</p>
        </div>
      </div>
    </section>

    <!-- Ongoing Events Section -->
    <section id="ongoing-events">
      <h2 class="text-2xl font-semibold text-gray-700 mb-4">Ongoing Events</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <!-- Event Items for Ongoing Events -->
        <div class="relative rounded overflow-hidden">
          <img src="../assets/objective.jpg" alt="Table Top Planters" class="w-full h-48 object-cover">
          <p class="cursor-pointer absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-2xl text-center text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Table Top Planters</p>
        </div>
        <div class="relative rounded overflow-hidden">
          <img src="../assets/project.jpg" alt="Wall Mounted Stands" class="w-full h-48 object-cover">
          <p class="cursor-pointer absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-2xl text-center text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Wall Mounted Stands</p>
        </div>
        <div class="relative rounded overflow-hidden">
          <img src="../assets/team.jpg" alt="Jute Plant Pots" class="w-full h-48 object-cover">
          <p class="cursor-pointer absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-2xl text-center text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Jute Plant Pots</p>
        </div>
        <div class="relative rounded overflow-hidden">
          <img src="../assets/value.jpg" alt="Bird Feeders" class="w-full h-48 object-cover">
          <p class="cursor-pointer absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-2xl text-center text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Bird Feeders</p>
        </div>
      </div>
    </section>

    <!-- Past Events Section -->
    <section id="past-events">
      <h2 class="text-2xl font-semibold text-gray-700 mb-4">Past Events</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <!-- Event Items for Past Events -->
        <div class="relative rounded overflow-hidden">
          <img src="../assets/vission.jpg" alt="Hanging Birds" class="w-full h-48 object-cover">
          <p class="cursor-pointer absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-2xl text-center text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Hanging Birds</p>
        </div>
        <div class="relative rounded overflow-hidden">
          <img src="../assets/ambedkar.jpg" alt="Garden Sticks" class="w-full h-48 object-cover">
          <p class="cursor-pointer absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-2xl text-center text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Garden Sticks</p>
        </div>
        <div class="relative rounded overflow-hidden">
          <img src="https://source.unsplash.com/400x300/?garden-tray-miniatures" alt="Garden Tray Miniatures" class="w-full h-48 object-cover">
          <p class="cursor-pointer absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-2xl text-center text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Garden Tray Miniatures</p>
        </div>
        <div class="relative rounded overflow-hidden">
          <img src="https://source.unsplash.com/400x300/?garden-tool-set" alt="Garden Tool Set" class="w-full h-48 object-cover">
          <p class="cursor-pointer absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-2xl text-center text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Garden Tool Set</p>
        </div>
      </div>
    </section>
  </div>
</div>

<?php
include "footer.php";
?>
