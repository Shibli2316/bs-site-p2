<?php
include "header.php";
?>



<div class="flex items-center justify-center h-screen">
    <div class="relative h-screen w-full sm:w-4/5 overflow-hidden">
        <!-- Background Image -->
        <img src="../assets/team.jpg" alt="Profile Background"
            class="absolute inset-0 w-full h-full object-cover rounded-none sm:rounded-lg m-0 sm:m-4 opacity-50">

        <!-- Overlay for Name and Title -->
        <div class="absolute inset-0 flex flex-col justify-center items-center text-center px-4">
            <h2 class="text-4xl sm:text-6xl font-bold text-black">Good Event</h2>
            <p class="text-lg sm:text-xl text-black-200 mt-2">Ajeet</p>
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
                    <h3 class="text-3xl sm:text-5xl font-bold text-white">720</h3>
                    <p class="text-sm text-gray-300">Participants Worldwide</p>
                </div>

                <!-- Register Button -->
                <div class="text-center flex items-center justify-center">
                    <a href="eventRegister.php">
                        <button class="px-4 py-2 bg-emerald-500 text-white font-bold rounded-full hover:bg-emerald-600">
                            Register Now
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Additional Sections -->
<div class="mt-12 max-w-7xl mx-auto px-6">
    <!-- <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 text-center mb-12">
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
    </div> -->



    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 text-center mb-12">
        <div class="col-span-full">
            <h3 class="text-lg font-bold">Good Event</h3>
            <p class="text-gray-500">A great social event brings together people from diverse backgrounds, fostering a
                sense of community and unity. It serves as a platform for individuals to engage, share ideas, and create
                meaningful connections. Whether it's a charity fundraiser, a cultural gathering, or a local meet-up,
                such events are characterized by warmth, inclusivity, and positive energy. They offer an opportunity for
                participants to not only have fun but also contribute to causes greater than themselves, making a
                lasting impact on both individuals and the community as a whole. Through collaborative efforts, these
                social events help build stronger, more compassionate societies.</p>
        </div>
    </div>

    <!-- Education, Experience, and Interests -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        <!-- Education -->
        <div class="bg-gray-100 p-6 rounded-lg">
            <h3 class="text-xl font-bold mb-4">Timing of the event</h3>
            <div class="mb-4">
                <p class="text-sm text-gray-500">Week Days</p>
                <h4 class="font-semibold">Bachelors in Engineering in Information Technology</h4>
                <p class="text-gray-500">Bachelors in Engineering in Information Technology</p>
            </div>
            <div>
                <p class="text-sm text-gray-500">Weekends</p>
                <h4 class="font-semibold">Masters in Data Analysis</h4>
                <p class="text-gray-500">Harvard School of Science and Management</p>
            </div>
        </div>

        <!-- Experiences -->
        <div class="bg-gray-50 p-6 rounded-lg">
            <h3 class="text-xl font-bold mb-4">What you will Learn</h3>
            <div class="mb-4">

                <h4 class="font-semibold">Creative Design</h4>
                <p class="text-gray-500">iacentem substantiates um se sed esse haec Possit facis qui a a a patriam.</p>
            </div>
            <div>

                <h4 class="font-semibold">Project Management</h4>
                <p class="text-gray-500">iacentem substantiates um se sed esse haec Possit facis qui a a a patriam.</p>
            </div>
        </div>

        <!-- Interests -->
        <div class="bg-gray-100 p-6 rounded-lg">
            <h3 class="text-xl font-bold mb-4">Future Aspects</h3>
            <div class="mb-4">

                <h4 class="font-semibold">Bachelors in Engineering in Information Technology</h4>
                <p class="text-gray-500">Bachelors in Engineering in Information Technology</p>
            </div>
            <div>

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
            <h3 class="text-2xl font-semibold text-blue-500 mb-4">About the Speaker</h3>
            <p class="text-gray-600 text-lg leading-relaxed">Bharat is a remarkable person whose passion for social work
                and making a positive change in society is evident in everything he does. His tireless efforts and
                unwavering dedication to improving the lives of others are commendable. Bharat’s contributions to the
                community serve as an inspiration to all who know him.</p>
        </div>
    </div>




</div>





<!-- Testimonial Section -->

<link href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/keen-slider.min.css" rel="stylesheet" />

<script type="module">
    import KeenSlider from 'https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/+esm'

    const keenSlider = new KeenSlider(
        '#keen-slider',
        {
            loop: true,
            slides: {
                origin: 'center',
                perView: 1.25,
                spacing: 16,
            },
            breakpoints: {
                '(min-width: 1024px)': {
                    slides: {
                        origin: 'auto',
                        perView: 2.5,
                        spacing: 32,
                    },
                },
            },
        },
        []
    )

    const keenSliderPrevious = document.getElementById('keen-slider-previous')
    const keenSliderNext = document.getElementById('keen-slider-next')

    keenSliderPrevious.addEventListener('click', () => keenSlider.prev())
    keenSliderNext.addEventListener('click', () => keenSlider.next())
