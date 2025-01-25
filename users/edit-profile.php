<?php
include "header.php";

// Assuming $username is already the logged-in user's email
$email = $username;  // $username should contain the email of the logged-in user
$showPopup = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  // Sanitize and validate inputs
  $name = trim($_POST['name']);
  $location = trim($_POST['location']);
  $bio = trim($_POST['bio']);
  $discipline = trim($_POST['discipline']);
  $university_place = trim($_POST['university_place']);
  $comment = trim($_POST['comment']);
  $fields = trim($_POST['fields']);
  $research = trim($_POST['research']);
  
  // Optionally validate and sanitize email again if you allow email modification
  $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);

  // Validate email format
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Invalid email format";
      exit;
  }

  // Prepare SQL query to update data based on the email
  $stmt = $conn->prepare("UPDATE `profile` 
                          SET `name` = ?, `location` = ?, `bio` = ?, `discipline` = ?, `university_place` = ?, 
                              `comment` = ?, `fields` = ?, `research` = ? 
                          WHERE `email` = ?");
  
  $stmt->bind_param("sssssssss", $name, $location, $bio, $discipline, $university_place, $comment, $fields, $research, $email);

  // Execute the query and check if successful
  if ($stmt->execute()) {
      $showPopup = true;
  } else {
      echo "Error: " . $stmt->error;
  }

  $stmt->close();
}

if ($showPopup) {
    echo "
    <div id='popup' class='fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50'>
        <div class='bg-white p-6 rounded-lg shadow-lg text-center'>
            <h3 class='text-xl font-semibold mb-4 text-green-600'>Profile Updated Successfully!</h3>
            <p class='mb-4 text-gray-700'>Your profile has been updated. We will review your details and get back to you soon.</p>
            <button onclick='closePopup()' class='px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition'>
                Close
            </button>
        </div>
    </div>

    <script>
        function closePopup() {
            document.getElementById('popup').style.display = 'none';
            window.location.href = 'profile.php';
        }
    </script>
    ";
}
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
      <h1 class="text-3xl font-semibold text-gray-900 mt-4 sm:text-4xl">Edit <?=$rowFindName['name']?>'s Profile</h1>
    </div>

    <form action="edit-profile.php" method="POST">
      <!-- Name and Location -->
      <div class="">
        <label for="name" class="text-sm font-semibold text-gray-600">Full Name:</label>
        <input id="name" name="name" type="text" value="<?=$rowFindName['name']?>" class="mt-2 w-full py-2 px-4 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600">
        
        
      </div>

      <!-- Job and University -->
      <div class="mt-4">
        <label for="job" class="text-sm font-semibold text-gray-600">Location:</label>
        <input id="job" name="location" type="text" value="<?=$rowFindName['location']?>" class="mt-2 w-full py-2 px-4 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600">
      </div>

    
      <!-- Bio -->
      <div class="mt-4">
        <label for="bio" class="text-sm font-semibold text-gray-600">Bio:</label>
        <textarea id="bio" name="bio" rows="4" class="mt-2 w-full py-2 px-4 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600"><?=$rowFindName['bio']?></textarea>
      </div>

      <!-- Discipline and Department -->
      <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 gap-4 text-gray-700">
        <div>
          <label for="discipline" class="text-sm font-semibold text-gray-600">Discipline/Department:</label>
          <input id="discipline" name="discipline" type="text" value="<?=$rowFindName['discipline']?>" class="mt-2 w-full py-2 px-4 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600">
        </div>
        <div>
          <label for="university_place" class="text-sm font-semibold text-gray-600">University/Place:</label>
          <input id="university_place" name="university_place" type="text" value="<?=$rowFindName['university_place']?>" class="mt-2 w-full py-2 px-4 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600">
        </div>
      </div>

      <!-- Email and Comment -->
      <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 gap-4 text-gray-700">
        <div>
          <label for="email" class="text-sm font-semibold text-gray-600">Email:</label>
          <input id="email" name="email" type="email" value="<?=$email?>" class="mt-2 w-full py-2 px-4 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600" readonly>
        </div>
        <div>
          <label for="comment" class="text-sm font-semibold text-gray-600">Comment:</label>
          <input id="comment" name="comment" type="text" value="<?=$rowFindName['comment']?>" class="mt-2 w-full py-2 px-4 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600">
        </div>
      </div>

      <!-- Fields/Disciplines and Research Areas -->
      <div class="mt-4 text-gray-700">
        <label for="fields" class="font-semibold text-gray-600">Fields/Disciplines:</label>
        <input id="fields" name="fields" type="text" value="<?=$rowFindName['fields']?>" class="mt-2 w-full py-2 px-4 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600">
      </div>

      <div class="mt-4 text-gray-700">
        <label for="research" class="font-semibold text-gray-600">Research Areas:</label>
        <input id="research" name="research" type="text" value="<?=$rowFindName['research']?>" class="mt-2 w-full py-2 px-4 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600">
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
