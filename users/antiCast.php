<?php
include "header.php";
?>



<div class="flex items-center justify-center h-screen">
    <div class="relative h-screen w-4/5 overflow-hidden">
        <!-- Background Image -->
        <img src="../assets/team.jpg" alt="Profile Background"
            class="absolute inset-0 w-full h-full object-cover rounded-lg m-4 opacity-50">



        <!-- Bottom Stats Section -->
        <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-80 py-6 m-6 rounded-lg">
            <div class="flex justify-center items-center">
                <h3 class="text-5xl font-bold text-white">Anti Caste Campaign</h3>
            </div>
        </div>

    </div>
</div>


<!-- Additional Sections -->
<div class="mt-12 max-w-7xl mx-auto px-6">
    <!-- Skills Section -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 text-center mb-12">
        <div class="col-span-full">
            <div class="text-teal-500 text-4xl mb-2">✊</div>
            <h3 class="text-lg font-bold">Anti Caste Campaign</h3>
            <p class="text-gray-500">The "Anti Caste Campaign" aims to raise awareness and promote equality in society
                by addressing caste-based discrimination. Through workshops, discussions, and community outreach, we
                strive to foster a more inclusive and fair environment for everyone, irrespective of their caste or
                background.</p>
        </div>
    </div>


    <!-- Education, Experience, and Interests -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        <!-- Education -->
        <div class="bg-gray-100 p-6 rounded-lg">
            <h3 class="text-xl font-bold mb-4">Chain of events</h3>
            <div class="mb-4">
                <p class="text-sm text-gray-500">1998 - 2004</p>
                <h4 class="font-semibold">Initiated the Program</h4>
                <p class="text-gray-500">Good program</p>
            </div>
            <div>
                <p class="text-sm text-gray-500">2004 - 2006</p>
                <h4 class="font-semibold">Took Pace</h4>
                <p class="text-gray-500">Program goes viral</p>
            </div>
        </div>

        <!-- Experiences -->
        <div class="bg-gray-50 p-6 rounded-lg">
            <h3 class="text-xl font-bold mb-4">What Now</h3>
            <div class="mb-4">
                <p class="text-sm text-gray-500">2007 - 2012</p>
                <h4 class="font-semibold">Current Scenario</h4>
                <p class="text-gray-500">Improving and working daily.</p>
            </div>
            <div>
                <p class="text-sm text-gray-500">2013 - Present</p>
                <h4 class="font-semibold">Takeing forward</h4>
                <p class="text-gray-500">The community is helping in taking it forward.</p>
            </div>
        </div>

        <!-- Interests -->
        <div class="bg-gray-100 p-6 rounded-lg">
            <h3 class="text-xl font-bold mb-4">What we do</h3>
            <div class="mb-4">
                <p class="text-sm text-gray-500">1998 - 2004</p>
                <h4 class="font-semibold">Help</h4>
                <p class="text-gray-500">We help people irrespective of cast.</p>
            </div>
            <div>
                <p class="text-sm text-gray-500">2004 - 2006</p>
                <h4 class="font-semibold">Grow</h4>
                <p class="text-gray-500">We help everyone grow</p>
            </div>
        </div>
    </div>


    <!-- About the Speaker -->
    <div class="m-12 bg-gray-50 p-6 rounded-lg flex flex-col sm:flex-row items-center">
        <div class="w-full sm:w-1/3">
            <img src="../assets/why-mentor.jpg" alt="Speaker" class="rounded-full mx-auto">
        </div>
        <div class="w-full sm:w-2/3 sm:pl-6 mt-6 sm:mt-0">
            <h3 class="text-2xl font-semibold text-blue-500 mb-4">About the Speaker</h3>
            <p class="text-gray-600 text-lg leading-relaxed">Bharat is a remarkable person whose passion for social work
                and making a positive change in society is evident in everything he does. His tireless efforts and
                unwavering dedication to improving the lives of others are commendable. Bharat’s contributions to the
                community serve as an inspiration to all who know him.</p>
        </div>
    </div>


</div>









<?php
include "footer.php";
?>