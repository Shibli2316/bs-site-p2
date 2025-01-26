<?php include "header.php"; ?>

<div class="container mx-auto p-4">
  <!-- Welcome User Section -->
  <h1 class="text-4xl font-bold text-center text-gray-800 mb-6">Welcome, <?=$rowFindName['name']?></h1>

  

<!-- Ongoing Events Section -->
<section id="ongoing-events">
      <h2 class="text-2xl font-semibold text-gray-700 mb-4">Ongoing Chapters</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <!-- Event Items for Ongoing Events -->
        <a href="eventHindi.php">
          <div class="relative rounded overflow-hidden">
            <img src="../assets/events/hindi.jpg" alt="Table Top Planters" class="w-full h-48 object-cover">
            <p
              class="cursor-pointer absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-2xl text-center text-white font-roboto font-medium group-hover:bg-opacity-60 transition">
              Hindi</p>
          </div>
        </a>
        <a href="eventGujrati.php">
          <div class="relative rounded overflow-hidden">
            <img src="../assets/events/gujrati.jpg" alt="Table Top Planters" class="w-full h-48 object-cover">
            <p
              class="cursor-pointer absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-2xl text-center text-white font-roboto font-medium group-hover:bg-opacity-60 transition">
              Gujrati</p>
          </div>
        </a>
        <a href="eventEng.php">
          <div class="relative rounded overflow-hidden">
            <img src="../assets/events/english.jpg" alt="Table Top Planters" class="w-full h-48 object-cover">
            <p
              class="cursor-pointer absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-2xl text-center text-white font-roboto font-medium group-hover:bg-opacity-60 transition">
              English</p>
          </div>
        </a>
        
      </div>
    </section>

  <!-- Upcoming Events Section -->
  <section id="ongoing-events">
      <h2 class="text-2xl font-semibold text-gray-700 mb-4">Ongoing Programs</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <!-- Event Items for Ongoing Programs -->
        <a href="programGroupMentoring.php">
          <div class="relative rounded overflow-hidden">
            <img src="../assets/programs/groupmentoring.jpg" alt="Table Top Planters" class="w-full h-48 object-cover">
            <p
              class="cursor-pointer absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-2xl text-center text-white font-roboto font-medium group-hover:bg-opacity-60 transition">
              Group Mentoring</p>
          </div>
        </a>
        <a href="programNexgen.php">
          <div class="relative rounded overflow-hidden">
            <img src="../assets/programs/nexgen.jpg" alt="Table Top Planters" class="w-full h-48 object-cover">
            <p
              class="cursor-pointer absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-2xl text-center text-white font-roboto font-medium group-hover:bg-opacity-60 transition">
              NexGen</p>
          </div>
        </a>
        
      </div>
    </section>
</div>

<?php include "footer.php"; ?>
