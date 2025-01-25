<?php
include "header.php";
?>



<div class="flex items-center justify-center h-screen">
    <div class="relative h-screen w-full sm:w-4/5 overflow-hidden">
        <!-- Background Image -->
        <img src="../assets/events/gujrati.jpg" alt="Profile Background"
            class="absolute inset-0 w-full h-full object-cover rounded-none sm:rounded-lg m-0 sm:m-4 opacity-50">

        <!-- Overlay for Name and Title -->
        <div class="absolute inset-0 flex flex-col justify-center items-center text-center px-4">
            <h2 class="text-4xl sm:text-6xl font-bold text-black">Gujrati Chapter</h2>
            <p class="text-lg sm:text-xl text-black-200 mt-2">Kesha Marwada</p>
        </div>

        <!-- Bottom Stats Section -->
        <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-80 py-6 px-4 sm:px-6 rounded-lg">
            <div class="flex flex-col sm:flex-row sm:justify-evenly gap-6 sm:gap-0">
                <!-- Hours -->
                <div class="text-center">
                    <h3 class="text-3xl sm:text-5xl font-bold text-white">20</h3>
                    <p class="text-sm text-gray-300">Hours</p>
                </div>

                <!-- Participants Worldwide -->
                <div class="text-center">
                    <h3 class="text-3xl sm:text-5xl font-bold text-white">17</h3>
                    <p class="text-sm text-gray-300">Participants Worldwide</p>
                </div>

            </div>
        </div>
    </div>
</div>



<!-- Additional Sections -->
<div class="mt-12 max-w-7xl mx-auto px-6">
 


    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 text-center mb-12">
        <div class="col-span-full">
            <h3 class="text-lg font-bold">The Gujrati Chapter</h3>
            <p class="text-gray-500">Kesha Marwada heads the Bahujan Scholars Gujarati chapter, where she organizes monthly online events in Gujarati focused on academic and professional development. These sessions offer valuable guidance and insights, helping participants enhance their knowledge and career prospects. Kesha’s leadership fosters a supportive environment for personal and professional growth within the Gujarati-speaking community.</p>
        </div>
    </div>

    


    <!-- About the Speaker -->
    <div class="m-12 bg-gray-50 p-6 rounded-lg flex flex-col sm:flex-row items-center">
        <div class="w-full sm:w-1/3">
            <img src="assets/web/===" alt="Speaker" class="rounded-full mx-auto h-40">
        </div>
        <div class="w-full sm:w-2/3 sm:pl-6 mt-6 sm:mt-0">
            <h3 class="text-2xl font-semibold text-blue-500 mb-4">About the Speaker</h3>
            <p class="text-gray-600 text-lg leading-relaxed">TO WRITE</p>
        </div>
    </div>




</div>




<?php
include "footer.php";
?>