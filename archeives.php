<?php
include "includes/header.php";
?>

<div class="bg-white h-full py-6 sm:py-8 lg:py-12">
    <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
        <div class="mb-4 flex flex-col sm:flex-row items-center justify-between gap-4 sm:gap-8 sm:mb-8 md:mb-12">
            <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4 sm:gap-12">
                <h2 class="text-3xl font-bold text-gray-800 lg:text-4xl">Archives</h2>
                <p class="max-w-screen-sm text-gray-600 sm:text-base md:text-lg">
                    Explore the impactful events that shaped lives and communities worldwide.
                </p>
            </div>
        </div>

        <!-- Gallery Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
            <a href="#" onclick="openModal('assets/web/archeives/01.jpg')" class="group relative flex flex-col overflow-hidden rounded-lg shadow-lg transition duration-300 hover:shadow-xl">
                <img src="assets/web/archeives/01.jpg" alt="Anti Caste"
                    class="h-60 w-full object-cover object-center transition duration-300 group-hover:scale-105" />
                <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70 group-hover:opacity-50"></div>
                <div class="relative mt-auto p-4">
                    <h3 class="text-lg font-semibold text-white">Guidance Impact</h3>
                </div>
            </a>

            <a href="#" onclick="openModal('assets/web/archeives/02.jpg')" class="group relative flex flex-col overflow-hidden rounded-lg shadow-lg transition duration-300 hover:shadow-xl">
                <img src="assets/web/archeives/02.jpg" alt="Hindi Speaking"
                    class="h-60 w-full object-cover object-center transition duration-300 group-hover:scale-105" />
                <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70 group-hover:opacity-50"></div>
                <div class="relative mt-auto p-4">
                    <h3 class="text-lg font-semibold text-white">Book Series</h3>
                </div>
            </a>
            <a href="#" onclick="openModal('assets/web/archeives/03.png')" class="group relative flex flex-col overflow-hidden rounded-lg shadow-lg transition duration-300 hover:shadow-xl">
                <img src="assets/web/archeives/03.png" alt="Hindi Speaking"
                    class="h-60 w-full object-cover object-center transition duration-300 group-hover:scale-105" />
                <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70 group-hover:opacity-50"></div>
                <div class="relative mt-auto p-4">
                    <h3 class="text-lg font-semibold text-white">Equity on campus</h3>
                </div>
            </a>

            <a href="#" onclick="openModal('assets/web/archeives/04.png')" class="group relative flex flex-col overflow-hidden rounded-lg shadow-lg transition duration-300 hover:shadow-xl">
                <img src="assets/web/archeives/04.png" alt="Hindi Speaking"
                    class="h-60 w-full object-cover object-center transition duration-300 group-hover:scale-105" />
                <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70 group-hover:opacity-50"></div>
                <div class="relative mt-auto p-4">
                    <h3 class="text-lg font-semibold text-white">Equity on campus</h3>
                </div>
            </a>

            <a href="#" onclick="openModal('assets/web/archeives/05.jpg')" class="group relative flex flex-col overflow-hidden rounded-lg shadow-lg transition duration-300 hover:shadow-xl">
                <img src="assets/web/archeives/05.jpg" alt="Hindi Speaking"
                    class="h-60 w-full object-cover object-center transition duration-300 group-hover:scale-105" />
                <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70 group-hover:opacity-50"></div>
                <div class="relative mt-auto p-4">
                    <h3 class="text-lg font-semibold text-white">Fulbright Application</h3>
                </div>
            </a>

            <a href="#" onclick="openModal('assets/web/archeives/06.jpg')" class="group relative flex flex-col overflow-hidden rounded-lg shadow-lg transition duration-300 hover:shadow-xl">
                <img src="assets/web/archeives/06.jpg" alt="Hindi Speaking"
                    class="h-60 w-full object-cover object-center transition duration-300 group-hover:scale-105" />
                <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70 group-hover:opacity-50"></div>
                <div class="relative mt-auto p-4">
                    <h3 class="text-lg font-semibold text-white">Fulbright Application - Research Statement</h3>
                </div>
            </a>

            <a href="#" onclick="openModal('assets/web/archeives/07.jpg')" class="group relative flex flex-col overflow-hidden rounded-lg shadow-lg transition duration-300 hover:shadow-xl">
                <img src="assets/web/archeives/07.jpg" alt="Hindi Speaking"
                    class="h-60 w-full object-cover object-center transition duration-300 group-hover:scale-105" />
                <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70 group-hover:opacity-50"></div>
                <div class="relative mt-auto p-4">
                    <h3 class="text-lg font-semibold text-white">Personal Statement and Writing Samples</h3>
                </div>
            </a>

            <a href="#" onclick="openModal('assets/web/archeives/08.jpeg')" class="group relative flex flex-col overflow-hidden rounded-lg shadow-lg transition duration-300 hover:shadow-xl">
                <img src="assets/web/archeives/08.jpeg" alt="Hindi Speaking"
                    class="h-60 w-full object-cover object-center transition duration-300 group-hover:scale-105" />
                <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70 group-hover:opacity-50"></div>
                <div class="relative mt-auto p-4">
                    <h3 class="text-lg font-semibold text-white">Recommendation Letters and CV</h3>
                </div>
            </a>

            <a href="#" onclick="openModal('assets/web/archeives/09.jpg')" class="group relative flex flex-col overflow-hidden rounded-lg shadow-lg transition duration-300 hover:shadow-xl">
                <img src="assets/web/archeives/09.jpg" alt="Hindi Speaking"
                    class="h-60 w-full object-cover object-center transition duration-300 group-hover:scale-105" />
                <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70 group-hover:opacity-50"></div>
                <div class="relative mt-auto p-4">
                    <h3 class="text-lg font-semibold text-white">Interview and Assistantship</h3>
                </div>
            </a>

            <a href="#" onclick="openModal('assets/web/archeives/10.jpg')" class="group relative flex flex-col overflow-hidden rounded-lg shadow-lg transition duration-300 hover:shadow-xl">
                <img src="assets/web/archeives/10.jpg" alt="Hindi Speaking"
                    class="h-60 w-full object-cover object-center transition duration-300 group-hover:scale-105" />
                <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70 group-hover:opacity-50"></div>
                <div class="relative mt-auto p-4">
                    <h3 class="text-lg font-semibold text-white">Application to Visa</h3>
                </div>
            </a>

            <a href="#" onclick="openModal('assets/web/archeives/11.jpg')" class="group relative flex flex-col overflow-hidden rounded-lg shadow-lg transition duration-300 hover:shadow-xl">
                <img src="assets/web/archeives/11.jpg" alt="Hindi Speaking"
                    class="h-60 w-full object-cover object-center transition duration-300 group-hover:scale-105" />
                <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70 group-hover:opacity-50"></div>
                <div class="relative mt-auto p-4">
                    <h3 class="text-lg font-semibold text-white">Fellowship Awards</h3>
                </div>
            </a>

            <a href="#" onclick="openModal('assets/web/archeives/12.jpg')" class="group relative flex flex-col overflow-hidden rounded-lg shadow-lg transition duration-300 hover:shadow-xl">
                <img src="assets/web/archeives/12.jpg" alt="Hindi Speaking"
                    class="h-60 w-full object-cover object-center transition duration-300 group-hover:scale-105" />
                <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70 group-hover:opacity-50"></div>
                <div class="relative mt-auto p-4">
                    <h3 class="text-lg font-semibold text-white">Anti caste activism in US</h3>
                </div>
            </a>

            
        </div>
        <!-- Gallery Grid - End -->
    </div>
</div>

<!-- Modal -->
<div id="imageModal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-80 flex items-center justify-center">
    <div class="relative w-full max-w-4xl p-4">
        <!-- Added max-height and auto width for smaller modal -->
        <img id="modalImage" src="" alt="Modal Image" class="rounded-lg shadow-lg max-h-[80vh] w-auto">
        <button onclick="closeModal()" class="absolute top-4 right-4 text-white text-2xl font-bold">&times;</button>
    </div>
</div>

<script>
    function openModal(imageSrc) {
        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');
        modalImage.src = imageSrc;
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }

    function closeModal() {
        const modal = document.getElementById('imageModal');
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }

    // Close the modal when clicking outside the image
    document.getElementById('imageModal').addEventListener('click', function (event) {
        if (event.target === this) {
            closeModal();
        }
    });
</script>

<?php
include "includes/footer.php";
?>
