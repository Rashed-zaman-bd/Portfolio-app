<template>
  <div class="flex-1 flex flex-col">
    <!-- Row with two sections -->
    <div class="flex flex-col md:flex-row md:mt-20">
      <div
        class="flex flex-col justify-center items-center w-full md:w-2/3 overflow: hidden;"
        data-aos="fade-up"
        data-aos-duration="1000"
      >
        <div>
          <h3
            class="text-md font-normal md:font-medium border-1 border-gray-800 p-1 md:p-2 text-black md:tracking-[2px]"
          >
            Design & Development
          </h3>
        </div>
        <div class="p-4 md:p-6 justify-center items-center">
          <h2 class="text-xl md:text-4xl text-gray-700">I can help your business to</h2>
          <h1
            class="md:text-7xl sm:text-5xl text-2xl text-black font-bold pt-1 md:tracking-[1px]"
          >
            Get online and grow fast
          </h1>
        </div>
        <div
          class="mt-6 md:mt-12 flex flex-row justify-center items-start md:items-center space-x-2 md:space-x-4"
        >
          <router-link
            to="/resume"
            class="bg-gray-800 text-white px-3 md:px-6 md:py-2 border-1 border-black text-md md:text-lg md:tracking-[2px] hover:bg-white hover:text-gray-800 w-full md:w-auto mb-4 md:mb-0"
            >Resume</router-link
          >
          <router-link
            to="/project"
            class="bg-white text-gray-800 px-3 md:px-6 md:py-2 border-1 border-black text-md md:text-lg md:tracking-[2px] hover:bg-gray-800 hover:text-white w-full md:w-auto"
            >Project</router-link
          >
        </div>
      </div>
      <div
        class="flex justify-center items-center w-full md:w-1/3 p-8"
        data-aos="fade-up"
        data-aos-duration="1000"
      >
        <img src="@/assets/img/img2.jpg" alt="Profile Image" class="max-w-full h-auto" />
      </div>
    </div>

    <!-- About section -->
    <div
      class="flex justify-center mt-2 md:mt-20 overflow: hidden;"
      data-aos="fade-up"
      data-aos-duration="2000"
    >
      <div class="max-w-5xl text-center">
        <p class="text-xl md:text-2xl tracking-[1px] font-semibold mb-2">About me</p>
        <p
          class="text-gray-700 leading-relaxed p-4 text-justify md:text-center text-sm md:text-base lg:text-center max-w-5xl mx-auto"
        >
          I believe in open communication and teamwork when solving problems. Whether
          you're just starting out or have an established business, I work with you to
          understand your goals and turn them into high-quality code that gets results.
          Dedicated and committed Web Developer with over 2 years of experience in
          designing and developing modern web applications. I have professional skill in
          Laravel, Vue.js, RESTful APIs, and MySQL, with a strong foundation in HTML, CSS,
          and JavaScript.
        </p>
        <router-link to="/about" class="inline-flex items-center p-2 text-black">
          <span>more</span>
          <i class="bi bi-arrow-right ml-1"></i>
        </router-link>
      </div>
    </div>
  </div>
</template>

<script setup lang="ts"></script>

<style scoped>
[data-aos="fade-up"] {
  overflow: hidden; /* prevent scrollbar flicker */
  backface-visibility: hidden; /* smoother GPU rendering */
  will-change: transform, opacity; /* hint for performance */
}
</style>
