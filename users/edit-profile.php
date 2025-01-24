<?php
include "header.php";
?>

<!-- Edit Profile Section -->
<div class="relative">
  <!-- Background Image -->
  <div class="h-80 bg-cover bg-center rounded-t-lg" style="background-image: url('../assets/web/mission.jpg');"></div>

  <!-- Edit Profile Content -->
  <div class="bg-white shadow-2xl rounded-lg max-w-4xl mx-auto -mt-28 p-6 sm:p-8 space-y-6 mb-4">
    <div class="text-center">
      <!-- Profile Picture -->
      <!-- <div class="rounded-full border-4 border-white shadow-md overflow-hidden w-32 h-32 mx-auto">
        <img class="w-full h-full object-cover" src="../assets/web/" alt="Profile Picture">
      </div> -->
      <!-- Form to edit the name, job, etc. -->
      <h1 class="text-3xl font-semibold text-gray-900 mt-4 sm:text-4xl">Edit USERS Profile</h1>
    </div>

    <form action="save-profile.php" method="POST">
      <!-- Name and Location -->
      <div class="text-center">
        <label for="name" class="text-sm font-semibold text-gray-600">Full Name:</label>
        <input id="name" name="name" type="text" value="Ajeet Shekhar" class="mt-2 w-full py-2 px-4 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600">
        <label for="name" class="text-sm font-semibold text-gray-600">Location:</label>
        <input id="name" name="name" type="text" value="Los Angeles, California" class="mt-2 w-full py-2 px-4 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600">
        
      </div>

      <!-- Job and University -->
      <div class="mt-4">
        <label for="job" class="text-sm font-semibold text-gray-600">Job Title:</label>
        <input id="job" name="job" type="text" value="Manager" class="mt-2 w-full py-2 px-4 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600">
      </div>

      <div class="mt-4">
        <label for="university" class="text-sm font-semibold text-gray-600">University:</label>
        <input id="university" name="university" type="text" value="University of Computer Science" class="mt-2 w-full py-2 px-4 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600">
      </div>

      <!-- Bio -->
      <div class="mt-4">
        <label for="bio" class="text-sm font-semibold text-gray-600">Bio:</label>
        <textarea id="bio" name="bio" rows="4" class="mt-2 w-full py-2 px-4 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600">Ajeet is a compassionate and dedicated individual who is always ready to lend a helping hand in his community. His commitment to social work and the well-being of others is truly inspiring...</textarea>
      </div>

      <!-- Discipline and Department -->
      <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 gap-4 text-gray-700">
        <div>
          <label for="discipline" class="text-sm font-semibold text-gray-600">Discipline/Department:</label>
          <input id="discipline" name="discipline" type="text" value="Creative Arts" class="mt-2 w-full py-2 px-4 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600">
        </div>
        <div>
          <label for="university_place" class="text-sm font-semibold text-gray-600">University/Place:</label>
          <input id="university_place" name="university_place" type="text" value="University of Computer Science" class="mt-2 w-full py-2 px-4 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600">
        </div>
      </div>

      <!-- Email and Comment -->
      <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 gap-4 text-gray-700">
        <div>
          <label for="email" class="text-sm font-semibold text-gray-600">Email:</label>
          <input id="email" name="email" type="email" value="ajeet.shakhar@example.com" class="mt-2 w-full py-2 px-4 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600">
        </div>
        <div>
          <label for="comment" class="text-sm font-semibold text-gray-600">Comment:</label>
          <input id="comment" name="comment" type="text" value="Excited to collaborate on new research projects." class="mt-2 w-full py-2 px-4 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600">
        </div>
      </div>

      <!-- Fields/Disciplines and Research Areas -->
      <div class="mt-4 text-gray-700">
        <label for="fields" class="font-semibold text-gray-600">Fields/Disciplines:</label>
        <input id="fields" name="fields" type="text" value="Data Science, Machine Learning, Artificial Intelligence" class="mt-2 w-full py-2 px-4 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600">
      </div>

      <div class="mt-4 text-gray-700">
        <label for="research" class="font-semibold text-gray-600">Research Areas:</label>
        <input id="research" name="research" type="text" value="Neural Networks, Computer Vision, Data Analysis" class="mt-2 w-full py-2 px-4 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600">
      </div>

      <!-- Submit Button -->
      <div class="flex justify-center mt-6">
        <button type="submit" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-full text-lg font-semibold transition duration-300 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50">
          Save Changes
        </button>
      </div>
    </form>
  </div>
</div>

</body>
</html>

<?php
include "footer.php";
?>
