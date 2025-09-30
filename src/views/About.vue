<template>
  <div class="flex-1 flex flex-col">
    <!-- About Section -->
    <div class="flex flex-col xl:mx-24">
      <h1
        class="text-2xl md:text-4xl md:font-bold font-semibold text-gray-800 mx-4 md:mt-6"
        data-aos="fade-up"
        data-aos-duration="1000"
      >
        About
      </h1>
      <div
        class="w-16 h-1 bg-gray-300 mx-4 mb-4"
        data-aos="fade-up"
        data-aos-duration="1000"
      ></div>
      <p
        class="text-sm md:text-base text-gray-700 mx-4 text-justify leading-relaxed"
        data-aos="fade-up"
        data-aos-duration="1000"
      >
        I am a professional <strong>Full-Stack Web Developer</strong> with over 2 years
        experience in developing modern, user-friendly web applications. My core expertise
        lies in <strong>PHP</strong>, <strong>Laravel</strong>,
        <strong>RESTful API</strong>, <strong>Vue.js</strong>, <strong>Nuxt.js</strong>,
        <strong>Inertia.js</strong>, <strong>MySQL</strong>,
        <strong>JavaScript</strong> where I build clean, scalable, and maintainable
        solutions that help businesses grow faster in the digital space.<br />
        I have a solid foundation in <strong>HTML</strong>, <strong>CSS</strong>,
        <strong>Bootstrap</strong> and <strong>Tailwind CSS</strong>, combined with
        professional skills in <strong>RESTful API</strong> development,
        <strong>MySQL</strong> database design, and responsive
        <strong>UI/UX</strong> implementation. I am capable of transforming ideas into
        real-world applications—whether it’s creating custom business solutions,
        optimizing performance, or integrating <strong>third-party APIs</strong>.<br />
        What sets me apart is my commitment to writing clean code, my ability to quickly
        adapt to new technologies, and my focus on collaboration and teamwork. I enjoy
        tackling complex challenges, learning continuously, and delivering solutions that
        balance performance, usability, and scalability.<br />
        Also, developing and integrating <strong>AI Agents</strong> to automate workflows,
        enhance customer interactions, and improve business efficiency. Skilled in
        connecting AI-powered chat models with backend APIs, building intelligent
        assistants for tasks such as data processing, reporting, and customer support.
      </p>
    </div>

    <!-- Image + Info Section -->
    <div class="flex flex-col md:flex-row">
      <!-- Left Image -->
      <div
        class="flex md:w-1/3 w-full justify-center items-center"
        data-aos="fade-up"
        data-aos-duration="1000"
      >
        <img
          src="../assets/img/img3.png"
          alt="Profile"
          class="md:w-[300px] md:h-[300px] w-[200px] h-[210px] object-cover rounded-lg shadow"
        />
      </div>

      <!-- Right Info -->
      <div class="flex md:w-2/3 w-full p-2">
        <div class="flex flex-col" data-aos="fade-up" data-aos-duration="1000">
          <!-- Who I'm -->
          <div>
            <h1
              class="text-xl md:mt-8 md:text-2xl md:font-bold font-semibold text-gray-800"
            >
              Who I'm
            </h1>
            <p class="text-sm italic md:text-base text-gray-700">
              Simply put, I am a full-stack web developer with PHP Laravel and Vue.js. And
              AI agent developer.
            </p>
          </div>

          <!-- Two Column Info -->
          <div
            class="flex flex-col md:flex-row md:flex-wrap md:justify-between mt-6 gap-6"
          >
            <!-- Left Column -->
            <ul class="flex flex-col gap-6 flex-1 min-w-[260px]">
              <li class="flex items-center gap-2">
                <i class="bi bi-chevron-double-right text-gray-600"></i>
                <span class="font-bold text-sm md:text-base w-28 shrink-0">Name:</span>
                <span class="text-gray-700 text-sm md:text-base">Rashed Zaman</span>
              </li>
              <li class="flex items-center gap-2">
                <i class="bi bi-chevron-double-right text-gray-600"></i>
                <span class="font-bold text-sm md:text-base w-28 shrink-0">Phone:</span>
                <span class="text-gray-700 text-sm md:text-base">+880 1747 107658</span>
              </li>
              <li class="flex items-center gap-2">
                <i class="bi bi-chevron-double-right text-gray-600"></i>
                <span class="font-bold text-sm md:text-base w-28 shrink-0">Website:</span>
                <span class="text-gray-700 text-sm md:text-base">www.rashed-bd.com</span>
              </li>
            </ul>

            <!-- Right Column -->
            <ul class="flex flex-col gap-6 flex-1 min-w-[260px]">
              <li class="flex items-center gap-2">
                <i class="bi bi-chevron-double-right text-gray-600"></i>
                <span class="font-bold w-28 shrink-0">Degree:</span>
                <span class="text-gray-700 text-sm md:text-base">Master</span>
              </li>
              <li class="flex items-center gap-2">
                <i class="bi bi-chevron-double-right text-gray-600"></i>
                <span class="font-bold w-28 shrink-0">Email:</span>
                <span class="text-gray-700 text-sm md:text-base">info@rashed-bd.com</span>
              </li>
              <li class="flex items-center gap-2">
                <i class="bi bi-chevron-double-right text-gray-600"></i>
                <span class="font-bold w-28 shrink-0">Freelance:</span>
                <span cles="text-gray-700 text-sm md:text-base">Available</span>
              </li>
            </ul>
          </div>

          <!-- Closing Paragraph -->
          <div class="flex pt-6 pr-2 2xl:mr-22">
            <p class="text-gray-700 text-sm md:text-base text-justify leading-relaxed">
              Let’s build something extraordinary together! With my expertise in AI agent
              or full-stack development and a passion for creating innovative,
              high-quality solutions, I’m ready to help you bring your ideas to life.
              Whether it’s a custom web application, a scalable API, or an engaging user
              interface, I’m here to deliver results that drive your success. Reach out
              today, and let’s turn your vision into reality.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Statistics Section -->
    <div
      class="flex justify-center items-center py-10 px-2"
      data-aos="fade-up"
      data-aos-duration="1000"
    >
      <div class="flex justify-around items-center w-full max-w-6xl space-x-8">
        <div class="text-center">
          <i class="bi bi-emoji-smile text-gray-500 text-2xl md:text-4xl"></i>
          <p class="text-xl md:text-3xl font-bold text-gray-800 mt-2">
            {{ happyClients }}
          </p>
          <p class="text-gray-700 text-sm md:text-lg">Happy Clients</p>
        </div>
        <div class="text-center">
          <i class="bi bi-file-earmark-text text-gray-500 text-2xl md:text-4xl"></i>
          <p class="text-xl md:text-3xl font-bold text-gray-800 mt-2">{{ projects }}</p>
          <p class="text-gray-700 text-sm md:text-lg">Projects</p>
        </div>
        <div class="text-center">
          <i class="bi bi-headset text-gray-500 text-2xl md:text-4xl"></i>
          <p class="text-xl md:text-3xl font-bold text-gray-800 mt-2">{{ hours }}</p>
          <p class="text-gray-700 text-sm md:text-lg">Hours of Support</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
import { ref, onMounted } from "vue";

const happyClients = ref(0);
const projects = ref(0);
const hours = ref(0);

const targets = [10, 15, 600]; // Target values for each statistic

const animateCount = (
  statRef: typeof ref,
  start: number,
  end: number,
  duration: number
) => {
  let startTimestamp: number | null = null;
  const step = (timestamp: number) => {
    if (!startTimestamp) startTimestamp = timestamp;
    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
    statRef.value = Math.floor(progress * (end - start) + start);
    if (progress < 1) {
      requestAnimationFrame(step);
    } else {
      statRef.value = end;
    }
  };
  requestAnimationFrame(step);
};

onMounted(() => {
  animateCount(happyClients, 0, targets[0], 2000);
  setTimeout(() => animateCount(projects, 0, targets[1], 2000), 200);
  setTimeout(() => animateCount(hours, 0, targets[2], 2000), 400);
});
</script>

<style scoped>
[data-aos="fade-up"] {
  overflow: hidden;
  backface-visibility: hidden;
  will-change: transform, opacity;
}
</style>
