<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Profile Card</title>
</head>
<body class="bg-gray-50">
  <div class="relative h-screen w-4/5 overflow-hidden">
    <!-- Background Image -->
    <img src="../assets/contact.jpg" alt="Profile Background" class="absolute inset-0 w-full h-full object-cover">

    <!-- Overlay for Name and Title -->
    <div class="absolute inset-0 flex flex-col justify-center items-center text-center">
      <h2 class="text-6xl font-bold text-white">Jessica Kobessi</h2>
      <p class="text-xl text-gray-200 mt-2">VFX / Graphics Head</p>
    </div>

    <!-- Bottom Stats Section -->
    <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-80 py-6">
      <div class="flex justify-evenly">
        <div class="text-center">
          <h3 class="text-5xl font-bold text-white">12</h3>
          <p class="text-sm text-gray-300">Years of Experience</p>
        </div>
        <div class="text-center">
          <h3 class="text-5xl font-bold text-white">820</h3>
          <p class="text-sm text-gray-300">Satisfied Clients</p>
        </div>
        <div class="text-center">
          <h3 class="text-5xl font-bold text-white">720</h3>
          <p class="text-sm text-gray-300">Employees Worldwide</p>
        </div>
        <div class="text-center">
          <h3 class="text-5xl font-bold text-white">2200</h3>
          <p class="text-sm text-gray-300">Projects Completed</p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
