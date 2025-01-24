<?php
include "header.php";
?>

<!-- Profile Section -->
<div class="relative">
  <!-- Background Image -->
  <div class="h-80 bg-cover bg-center rounded-t-lg" style="background-image: url('../assets/web/mission.jpg');"></div>

  <!-- Profile Content -->
  <div class="bg-white shadow-2xl rounded-lg max-w-4xl mx-auto -mt-28 p-6 sm:p-8 space-y-6 mb-4">
    <div class="text-center">
      <!-- Profile Picture -->
      <!-- <div class="rounded-full border-4 border-white shadow-md overflow-hidden w-32 h-32 mx-auto">
        <img class="w-full h-full object-cover" src="../assets/web/ambedkar.jpg" alt="Profile Picture">
      </div> -->
      <!-- Name and Location -->
      <h1 class="text-3xl font-semibold text-gray-900 mt-4 sm:text-4xl">Ajeet Shekhar</h1>
      <p class="text-gray-600 text-lg">📍 Los Angeles, California</p>
      
      <p class="text-gray-700 flex justify-center items-center space-x-2 mt-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
        <span class="font-medium text-gray-700">University of Computer Science</span>
      </p>
    </div>

    <!-- Bio -->
    <div class="text-center">
      <p class="text-gray-700 text-sm leading-relaxed sm:text-base">
      Ajeet is a compassionate and dedicated individual who is always ready to lend a helping hand in his community. His commitment to social work and the well-being of others is truly inspiring. Ajeet’s efforts have positively impacted many lives, and his selfless service continues to make a significant difference in the world.
      </p>
    </div>

    <!-- Additional Information -->
    <div class="space-y-4">
      <!-- Discipline and Department -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-gray-700">
        <div>
          <strong class="text-sm font-semibold text-gray-600">Discipline/Department:</strong>
          <p>Creative Arts</p>
        </div>
        <div>
          <strong class="text-sm font-semibold text-gray-600">University/Place:</strong>
          <p>University of Computer Science</p>
        </div>
      </div>

      <!-- Email and Comment -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-gray-700">
        <div>
          <strong class="text-sm font-semibold text-gray-600">Email:</strong>
          <p class="text-blue-500 hover:underline">ajeet.shakhar@example.com</p>
        </div>
        <div>
          <strong class="text-sm font-semibold text-gray-600">Comment:</strong>
          <p>"Excited to collaborate on new research projects."</p>
        </div>
      </div>

      <!-- Fields/Disciplines and Research Areas -->
      <div class="text-gray-700">
        <div class="font-semibold text-gray-600">Fields/Disciplines:</div>
        <p class="text-gray-700">Data Science, Machine Learning, Artificial Intelligence</p>

        <div class="font-semibold text-gray-600 mt-2">Research Areas:</div>
        <p class="text-gray-700">Neural Networks, Computer Vision, Data Analysis</p>
      </div>
    </div>

    <!-- Edit Button -->
    <div class="flex justify-center mt-6">
      <a href="edit-profile.php" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-full text-lg font-semibold transition duration-300 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50">
        Edit Profile
      </a>
    </div>
  </div>
</div>

</body>
</html>

<?php
include "footer.php";
?>
