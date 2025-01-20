<?php
include "header.php";
?>



<div class="flex items-center justify-center h-screen">
    <div class="relative h-screen w-4/5 overflow-hidden">
        <!-- Background Image -->
        <img src="../assets/team.jpg" alt="Profile Background"
            class="absolute inset-0 w-full h-full object-cover rounded-lg m-4 opacity-50">

        <!-- Overlay for Name and Title -->
        <div class="absolute inset-0 flex flex-col justify-center items-center text-center">
            <h2 class="text-6xl font-bold text-black">Jessica Kobessi</h2>
            <p class="text-xl text-black-200 mt-2">VFX / Graphics Head</p>
        </div>

        <!-- Bottom Stats Section -->
        <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-80 py-6 m-6 rounded-lg">
            <div class="flex justify-evenly">
                <div class="text-center">
                    <h3 class="text-5xl font-bold text-white">820</h3>
                    <p class="text-sm text-gray-300">Satisfied Clients</p>
                </div>
                <div class="text-center">
                    <h3 class="text-5xl font-bold text-white">720</h3>
                    <p class="text-sm text-gray-300">Employees Worldwide</p>
                </div>
                <div class="text-center flex items-center justify-center">
                    <button class="px-4 py-2 bg-teal-500 text-white font-bold rounded-full hover:bg-teal-600">Register
                        Now</button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Additional Sections -->
<div class="mt-12 max-w-7xl mx-auto px-6">
    <!-- Skills Section -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 text-center mb-12">
        <div>
            <div class="text-teal-500 text-4xl mb-2">💻</div>
            <h3 class="text-lg font-bold">UI/UX Design</h3>
            <p class="text-gray-500">At in proin consequat ut cursus venenatis sapien.</p>
        </div>
        <div>
            <div class="text-teal-500 text-4xl mb-2">🎨</div>
            <h3 class="text-lg font-bold">Illustration</h3>
            <p class="text-gray-500">At in proin consequat ut cursus venenatis sapien.</p>
        </div>
        <div>
            <div class="text-teal-500 text-4xl mb-2">🖥️</div>
            <h3 class="text-lg font-bold">Graphic Design</h3>
            <p class="text-gray-500">At in proin consequat ut cursus venenatis sapien.</p>
        </div>
    </div>


    <!-- Education, Experience, and Interests -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        <!-- Education -->
        <div class="bg-gray-100 p-6 rounded-lg">
            <h3 class="text-xl font-bold mb-4">Education</h3>
            <div class="mb-4">
                <p class="text-sm text-gray-500">1998 - 2004</p>
                <h4 class="font-semibold">Bachelors in Engineering in Information Technology</h4>
                <p class="text-gray-500">Bachelors in Engineering in Information Technology</p>
            </div>
            <div>
                <p class="text-sm text-gray-500">2004 - 2006</p>
                <h4 class="font-semibold">Masters in Data Analysis</h4>
                <p class="text-gray-500">Harvard School of Science and Management</p>
            </div>
        </div>

        <!-- Experiences -->
        <div class="bg-gray-50 p-6 rounded-lg">
            <h3 class="text-xl font-bold mb-4">Experiences</h3>
            <div class="mb-4">
                <p class="text-sm text-gray-500">2007 - 2012</p>
                <h4 class="font-semibold">Creative Agency Inc.: Design Head</h4>
                <p class="text-gray-500">iacentem substantiates um se sed esse haec Possit facis qui a a a patriam.</p>
            </div>
            <div>
                <p class="text-sm text-gray-500">2013 - Present</p>
                <h4 class="font-semibold">Studio Alpha: Project Manager</h4>
                <p class="text-gray-500">iacentem substantiates um se sed esse haec Possit facis qui a a a patriam.</p>
            </div>
        </div>

        <!-- Interests -->
        <div class="bg-gray-100 p-6 rounded-lg">
            <h3 class="text-xl font-bold mb-4">Interests</h3>
            <div class="mb-4">
                <p class="text-sm text-gray-500">1998 - 2004</p>
                <h4 class="font-semibold">Bachelors in Engineering in Information Technology</h4>
                <p class="text-gray-500">Bachelors in Engineering in Information Technology</p>
            </div>
            <div>
                <p class="text-sm text-gray-500">2004 - 2006</p>
                <h4 class="font-semibold">Masters in Data Analysis</h4>
                <p class="text-gray-500">Harvard School of Science and Management</p>
            </div>
        </div>
    </div>


    <!-- About the Speaker -->
    <div class="m-12 bg-gray-50 p-6 rounded-lg flex flex-col sm:flex-row items-center">
        <div class="w-full sm:w-1/3">
            <img src="../assets/why-mentor.jpg" alt="Speaker" class="rounded-full mx-auto">
        </div>
        <div class="w-full sm:w-2/3 sm:pl-6 mt-6 sm:mt-0">
            <h3 class="text-2xl font-semibold text-teal-500 mb-4">About the Speaker</h3>
            <p class="text-gray-600 text-lg leading-relaxed">Jessica Kobessi is a renowned VFX and Graphics Head with over 12 years of
                experience in the industry. Her work has captivated audiences globally, combining artistic vision with
                technical expertise. She is passionate about mentoring young designers and pushing the boundaries of
                creativity in visual storytelling.</p>
        </div>
    </div>


</div>









<?php
include "footer.php";
?>