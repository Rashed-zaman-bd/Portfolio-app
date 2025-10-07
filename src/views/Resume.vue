<template>
  <div class="flex-1 flex flex-col md:mt-16 lg:mt-6">
    <!-- Header with Fade-Up Animation -->
    <div class="flex flex-col" data-aos="fade-up" data-aos-duration="1000">
      <h1
        class="text-2xl md:text-4xl md:font-bold font-semibold text-gray-800 mx-4 xl:mx-4 2xl:mx-30"
      >
        Resume
      </h1>
      <div class="w-16 h-1 bg-gray-300 mx-4 mb-4 2xl:mx-30"></div>
    </div>

    <!-- Main Content -->
    <div
      class="flex flex-col mx-4 xl:mx-4 2xl:mx-30 mt-4 mb-6"
      data-aos="fade-up"
      data-aos-duration="2000"
    >
      <!-- Summary + Education -->
      <div class="flex flex-col md:flex-row gap-6 w-full">
        <!-- Summary Section -->
        <div class="w-full mb-4 md:w-1/2">
          <h2 class="text-lg md:text-xl font-semibold text-gray-900 mb-2">Summary</h2>
          <div class="border-l-4 border-gray-300 p-4">
            <h3 class="text-lg md:text-xl text-gray-800">RASHED ZAMAN</h3>
            <p class="text-base text-gray-700 text-justify">
              I am a Full-Stack Web Developer with over 2 years of experience,
              specializing in <strong>PHP</strong>, <strong>Laravel</strong>,
              <strong>Vue.js</strong>, <strong>RESTfull API</strong> and modern
              <strong>JavaScript</strong> frameworks. I build scalable web applications
              with clean, efficient code and have hands-on expertise in
              <strong>SPA</strong>, <strong>SaaS</strong>, <strong>CRM</strong>, and
              <strong>eCommerce</strong> solutions, and integrate
              <strong>RESTful API</strong> and <strong>third party API</strong>.
              Passionate about problem-solving and continuous learning, I focus on
              delivering high-quality software that creates real value for businesses and
              users.
              <br />
              Also, developing and integrating <strong>AI Agents</strong> to automate
              workflows, enhance customer interactions, and improve business efficiency.
              Skilled in connecting AI-powered chat models with backend APIs, building
              intelligent assistants for tasks such as data processing, reporting, and
              customer support.
            </p>
          </div>
        </div>

        <!-- Education Section -->
        <div class="w-full md:w-1/2">
          <h2 class="text-lg md:text-xl font-semibold text-gray-900 mb-2">Education</h2>
          <div class="border-l-4 border-gray-300 pl-4">
            <h3 class="text-lg md:text-xl text-gray-800">
              FULL STACK DEVELOPMENT PHP & LARAVEL
            </h3>
            <p class="text-gray-700">2021 - 2022</p>
            <p class="text-gray-700 text-base mb-2">Uttara, Dhaka, Bangladesh</p>
            <p class="text-gray-700 text-base">
              Completed a professional training program in Full-Stack Web Development with
              a focus on
              <strong>PHP, Laravel, JavaScript, Vue.js, MySQL</strong>, and modern
              frontend frameworks. Gained hands-on experience in building real-world
              applications and integrating RESTful APIs.
            </p>

            <h3 class="text-lg md:text-xl text-gray-800 mt-4">MASTER OF MATHEMATICS</h3>
            <p class="text-gray-700">2013 - 2014</p>
            <p class="text-gray-700 text-base mb-2">National University</p>
            <p class="text-gray-700 text-base">
              Developed strong analytical and problem-solving skills through coursework in
              mathematics and applied logic. These skills now support my ability to write
              clean code, optimize algorithms, and approach software development with a
              structured mindset.
            </p>
          </div>
        </div>
      </div>

      <!-- Professional Experience Section -->
      <div class="">
        <h2 class="text-lg md:text-xl font-semibold text-gray-900 mt-6">
          Professional Experience
        </h2>
        <div class="flex flex-col md:flex-row w-full gap-6">
          <div class="border-l-4 border-gray-300 p-4 flex flex-col w-full md:w-1/2">
            <h3 class="text-lg md:text-xl text-gray-800">Freelance Web Developer</h3>
            <p class="text-gray-700 mb-2">2022 - Present</p>
            <ul class="list-disc list-inside text-gray-600 mt-2 space-y-2">
              <li>
                Built and deployed several full-stack web projects using LARAVEL and
                Vue.js
              </li>
              <li>Strong knowledge of OOP, MVC architecture, and design patterns.</li>
              <li>
                Design and implement RESTful APIs and integrate with third party services
                and authentication methods OAuth, JWT, Sanctum, Cookie, Session and
                caching strategies.
              </li>
              <li>
                Work in an agile environment, contributing to continuous integration &
                deployment
              </li>
              <li>
                Collaborate with front-end engineers and product managers to deliver
                end-to-end features.
              </li>
            </ul>
          </div>

          <div class="border-l-4 border-gray-300 p-4 flex flex-col w-full md:w-1/2">
            <h3 class="text-lg md:text-xl text-gray-800">
              Front-End Web Developer (Remote)
            </h3>
            <p class="text-gray-700 mb-2">February 2025 - August 2025</p>
            <p class="text-gray-700 mb-2">4Beats Ltd, Adabar, Shamoly, Dhaka</p>
            <ul class="list-disc list-inside text-gray-700 mb-2 mt-2 space-y-2">
              <li>
                Architect, develop, and maintain responsive interfaces using Vue.js 3 and
                the Composition API
              </li>
              <li>
                Lead implementation of Nuxt.js for SSR and static-site generation,
                Developed front-end interfaces using Nuxt.js, DevExtreme, and Tailwind CSS
              </li>
              <li>
                Integrated RESTful APIs and ensured responsive, cross browser
                functionality.
              </li>
              <li>
                Collaborated with back-end developers to align UI with application logic.
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Resume Button -->
    <div
      class="flex flex-row justify-center items-start md:items-center w-full px-4 mb-6 fade-element"
    >
      <!-- Option 1: Link to Resume Page -->
      <!--
      <router-link
        to="/resume"
        class="text-gray-700 px-3 md:px-6 md:py-2 border border-black text-md md:text-lg md:tracking-[2px] hover:bg-gray-700 hover:text-white md:w-auto block md:inline-block w-full text-center"
      >
        Download Resume
      </router-link>
      -->

      <!-- Option 2: Direct PDF Download -->
      <a
        href="https://drive.google.com/file/d/1g7KImaZrAPAnzWuOjbVL8m8KDaOhsK5T/view?usp=sharing"
        download
        class="text-gray-700 px-3 md:px-6 md:py-2 border border-black text-md md:text-lg md:tracking-[2px] hover:bg-gray-700 hover:text-white md:w-auto block md:inline-block w-full text-center"
        target="_blank"
      >
        Download Resume
      </a>
    </div>
  </div>
</template>

<script setup lang="ts">
import { onMounted } from "vue";
onMounted(() => {
  document.title = "Resume - My Portfolio";
});
</script>

<style scoped>
/* Define the fade animation */
@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

/* Apply the animation to an element */
.fade-element {
  animation: fadeIn 12s ease-in-out forwards;
}
</style>