</script>

<section class="bg-gray-50">
    <div class="mx-auto px-4 py-12 sm:px-6 lg:me-0 lg:py-16 lg:pe-0 lg:ps-8 xl:py-24">
        <div class="max-w-7xl items-end justify-between sm:flex sm:pe-6 lg:pe-8">
            <h2 class="max-w-xl text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">
                Read trusted reviews from our students
            </h2>

            <div class="mt-8 flex gap-4 lg:mt-0">
                <button aria-label="Previous slide" id="keen-slider-previous"
                    class="rounded-full border border-rose-600 p-3 text-rose-600 transition hover:bg-rose-600 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-5 rtl:rotate-180">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                </button>

                <button aria-label="Next slide" id="keen-slider-next"
                    class="rounded-full border border-rose-600 p-3 text-rose-600 transition hover:bg-rose-600 hover:text-white">
                    <svg class="size-5 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="-mx-6 mt-8 lg:col-span-2 lg:mx-0">
            <div id="keen-slider" class="keen-slider">
                <div class="keen-slider__slide">
                    <blockquote class="flex h-full flex-col justify-between bg-white p-6 shadow-sm sm:p-8 lg:p-12">
                        <div>
                            <div class="flex gap-0.5 text-green-500">
                                <svg class="size-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>

                                <svg class="size-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>

                                <svg class="size-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>

                                <svg class="size-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>

                                <svg class="size-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>

                            <div class="mt-4">
                                <p class="text-2xl font-bold text-rose-600 sm:text-3xl">Very Good</p>

                                <p class="mt-4 leading-relaxed text-gray-700">
                                    "The Anti-Caste Campaign event was truly inspiring! It brought together individuals
                                    from all walks of life, united in the mission to raise awareness and make a
                                    difference. The atmosphere was filled with energy and positivity, and it was
                                    heartwarming to see so many people coming together to support such an important
                                    cause. I left the event feeling motivated and hopeful, knowing that change is
                                    possible when we work together."
                                </p>
                            </div>
                        </div>

                        <footer class="mt-4 text-sm font-medium text-gray-700 sm:mt-6">
                            &mdash; Pankaj
                        </footer>
                    </blockquote>
                </div>

                <div class="keen-slider__slide">
                    <blockquote class="flex h-full flex-col justify-between bg-white p-6 shadow-sm sm:p-8 lg:p-12">
                        <div>
                            <div class="flex gap-0.5 text-green-500">
                                <svg class="size-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>

                                <svg class="size-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>

                                <svg class="size-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>

                                <svg class="size-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>

                                <svg class="size-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>

                            <div class="mt-4">
                                <p class="text-2xl font-bold text-rose-600 sm:text-3xl">Very Good</p>

                                <p class="mt-4 leading-relaxed text-gray-700">
                                    "The Anti-Caste Campaign event was truly inspiring! It brought together individuals
                                    from all walks of life, united in the mission to raise awareness and make a
                                    difference. The atmosphere was filled with energy and positivity, and it was
                                    heartwarming to see so many people coming together to support such an important
                                    cause. I left the event feeling motivated and hopeful, knowing that change is
                                    possible when we work together."
                                </p>
                            </div>
                        </div>

                        <footer class="mt-4 text-sm font-medium text-gray-700 sm:mt-6">
                            &mdash; Pankaj
                        </footer>
                    </blockquote>
                </div>

                <div class="keen-slider__slide">
                    <blockquote class="flex h-full flex-col justify-between bg-white p-6 shadow-sm sm:p-8 lg:p-12">
                        <div>
                            <div class="flex gap-0.5 text-green-500">
                                <svg class="size-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>

                                <svg class="size-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>

                                <svg class="size-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>

                                <svg class="size-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>

                                <svg class="size-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>

                            <div class="mt-4">
                                <p class="text-2xl font-bold text-rose-600 sm:text-3xl">Very Good</p>

                                <p class="mt-4 leading-relaxed text-gray-700">
                                    "The Anti-Caste Campaign event was truly inspiring! It brought together individuals
                                    from all walks of life, united in the mission to raise awareness and make a
                                    difference. The atmosphere was filled with energy and positivity, and it was
                                    heartwarming to see so many people coming together to support such an important
                                    cause. I left the event feeling motivated and hopeful, knowing that change is
                                    possible when we work together."
                                </p>
                            </div>
                        </div>

                        <footer class="mt-4 text-sm font-medium text-gray-700 sm:mt-6">
                            &mdash; Pankaj
                        </footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
include "footer.php";
?>