<?php
include "includes/header.php";
?>

<style>
  /* General Glassy Card Styling */
  .glass-card {
    background: rgba(255, 255, 255, 0.2);
    /* Semi-transparent white background */
    border: 1px solid rgba(255, 255, 255, 0.3);
    /* Border for glassy look */
    backdrop-filter: blur(10px);
    /* Blur the background */
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
    /* Soft shadow */
    color: #333;
    /* Default text color for readability */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  /* Hover Effects */
  .glass-card:hover {
    transform: translateY(-5px);
    box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.3);
    /* Enhanced shadow on hover */
  }

  /* Icon Container Styling */
  .icon-container {
    width: 80px;
    height: 80px;
    background: rgba(255, 255, 255, 0.6);
    /* Semi-transparent white */
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    top: -40px;
    left: 50%;
    transform: translateX(-50%);
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.15);
    /* Soft shadow */
  }

  /* Typography for Headings and Paragraphs */
  .glass-card h3 {
    font-size: 1.25rem;
    color: #1a202c;
    /* Dark gray for contrast */
  }

  .glass-card p {
    color:rgb(0, 0, 0);
    /* Slightly lighter gray for text */
  }

  /* Background Styling */
  body {
    background: linear-gradient(135deg, #f0f4f8, #d9e8ff);
    background-attachment: fixed;
  }

  /* Responsive Adjustments */
  @media (max-width: 768px) {
    .glass-card {
      width: 90%;
      /* Adjust card width on smaller screens */
    }
  }
</style>
<!-- START OF SECTION 1 -->

<section class="overflow-hidden bg-gray-50 sm:grid sm:grid-cols-2 sm:items-center">
  <img alt="" src="assets/web/hero.jpg" class="w-full h-auto object-cover sm:h-full sm:order-none order-last" />
  <div class="p-6 md:p-8 lg:px-10 lg:py-12">
    <div class="mx-auto max-w-lg text-center sm:text-left">

      <h1 class="text-xl font-bold text-gray-900 md:text-4xl">
        Bahujan Scholars
      </h1>
      <p class="text-gray-500 mt-2 md:mt-3">
        Mentoring for Social Transformation
      </p>

      <hr class="border-2 border-gray-300 my-3">

      <p class="text-gray-700 text-lg leading-6 mt-3 text-justify">
        Historically, disadvantaged communities in India have faced significant barriers to accessing education.
        This exclusion continues to be a pressing issue, particularly in higher education. Disadvantaged communities
        are underrepresented in elite institutions, and systemic barriers hinder their ability to earn degrees.
        Despite decades of this status quo, systemic change seems elusive. 
      </p>
        <p class="text-gray-700 text-lg leading-6 mt-3 text-justify">
        Research demonstrates the positive impact
        of mentoring on mentees' outcomes and their engagement in their communities. Mentoring is especially crucial
        for youth from disadvantaged backgrounds, providing hope, role models, guidance, and support that formal
        education often lacks. The Bahujan Scholars group, started on WhatsApp, aims to connect Bahujan Scholars
        from outside India. This rapidly growing group, with more than 100 members, includes graduate students, faculty,
        and Scholars. Its purpose is to foster mentoring, support Bahujan Scholars, and organize online events.
      </p>

      <div class="mt-4 text-center">
        <a href="auth/login.php"
          class="inline-block rounded bg-blue-600 px-8 py-2 text-sm font-medium text-white transition hover:bg-blue-700 focus:outline-none focus:ring focus:ring-yellow-400">
          Join
        </a>
      </div>
    </div>
  </div>
</section>


<!-- END OF SECTION 1 -->


<!-- START OF SECTION 2 -->

<section class="text-center py-12 bg-gradient-to-r from-blue-50 via-blue-100 to-blue-50">
  <div class="flex flex-wrap gap-14 justify-center">
    <!-- Vision Card -->
    <div class="glass-card w-72 p-6 rounded-2xl shadow-xl relative pt-14 bg-pink-50 border border-pink-200 hover:shadow-2xl transition-shadow duration-300" style="padding-top: 20px;">
      <!-- <div class="icon-container mx-auto">
        <img src="assets/web/vission.jpg" alt="Icon representing Vision" class="w-16 h-auto rounded-full">
      </div> -->
      <h3 class="text-xl font-bold mt-8 mb-3 text-pink-900">Vision</h3>
      <p class="text-base leading-7 text-gray-700">Bahujan Scholars mentors and empowers disadvantaged youth, inspiring
        them to become committed professionals and transform their lives.</p>
    </div>

    <!-- Mission Card -->
    <div class="glass-card w-72 p-6 rounded-2xl shadow-xl relative pt-14 bg-teal-50 border border-teal-200 hover:shadow-2xl transition-shadow duration-300" style="padding-top: 20px;">
      <!-- <div class="icon-container mx-auto">
        <img src="assets/web/mission.jpg" alt="Icon representing Mission" class="w-16 h-auto rounded-full">
      </div> -->
      <h3 class="text-xl font-bold mt-8 mb-3 text-teal-900">Mission</h3>
      <p class="text-base leading-7 text-gray-700">To mentor young Scholars from disadvantaged communities for graduate
        programs in India and abroad, and to institutionalize mentoring practices in India.</p>
    </div>

    <!-- Values Card -->
    <div class="glass-card w-72 p-6 rounded-2xl shadow-xl relative pt-14 bg-orange-50 border border-orange-200 hover:shadow-2xl transition-shadow duration-300" style="padding-top: 20px;">
      <!-- <div class="icon-container mx-auto">
        <img src="assets/web/value.jpg" alt="Icon representing Values" class="w-16 h-auto rounded-full">
      </div> -->
      <h3 class="text-xl font-bold mt-8 mb-3 text-orange-900">Values</h3>
      <p class="text-base leading-7 text-gray-700">Bahujan Scholars is committed to the <i>"pay back to the society"</i>
        philosophy and for intellectual and educational advancement of disadvantaged communities.</p>
    </div>
  </div>
</section>





<!-- END OF SECTION 2 -->





<!-- START OF TESTIMONIALS SECTION -->
<section class="py-16 px-5 bg-gray-50 flex justify-center">
  <div class="flex flex-col w-full max-w-screen-xl">
    <div class="flex justify-between items-center mb-8">
      <h2 class="text-3xl font-bold text-gray-900">Testimonials</h2>
      <a href="testimonials.php" class="text-blue-600 hover:text-blue-800 font-medium text-base transition">See more</a>
    </div>
    <!-- Carousel Container -->
    <div class="relative">
      <div id="testimonial-carousel" class="flex transition-transform duration-500 justify-center">
        <!-- Testimonial 1 -->
        <div class="testimonial-item bg-white p-8 rounded-lg shadow-lg flex flex-col items-center text-center w-full sm:w-4/5 lg:w-1/3 mx-2">
          <img src="assets/testimonials/1.png" alt="Tasnim Bharmal" class="w-20 h-20 rounded-full mb-4 object-cover border-4 border-blue-200">
          <p class="text-gray-700 text-lg mb-4 italic">
            "The Bahujan Scholar Mentorship Programme profoundly shaped my academic journey by providing crucial guidance during the early stages of my PhD preparation. With dedicated mentorship from <b>Nefeli Forni Zervoudaki</b>, I refined key application materials and secured offers from top universities. I will now pursue funded graduate studies at the <b>University of Göttingen</b>."
          </p>
          <h4 class="text-blue-600 font-semibold">Tasnim Bharmal</h4>
        </div>
        <!-- Testimonial 2 -->
        <div class="testimonial-item bg-white p-8 rounded-lg shadow-lg flex flex-col items-center text-center w-full sm:w-4/5 lg:w-1/3 mx-2">
          <img src="assets/testimonials/2.jpg" alt="Akansha Tanwar" class="w-20 h-20 rounded-full mb-4 object-cover border-4 border-pink-200">
          <p class="text-gray-700 text-lg mb-4 italic">
            "The Bahujan Scholars' Mentoring Program was a transformative and affirming journey, thanks to the compassionate guidance of my mentor, <b>Bonnie Zare</b>. Her support helped me gain clarity and confidence, leading to my admission into the <b>PhD program at IIT Delhi</b>. The program fostered not just academic growth, but also community and shared purpose."
          </p>
          <h4 class="text-pink-600 font-semibold">Akansha Tanwar</h4>
        </div>
        <!-- Testimonial 3 -->
        <div class="testimonial-item bg-white p-8 rounded-lg shadow-lg flex flex-col items-center text-center w-full sm:w-4/5 lg:w-1/3 mx-2">
          <img src="assets/testimonials/3.jpeg" alt="Pradyumna Kumar Siddharth " class="w-20 h-20 rounded-full mb-4 object-cover border-4 border-orange-200">
          <p class="text-gray-700 text-lg mb-4 italic">
            "The Bahujan Mentorship Program was a transformative experience that provided me with guidance, community, and clarity as a first-generation learner. Through personalized mentoring and research support, I refined my goals and gained the confidence to pursue opportunities I once doubted. <b>Above all, the program emphasized collective upliftment and the importance of amplifying Bahujan voices in academia</b>."
          </p>
          <h4 class="text-orange-600 font-semibold">Pradyumna Kumar Siddharth </h4>
        </div>
        <!-- Testimonial 3 -->
        <div class="testimonial-item bg-white p-8 rounded-lg shadow-lg flex flex-col items-center text-center w-full sm:w-4/5 lg:w-1/3 mx-2">
          <img src="assets/testimonials/4.jpg" alt="Suraj Kumar" class="w-20 h-20 rounded-full mb-4 object-cover border-4 border-lime-200">
          <p class="text-gray-700 text-lg mb-4 italic">
            "The Bahujan Scholars Mentoring Programme deeply enriched my research skills and critical thinking, thanks to the dedicated mentorship of <b>Tyler Lehrer</b>. His guidance pushed me to rethink familiar ideas and explore diverse critical perspectives, transforming how I approach my work. I feel intellectually renewed and grateful for this lasting impact and community."
          </p>
          <h4 class="text-lime-600 font-semibold">Suraj Kumar</h4>
        </div>
        <!-- Testimonial 3 -->
        <div class="testimonial-item bg-white p-8 rounded-lg shadow-lg flex flex-col items-center text-center w-full sm:w-4/5 lg:w-1/3 mx-2">
          <img src="assets/testimonials/5.jpg" alt="Umesh Kumar" class="w-20 h-20 rounded-full mb-4 object-cover border-4 border-cyan-200">
          <p class="text-gray-700 text-lg mb-4 italic">
            "The Bahujan Mentorship Program has been a guiding force in my journey as a first-generation learner from a marginalized background. With <b>Dr. Ranga Ram Sir’s</b> thoughtful mentorship, I gained both professional guidance and deeper awareness of identity and roots. His support was instrumental in securing my <b>internship under Dr. Joseph H. Hammer in Social Justice Activism.</b>"
          </p>
          <h4 class="text-cyan-600 font-semibold">Umesh Kumar</h4>
          
        </div>
        <!-- Testimonial 3 -->
        <div class="testimonial-item bg-white p-8 rounded-lg shadow-lg flex flex-col items-center text-center w-full sm:w-4/5 lg:w-1/3 mx-2">
          <img src="assets/testimonials/6.jpg" alt=" Shubham Paikrao" class="w-20 h-20 rounded-full mb-4 object-cover border-4 border-emerald-200">
          <p class="text-gray-700 text-lg mb-4 italic">
            "Joining the Bahujan Mentoring Program was a pivotal step in my academic and professional journey, offering both guidance and direction. With my mentor’s genuine support, <b>I navigated technical challenges and career planning more confidently</b>. I'm truly grateful to be part of a program that fosters such meaningful connections."
          </p>
          <h4 class="text-emerald-600 font-semibold"> Shubham Paikrao</h4>
          
        </div>
        
      </div>
      <!-- Carousel Controls -->
      <button id="testimonial-prev" class="absolute left-0 top-1/2 -translate-y-1/2 bg-white border rounded-full shadow p-2 hover:bg-blue-100 transition z-10">
        <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
        </svg>
      </button>
      <button id="testimonial-next" class="absolute right-0 top-1/2 -translate-y-1/2 bg-white border rounded-full shadow p-2 hover:bg-blue-100 transition z-10">
        <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
        </svg>
      </button>
    </div>
  </div>
</section>
<script>
  // Responsive carousel: 1 at a time on mobile, 3 at a time on lg+
  const items = document.querySelectorAll('.testimonial-item');
  let current = 0;

  function getVisibleCount() {
    if (window.innerWidth >= 1024) return 3; // lg and up
    return 1; // mobile/tablet
  }

  function showTestimonials(idx) {
    const visible = getVisibleCount();
    items.forEach((el, i) => {
      el.classList.add('hidden');
      el.classList.remove('flex');
    });
    for (let i = 0; i < visible; i++) {
      const showIdx = (idx + i) % items.length;
      items[showIdx].classList.remove('hidden');
      items[showIdx].classList.add('flex');
    }
    // Center the visible testimonials horizontally
    document.getElementById('testimonial-carousel').classList.add('justify-center');
  }

  document.getElementById('testimonial-prev').addEventListener('click', () => {
    const visible = getVisibleCount();
    current = (current - visible + items.length) % items.length;
    showTestimonials(current);
  });

  document.getElementById('testimonial-next').addEventListener('click', () => {
    const visible = getVisibleCount();
    current = (current + visible) % items.length;
    showTestimonials(current);
  });

  window.addEventListener('resize', () => showTestimonials(current));

  // Initialize
  showTestimonials(current);
</script>
<!-- END OF TESTIMONIALS SECTION -->

<!-- START OF SECTION 4 -->

<section class="py-16 px-5 bg-gray-50 flex justify-center">
  <div class="flex flex-col-reverse lg:flex-row max-w-screen-xl w-full gap-8">
    <!-- Mentoring Image Section -->
    <div class="flex-1 flex items-center justify-center mb-8 lg:mb-0">
      <img src="assets/web/why-mentor.jpg" alt="Mentoring Image" class="max-w-full h-auto rounded-lg shadow-lg">
    </div>

    <!-- Mentoring Text Section -->
    <div class="flex-1 flex flex-col justify-center px-5 text-left text-gray-900">
      <h2 class="text-3xl font-bold text-gray-900 mb-6">Why is Bahujan Scholars unique?</h2>
      <p class="text-lg text-gray-900 mb-6 leading-relaxed text-justify">
        Bahujan Scholars has a distinct advantage: all members of its network either live outside India or have
        international academic experience. This facilitates strong connections with global academia and an opportunity
        to build ally and Bahujan scholars' networks. Our one-on-one mentoring project is international collaboration,
        pairing mentors from Bahujan Scholars with mentees from India. This unique positionality not only sets Bahujan
        Scholars apart from other mentoring initiatives but also presents great opportunities to build global
        institutional connections.
      </p>
    </div>
  </div>
</section>




<!-- END OF SECTION 4 -->


<?php
include "includes/footer.php";
?>