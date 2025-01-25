<?php
error_reporting(0);
include "../database/dbconn.php";
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  header("location: ../auth/login.php");
  exit;
}
$username = $_SESSION['email'];

$sqlFindName = "SELECT * FROM `profile` WHERE email = '$username'";
$resultFindName = mysqli_query($conn, $sqlFindName);
$rowFindName=mysqli_fetch_assoc($resultFindName)
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
  <title>Bahujan Scholars</title>
</head>

<style>
  #dropdownMenu1,
  #dropdownMenu2,
  #dropdownMenu3 {
    background-color: white;
    /* Explicit background */
    z-index: 50;
    /* Ensure above other elements */
    opacity: 1;
    /* Remove any inherited transparency */
  }

  /* Optional Overlay for Better Experience on Mobile */
  .mobile-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    background: rgba(0, 0, 0, 0.5);
    /* Semi-transparent overlay */
    z-index: 40;
    /* Below dropdown but above body */
  }
</style>

<body class="bg-gray-100 text-gray-800">
  <header class="sticky top-0 z-50 bg-opacity-80 backdrop-blur-lg bg-white shadow-md">
    <div class="container mx-auto flex items-center justify-between px-6 py-4">
      <!-- Logo and Name (aligned to top-left) -->
      <a href="dashboard.php">
        <div class="flex items-center space-x-3">
          <img src="../assets/web/logo.png" alt="Bahujan Scholars Logo" class="w-10 h-10">
          <div class="flex flex-col">
            <span class="text-xl font-bold text-blue-500">Bahujan Scholars</span>
            <span class="text-sm text-gray-500">Mentoring for Social Transformation</span>
          </div>
        </div>

      </a>

      <!-- Hamburger Button and Navigation Menu (aligned to top-right) -->
      <div class="flex items-center space-x-4">
        <!-- Hamburger Button (visible on mobile) -->
        <button id="menu-toggle" class="block lg:hidden text-gray-800 focus:outline-none">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
          </svg>
        </button>

        <!-- Navigation Menu -->
        <nav id="menu"
          class="hidden lg:flex lg:space-x-6 absolute lg:static top-16 left-0 w-full bg-white shadow-lg lg:shadow-none lg:bg-transparent lg:top-auto lg:left-auto z-40">
          <ul class="flex flex-col lg:flex-row lg:items-center lg:space-x-6">
            <li><a href="dashboard.php" class="hover:text-blue-500 block px-4 py-2">Home</a></li>
            <li><a href="antiCast.php" class="hover:text-blue-500 block px-4 py-2">Anti Cast Campaign</a></li>

            

            <!-- Dropdown Menu 1 -->
            <li class="relative">
              <button id="dropdownButton1"
                class="hover:text-blue-500 block px-4 py-2 focus:outline-none bg-transparent z-50">
                Initiatives
              </button>

              <ul id="dropdownMenu1"
                class="hidden absolute left-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg">
                <li><a href="program.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Program</a></li>
                <li><a href="event.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Events</a></li>
                <li><a href="archeives.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Archeives</a></li>
                
                </li>
              </ul>
            </li>

            <!-- Dropdown Menu 2 -->

            <li class="relative">
              <button id="dropdownButton3"
                class="hover:text-blue-500 block px-4 py-2 focus:outline-none bg-transparent z-50">
                Mentorship
              </button>

              <ul id="dropdownMenu3"
                class="hidden absolute left-0 mt-2 w-48 bg-white bg-opacity-100 border border-gray-200 rounded-md shadow-lg z-50">
                <li><a href="https://docs.google.com/spreadsheets/d/1sZP2LMcS-fOABXL2rS_3viZfS3PUFtscT_NcpFi1NK4/edit?usp=sharing" target="_blank" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Online Directory</a></li>
                <!-- <li><a href="" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Our Mentors</a></li> -->
                <li class="m-2">
                  <a href="mentorSignUp.php"
                    class="block px-4 py-2 text-white bg-blue-500 hover:bg-green-800 rounded-md focus:outline-none">
                    Become a Mentor
                  </a>
                </li>
                <li class="m-2">
                  <a href="menteeSignup.php"
                    class="block px-4 py-2 text-white bg-blue-500 hover:bg-green-800 rounded-md focus:outline-none">
                    Become a Mentee
                  </a>
                </li>
                
              </ul>
            </li>




            <!-- Dropdown Menu 3 -->
            <li class="relative">
              <button id="dropdownButton2"
                class="hover:text-blue-500 block px-4 py-2 focus:outline-none bg-transparent">
                Profile
              </button>

              <ul id="dropdownMenu2"
                class="hidden absolute left-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg">
                <li><a href="profile.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Setting</a></li>
                <li><a href="logout.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</a></li>
              </ul>
            </li>

            <li>
              <a href="https://www.youtube.com/@BahujanScholars-up6ek" class="hover:text-red-600 block px-4 py-2">
                <i class="fab fa-youtube text-red-600 hover:text-red-800"></i>
              </a>
            </li>



          </ul>
        </nav>




      </div>
    </div>
  </header>