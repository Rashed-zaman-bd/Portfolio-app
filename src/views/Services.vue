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
        v-for="service in services"
        :key="service.id"
        class="bg-white rounded-lg shadow-md p-6 border border-gray-200 hover:shadow-lg transition-shadow"
      >
        <div class="flex items-center justify-center mb-4">
          <i :class="service.icon + ' text-gray-500 text-3xl'"></i>
        </div>
        <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center">
          {{ service.name }}
        </h3>
        <p class="text-gray-600 text-sm md:text-base text-center">
          {{ service.description }}
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

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div v-for="skill in skills" :key="skill.id">
          <div class="flex items-center justify-between mb-2">
            <span class="font-medium text-gray-800">{{ skill.name }}</span>
            <span class="text-sm text-gray-600">{{ skill.level }}%</span>
          </div>
          <div class="w-full bg-gray-200 rounded-full h-2.5 overflow-hidden">
            <div
              class="bg-gray-500 h-2.5 rounded-full transition-all duration-1000 ease-out"
              :class="{ 'w-0': !animated }"
              :style="{ width: animated ? skill.level + '%' : '0%' }"
            ></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
import { ref, onMounted } from "vue";
import api from "@/api/axios"; // your axios instance

const services = ref([]);
const skills = ref([]);
const animated = ref(false);

onMounted(async () => {
  document.title = "Services - My Portfolio";
  try {
    const { data } = await api.get("services");
    services.value = data.services;
    skills.value = data.skills;

    // Start skill animation
    setTimeout(() => {
      animated.value = true;
    }, 300);
  } catch (error) {
    console.error("Error fetching services/skills:", error);
  }
});
</script>

<style scoped>
.text-center,
.grid > div {
  transition: opacity 0.7s ease-in-out, transform 0.7s ease-in-out;
}
</style>
