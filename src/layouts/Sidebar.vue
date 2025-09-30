<template>
  <div class="bg-gray-100 w-full flex flex-col lg:flex-row">
    <!-- Mobile Header -->
    <div
      class="lg:hidden fixed top-0 left-0 w-full flex justify-between items-center bg-gray-800 text-white p-4 z-50"
    >
      <h1 class="text-md md:text-lg font-bold">Rashed Zaman</h1>
      <button @click="toggleSidebar" class="focus:outline-none">
        <!-- Hamburger -->
        <svg
          v-if="!isOpen"
          class="w-6 h-6"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          viewBox="0 0 24 24"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M4 6h16M4 12h16M4 18h16"
          />
        </svg>
        <!-- X -->
        <svg
          v-else
          class="w-6 h-6"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          viewBox="0 0 24 24"
        >
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>

    <div class="flex w-full pt-20 md:pt-0">
      <!-- Sidebar -->
      <div
        ref="sidebarRef"
        :class="[
          'sidebar bg-gray-800 text-white w-72 min-h-screen justify-between transition-transform duration-300 z-50 overflow-hidden flex flex-col lg:static',
          isOpen
            ? 'translate-x-0 fixed top-0 left-0 lg:translate-x-0'
            : '-translate-x-full fixed top-0 left-0 lg:translate-x-0',
        ]"
        @mousemove="updateTarget"
        @mouseleave="hideGlow"
      >
        <!-- Glowing circle -->
        <div
          v-if="hoverLight.visible"
          class="absolute pointer-events-none w-60 h-60 rounded-full bg-white/30 blur-3xl transition-opacity duration-300"
          :style="{
            top: hoverLight.y + 'px',
            left: hoverLight.x + 'px',
            transform: 'translate(-50%, -50%)',
          }"
        ></div>

        <!-- Top Content -->
        <div>
          <div class="flex justify-center items-center py-6">
            <div
              class="border-8 border-gray-600 rounded-full h-36 w-36 overflow-hidden shadow-[0_0_25px_5px_rgba(255,255,255,0.5)]"
            >
              <img
                src="@/assets/img/img.png"
                alt="Profile Image"
                class="rounded-full object-cover w-full h-full"
              />
            </div>
          </div>

          <h1 class="text-2xl text-center mt-2 text-gray-300">Rashed Zaman</h1>

          <!-- Navigation -->
          <nav class="mt-12 flex flex-col gap-2">
            <!-- Home -->
            <router-link to="/" v-slot="{ isActive }" @click="closeSidebar">
              <div
                :class="[
                  'flex items-center gap-3 py-2 px-16 rounded transition tracking-[1px]',
                  isActive
                    ? 'text-white font-semibold'
                    : 'text-gray-400 hover:text-gray-200',
                ]"
              >
                <i class="bi bi-house"></i><span>Home</span>
              </div>
            </router-link>

            <!-- About -->
            <router-link to="/about" v-slot="{ isActive }" @click="closeSidebar">
              <div
                :class="[
                  'flex items-center gap-3 py-2 px-16 rounded transition tracking-[1px]',
                  isActive
                    ? 'text-white font-semibold'
                    : 'text-gray-400 hover:text-gray-200',
                ]"
              >
                <i class="bi bi-file-earmark-person"></i><span>About</span>
              </div>
            </router-link>

            <!-- Resume -->
            <router-link to="/resume" v-slot="{ isActive }" @click="closeSidebar">
              <div
                :class="[
                  'flex items-center gap-3 py-2 px-16 rounded transition tracking-[1px]',
                  isActive
                    ? 'text-white font-semibold'
                    : 'text-gray-400 hover:text-gray-200',
                ]"
              >
                <i class="bi bi-file-earmark-medical"></i><span>Resume</span>
              </div>
            </router-link>

            <!-- Project -->
            <router-link to="/project" v-slot="{ isActive }" @click="closeSidebar">
              <div
                :class="[
                  'flex items-center gap-3 py-2 px-16 rounded transition tracking-[1px]',
                  isActive
                    ? 'text-white font-semibold'
                    : 'text-gray-400 hover:text-gray-200',
                ]"
              >
                <i class="bi bi-card-image"></i><span>Project</span>
              </div>
            </router-link>

            <!-- Services -->
            <router-link to="/services" v-slot="{ isActive }" @click="closeSidebar">
              <div
                :class="[
                  'flex items-center gap-3 py-2 px-16 rounded transition tracking-[1px]',
                  isActive
                    ? 'text-white font-semibold'
                    : 'text-gray-400 hover:text-gray-200',
                ]"
              >
                <i class="bi bi-hdd-stack"></i><span>Services</span>
              </div>
            </router-link>

            <!-- Contact -->
            <router-link to="/contact" v-slot="{ isActive }" @click="closeSidebar">
              <div
                :class="[
                  'flex items-center gap-3 py-2 px-16 rounded transition tracking-[1px]',
                  isActive
                    ? 'text-white font-semibold'
                    : 'text-gray-400 hover:text-gray-200',
                ]"
              >
                <i class="bi bi-envelope"></i><span>Contact</span>
              </div>
            </router-link>
          </nav>
          <!-- Social Icons -->
          <div class="flex justify-center items-center gap-4 pt-12 pb-6">
            <a
              class="border-2 border-gray-200 rounded-full h-8 w-8 flex items-center justify-center hover:bg-blue-500 hover:text-white transition"
              href="https://linkedin.com/in/rasheduzaman"
              target="_blank"
              ><i class="bi bi-linkedin"></i
            ></a>
            <a
              class="border-2 border-gray-200 rounded-full h-8 w-8 flex items-center justify-center hover:bg-gray-900 hover:text-white transition"
              href="https://github.com/Rashed-zaman-bd"
              target="_blank"
              ><i class="bi bi-github"></i
            ></a>
            <a
              class="border-2 border-gray-200 rounded-full h-8 w-8 flex items-center justify-center hover:bg-sky-400 hover:text-white transition"
              href="https://x.com"
              target="_blank"
              ><i class="bi bi-twitter-x"></i
            ></a>
            <a
              class="border-2 border-gray-200 rounded-full h-8 w-8 flex items-center justify-center hover:bg-red-600 hover:text-white transition"
              href="https://www.youtube.com/@CodingwithRashed"
              target="_blank"
              ><i class="bi bi-youtube"></i
            ></a>
          </div>
        </div>

        <!-- Footer fixed at bottom -->
        <footer class="text-gray-400 text-center p-4">
          <p class="text-sm">
            © Copyright <span class="font-semibold">Rashed</span> All Rights Reserved
          </p>
        </footer>
      </div>

      <!-- Main Content -->
      <div class="flex-1 flex flex-col">
        <router-view />
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
import { ref, reactive, onMounted } from "vue";

const isOpen = ref(false);
const toggleSidebar = () => (isOpen.value = !isOpen.value);

const sidebarRef = ref<HTMLElement | null>(null);

const hoverLight = reactive({ x: 0, y: 0, visible: false, targetX: 0, targetY: 0 });

const updateTarget = (event: MouseEvent) => {
  if (!sidebarRef.value) return;
  const rect = sidebarRef.value.getBoundingClientRect();
  hoverLight.targetX = event.clientX - rect.left;
  hoverLight.targetY = event.clientY - rect.top;
  hoverLight.visible = true;
};

const hideGlow = () => (hoverLight.visible = false);

const animateGlow = () => {
  hoverLight.x += (hoverLight.targetX - hoverLight.x) * 0.1;
  hoverLight.y += (hoverLight.targetY - hoverLight.y) * 0.1;
  requestAnimationFrame(animateGlow);
};

onMounted(() => animateGlow());

function closeSidebar() {
  isOpen.value = false; // 🔥 close sidebar on route click
}
</script>

<style scoped>
.font {
  font-family: "Roboto", sans-serif;
}
</style>
