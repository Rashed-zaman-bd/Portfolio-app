<template>
  <div class="flex-1 flex flex-col xl:mt-6">
    <!-- Header with Fade-Up Animation -->
    <div class="flex flex-col" data-aos="fade-up" data-aos-duration="1000">
      <h1
        class="text-2xl md:text-4xl md:font-bold font-semibold text-gray-800 ml-4 xl:mx-4 2xl:mx-30"
      >
        Portfolio
      </h1>
      <div class="w-16 h-1 bg-gray-300 mx-4 mb-4 2xl:mx-30"></div>
    </div>

    <!-- Filter Buttons -->
    <div
      class="flex space-x-4 mb-6 mx-4 xl:mx-4 2xl:mx-30"
      data-aos="fade-up"
      data-aos-duration="2000"
    >
      <button
        @click="activeCategory = 'all'"
        :class="[
          'text-sm md:text-lg',
          activeCategory === 'all'
            ? 'text-black font-semibold underline'
            : 'text-gray-600 hover:underline',
        ]"
      >
        ALL
      </button>
      <button
        @click="activeCategory = 'app'"
        :class="[
          'text-sm md:text-lg',
          activeCategory === 'app'
            ? 'text-black font-semibold underline'
            : 'text-gray-600 hover:underline',
        ]"
      >
        APP
      </button>
      <button
        @click="activeCategory = 'product'"
        :class="[
          'text-sm md:text-lg',
          activeCategory === 'product'
            ? 'text-black font-semibold underline'
            : 'text-gray-600 hover:underline',
        ]"
      >
        PRODUCT
      </button>
    </div>

    <!-- Portfolio Grid -->
    <div
      class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mx-4 xl:mx-4 2xl:mx-30"
      data-aos="fade-up"
      data-aos-duration="3000"
    >
      <div
        v-for="item in filteredItems"
        :key="item.id"
        class="relative group overflow-hidden rounded-lg shadow-lg"
      >
        <!-- Image -->
        <img
          :src="item.image"
          alt="Portfolio item"
          class="w-full h-70 object-cover transform transition-transform duration-500 group-hover:scale-110"
        />

        <!-- Overlay -->
        <div
          class="absolute inset-0 bg-black bg-opacity-70 flex flex-col justify-center items-center transition-opacity duration-500 opacity-50 md:opacity-0 md:group-hover:opacity-70"
        >
          <h3 class="text-white text-xl font-semibold mb-4">{{ item.name }}</h3>

          <div class="flex space-x-4 mb-4">
            <button
              @click="openLightbox(item.image)"
              class="text-white text-2xl hover:text-gray-400 transition"
              title="Zoom"
            >
              <i class="bi bi-zoom-in"></i>
            </button>
            <a
              href="#"
              class="text-white text-2xl hover:text-gray-400 transition"
              title="More details"
            >
              <i class="bi bi-link-45deg"></i>
            </a>
          </div>

          <p class="text-gray-300 text-sm text-center px-4">
            {{ item.description }}
          </p>
        </div>
      </div>
    </div>

    <!-- Lightbox Modal -->
    <transition name="fade-zoom">
      <div
        v-if="lightboxImage"
        class="fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center z-50"
        @click.self="closeLightbox"
      >
        <div class="relative w-full max-w-4xl px-4">
          <button
            @click="closeLightbox"
            class="absolute -top-10 right-0 text-white text-3xl hover:text-gray-400"
          >
            &times;
          </button>

          <img
            :src="lightboxImage"
            alt="Lightbox"
            class="w-full rounded-lg shadow-lg transform transition duration-500 scale-95 opacity-0 animate-show"
          />
        </div>
      </div>
    </transition>
    <div
      class="mt-6 md:mt-12 mb-6 flex flex-row justify-center items-start md:items-center space-x-2 md:space-x-4 fade-element"
    >
      <a
        href="https://drive.google.com/file/d/1g7KImaZrAPAnzWuOjbVL8m8KDaOhsK5T/view?usp=sharing"
        target="_blank"
        rel="noopener noreferrer"
        class="text-gray-700 px-3 md:px-6 md:py-2 border border-black text-md md:text-lg md:tracking-[2px] hover:bg-gray-700 hover:text-white md:w-auto block md:inline-block w-full text-center"
      >
        Hair Me
      </a>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "Portfolio",
  data() {
    return {
      lightboxImage: null as string | null,
      activeCategory: "all",
      portfolioItems: [
        {
          id: 1,
          image: new URL("@/assets/img/doctor-5.jpg", import.meta.url).href,
          name: "App Project",
          description: "A modern web app built with Vue & Tailwind.",
          category: "app",
        },
        {
          id: 2,
          image: new URL("@/assets/img/doctor-6.jpg", import.meta.url).href,
          name: "Product Design",
          description: "Branding and product design concept.",
          category: "product",
        },
        {
          id: 3,
          image: new URL("@/assets/img/doctor-7.jpg", import.meta.url).href,
          name: "App Showcase",
          description: "Creative UI/UX portfolio showcase.",
          category: "app",
        },
        {
          id: 4,
          image: new URL("@/assets/img/doctor-8.jpg", import.meta.url).href,
          name: "Product Concept",
          description: "Creative product UI/UX portfolio showcase.",
          category: "product",
        },
        {
          id: 5,
          image: new URL("@/assets/img/doctor-9.jpg", import.meta.url).href,
          name: "Another App",
          description: "Mobile app with sleek animations.",
          category: "app",
        },
        {
          id: 6,
          image: new URL("@/assets/img/doctor-5.jpg", import.meta.url).href,
          name: "E-Commerce Product",
          description: "E-commerce site with modern UI.",
          category: "product",
        },
      ],
    };
  },
  computed: {
    filteredItems() {
      if (this.activeCategory === "all") {
        return this.portfolioItems;
      }
      return this.portfolioItems.filter((item) => item.category === this.activeCategory);
    },
  },
  methods: {
    openLightbox(image: string) {
      this.lightboxImage = image;
    },
    closeLightbox() {
      this.lightboxImage = null;
    },
  },
});
</script>

<style scoped>
/* Lightbox animation */
.fade-zoom-enter-active,
.fade-zoom-leave-active {
  transition: all 0.4s ease;
}
.fade-zoom-enter-from,
.fade-zoom-leave-to {
  opacity: 0;
  transform: scale(0.9);
}
.fade-zoom-enter-to,
.fade-zoom-leave-from {
  opacity: 1;
  transform: scale(1);
}

/* Extra animation for image pop */
@keyframes show {
  0% {
    opacity: 0;
    transform: scale(0.9);
  }
  100% {
    opacity: 1;
    transform: scale(1);
  }
}
.animate-show {
  animation: show 3s ease forwards;
}

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
