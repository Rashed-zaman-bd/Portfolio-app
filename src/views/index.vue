<template>
  <div class="flex-1 flex flex-col" v-for="heroPage in heroPages" :key="heroPage.id">
    <!-- Row with two sections -->
    <div class="flex flex-col md:flex-row md:mt-20">
      <!-- Left content -->
      <div
        class="flex flex-col justify-center items-center w-full md:w-2/3"
        data-aos="fade-up"
        data-aos-duration="1000"
      >
        <div>
          <h3
            class="text-md font-normal md:font-medium border-1 border-gray-800 p-1 md:p-2 text-black md:tracking-[2px]"
          >
            {{ heroPage.keyLine }}
          </h3>
        </div>
        <div class="p-4 md:p-6 justify-center items-center">
          <h2 class="text-xl md:text-4xl text-gray-700">
            {{ heroPage.title }}
          </h2>
          <h1
            class="md:text-7xl sm:text-5xl text-2xl text-black font-bold pt-1 md:tracking-[1px]"
          >
            {{ heroPage.short_title }}
          </h1>
        </div>
        <div
          class="mt-6 md:mt-12 flex flex-row justify-center items-start md:items-center space-x-2 md:space-x-4"
        >
          <router-link
            v-for="button in heroPage.buttons"
            :key="button.label"
            :to="button.to"
            :class="button.class"
          >
            {{ button.label }}
          </router-link>
        </div>
      </div>

      <!-- Right content (image) -->
      <div
        class="flex justify-center items-center w-full md:w-1/3 p-8"
        data-aos="fade-up"
        data-aos-duration="1000"
      >
        <img :src="heroPage.img" alt="Hero Image" class="max-w-full h-auto" />
      </div>
    </div>

    <!-- About section -->
    <div
      class="flex justify-center mt-2 md:mt-20"
      data-aos="fade-up"
      data-aos-duration="2000"
    >
      <div class="max-w-5xl text-center">
        <p class="text-xl md:text-2xl tracking-[1px] font-semibold mb-2">About me</p>
        <p
          class="text-gray-700 leading-relaxed p-4 text-justify md:text-center text-sm md:text-base lg:text-center max-w-5xl mx-auto"
        >
          {{ heroPage.message }}
        </p>
        <router-link to="/about" class="inline-flex items-center p-2 text-black">
          <span>more</span>
          <i class="bi bi-arrow-right ml-1"></i>
        </router-link>
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
import { ref, onMounted } from "vue";
import api from "@/api/axios";

// Reactive array for hero pages
const heroPages = ref<any[]>([]);

onMounted(async () => {
  try {
    // Fetch hero data
    const heroResponse = await api.get("/hero/page");

    // If API returns an array
    if (Array.isArray(heroResponse.data)) {
      heroPages.value = heroResponse.data.map((item: any) => ({
        ...item,
        buttons: [
          {
            label: "Resume",
            to: "/resume",
            class:
              "bg-gray-800 text-white px-3 md:px-6 md:py-2 border-1 border-black text-md md:text-lg md:tracking-[2px] hover:bg-white hover:text-gray-800 w-full md:w-auto mb-4 md:mb-0",
          },
          {
            label: "Project",
            to: "/project",
            class:
              "bg-white text-gray-800 px-3 md:px-6 md:py-2 border-1 border-black text-md md:text-lg md:tracking-[2px] hover:bg-gray-800 hover:text-white w-full md:w-auto",
          },
        ],
      }));
    } else {
      // If API returns a single object
      heroPages.value = [
        {
          ...heroResponse.data,
          buttons: [
            {
              label: "Resume",
              to: "/resume",
              class:
                "bg-gray-800 text-white px-3 md:px-6 md:py-2 border-1 border-black text-md md:text-lg md:tracking-[2px] hover:bg-white hover:text-gray-800 w-full md:w-auto mb-4 md:mb-0",
            },
            {
              label: "Project",
              to: "/project",
              class:
                "bg-white text-gray-800 px-3 md:px-6 md:py-2 border-1 border-black text-md md:text-lg md:tracking-[2px] hover:bg-gray-800 hover:text-white w-full md:w-auto",
            },
          ],
        },
      ];
    }
  } catch (error) {
    console.error("Failed to fetch hero data:", error);
  }
});
</script>

<style scoped>
[data-aos="fade-up"] {
  overflow: hidden;
  backface-visibility: hidden;
  will-change: transform, opacity;
}
</style>
