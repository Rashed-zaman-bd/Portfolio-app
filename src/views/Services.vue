<template>
  <div class="flex-1 flex flex-col">
    <!-- Header with Fade-Up Animation -->
    <div class="flex flex-col" data-aos="fade-up" data-aos-duration="1000">
      <h1
        class="text-2xl md:text-4xl md:font-bold font-semibold text-gray-800 mx-4 xl:mx-4 2xl:mx-30 md:mt-6"
      >
        Services
      </h1>
      <div class="w-16 h-1 bg-gray-300 mx-4 mb-4 2xl:mx-30"></div>
      <h1 class="text-base italic text-gray-700 mx-4 xl:mx-4 2xl:mx-30">
        Explore the range of services I offer to help your business thrive online.
      </h1>
    </div>

    <!-- Services Grid -->
    <div
      class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mx-4 xl:mx-4 2xl:mx-30 mt-4 mb-6"
      data-aos="fade-up"
      data-aos-duration="2000"
    >
      <div
        class="bg-white rounded-lg shadow-md p-6 border border-gray-200 hover:shadow-lg transition-shadow"
      >
        <div class="flex items-center justify-center mb-4">
          <i class="bi-code-slash text-gray-500 text-3xl"></i>
        </div>
        <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center">
          Web Development
        </h3>
        <p class="text-gray-600 text-sm md:text-base text-center">
          Building responsive and scalable websites using PHP, Laravel, and Vue.js.
        </p>
      </div>
      <div
        class="bg-white rounded-lg shadow-md p-6 border border-gray-200 hover:shadow-lg transition-shadow"
      >
        <div class="flex items-center justify-center mb-4">
          <i class="bi-brush text-gray-500 text-3xl"></i>
        </div>
        <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center">UI/UX Design</h3>
        <p class="text-gray-600 text-sm md:text-base text-center">
          Crafting intuitive and modern user interfaces with Tailwind CSS and Bootstrap.
        </p>
      </div>
      <div
        class="bg-white rounded-lg shadow-md p-6 border border-gray-200 hover:shadow-lg transition-shadow"
      >
        <div class="flex items-center justify-center mb-4">
          <i class="bi-server text-gray-500 text-3xl"></i>
        </div>
        <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center">
          API Development
        </h3>
        <p class="text-gray-600 text-sm md:text-base text-center">
          Creating robust RESTful APIs with Laravel and integrating third-party services.
        </p>
      </div>
      <div
        class="bg-white rounded-lg shadow-md p-6 border border-gray-200 hover:shadow-lg transition-shadow"
      >
        <div class="flex items-center justify-center mb-4">
          <i class="bi-database text-gray-500 text-3xl"></i>
        </div>
        <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center">
          Database Management
        </h3>
        <p class="text-gray-600 text-sm md:text-base text-center">
          Designing and optimizing MySQL databases for performance and scalability.
        </p>
      </div>
      <div
        class="bg-white rounded-lg shadow-md p-6 border border-gray-200 hover:shadow-lg transition-shadow"
      >
        <div class="flex items-center justify-center mb-4">
          <i class="bi-robot text-gray-500 text-3xl"></i>
        </div>
        <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center">
          AI Agent Development
        </h3>
        <p class="text-gray-600 text-sm md:text-base text-center">
          Developing intelligent AI agents to automate and enhance business processes.
        </p>
      </div>
      <div
        class="bg-white rounded-lg shadow-md p-6 border border-gray-200 hover:shadow-lg transition-shadow"
      >
        <div class="flex items-center justify-center mb-4">
          <i class="bi-tools text-gray-500 text-3xl"></i>
        </div>
        <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center">
          Maintenance & Support
        </h3>
        <p class="text-gray-600 text-sm md:text-base text-center">
          Providing ongoing support and updates for your web applications.
        </p>
      </div>
    </div>

    <!-- Skills Section -->
    <div
      class="mx-4 xl:mx-4 2xl:mx-30 mt-4 mb-6"
      data-aos="fade-up"
      data-aos-duration="2000"
    >
      <h1 class="text-2xl md:text-4xl md:font-bold font-semibold text-gray-800 mb-6">
        Skills
      </h1>

      <!-- Grid same style as Services -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div v-for="skill in skills" :key="skill.name">
          <div class="flex items-center justify-between mb-2">
            <span class="font-medium text-gray-800">{{ skill.name }}</span>
            <span class="text-sm text-gray-600">{{ skill.level }}%</span>
          </div>
          <div class="w-full bg-gray-200 rounded-full h-2.5 overflow-hidden">
            <!-- Animated Progress -->
            <div
              class="bg-gray-500 h-2.5 rounded-full transition-all duration-1000 ease-out"
              :class="{ 'w-0': !animated, 'w-[var(--level)]': animated }"
              :style="{ '--level': skill.level + '%' }"
            ></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
import { ref, onMounted } from "vue";

interface Skill {
  name: string;
  level: number;
}

const skills: Skill[] = [
  { name: "n8n", level: 80 },
  { name: "PHP", level: 70 },
  { name: "Laravel", level: 80 },
  { name: "Vue", level: 80 },
  { name: "JavaScript", level: 75 },
  { name: "HTML", level: 90 },
  { name: "CSS", level: 85 },
  { name: "Photoshop", level: 50 },
];

const animated = ref(false);

onMounted(() => {
  // Start animation after component is mounted
  setTimeout(() => {
    animated.value = true;
  }, 300);
});
</script>

<style scoped>
/* Allow dynamic width with CSS variable */
</style>

<style scoped>
.text-center,
.grid > div {
  transition: opacity 0.7s ease-in-out, transform 0.7s ease-in-out;
}

.w-\[var\(--level\)\] {
  width: var(--level);
}
</style>
