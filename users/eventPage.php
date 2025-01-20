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

    <!-- Testimonial Section -->


</div>







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
                Read trusted reviews from our customers
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
                                <p class="text-2xl font-bold text-rose-600 sm:text-3xl">Stayin' Alive</p>

                                <p class="mt-4 leading-relaxed text-gray-700">
                                    No, Rose, they are not breathing. And they have no arms or legs … Where are
                                    they?
                                    You know what? If we come across somebody with no arms or legs, do we bother
                                    resuscitating them? I mean, what quality of life do we have there?
                                </p>
                            </div>
                        </div>

                        <footer class="mt-4 text-sm font-medium text-gray-700 sm:mt-6">
                            &mdash; Michael Scott
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
                                <p class="text-2xl font-bold text-rose-600 sm:text-3xl">Stayin' Alive</p>

                                <p class="mt-4 leading-relaxed text-gray-700">
                                    No, Rose, they are not breathing. And they have no arms or legs … Where are
                                    they?
                                    You know what? If we come across somebody with no arms or legs, do we bother
                                    resuscitating them? I mean, what quality of life do we have there?
                                </p>
                            </div>
                        </div>

                        <footer class="mt-4 text-sm font-medium text-gray-700 sm:mt-6">
                            &mdash; Michael Scott
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
                                <p class="text-2xl font-bold text-rose-600 sm:text-3xl">Stayin' Alive</p>

                                <p class="mt-4 leading-relaxed text-gray-700">
                                    No, Rose, they are not breathing. And they have no arms or legs … Where are
                                    they?
                                    You know what? If we come across somebody with no arms or legs, do we bother
                                    resuscitating them? I mean, what quality of life do we have there?
                                </p>
                            </div>
                        </div>

                        <footer class="mt-4 text-sm font-medium text-gray-700 sm:mt-6">
                            &mdash; Michael Scott
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