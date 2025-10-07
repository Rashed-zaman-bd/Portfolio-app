<template>
  <div class="flex-1 flex flex-col">
    <!-- Header -->
    <div class="flex flex-col" data-aos="fade-up" data-aos-duration="1000">
      <h1
        class="text-2xl md:text-4xl md:font-bold font-semibold text-gray-800 mx-4 xl:mx-4 2xl:mx-30 md:mt-16 lg:mt-6"
      >
        Contact
      </h1>
      <div class="w-16 h-1 bg-gray-300 mx-4 mb-4 2xl:mx-30"></div>
    </div>

    <div
      class="flex flex-col lg:flex-row gap-8 md:mt-10 xl:mx-4 2xl:mx-30"
      data-aos="fade-up"
      data-aos-duration="2000"
    >
      <!-- Left Side: Info -->
      <div class="lg:w-1/3 bg-white rounded-lg shadow-md p-6 border border-gray-200">
        <div class="space-y-6">
          <div class="flex items-start space-x-4">
            <i class="bi bi-geo-alt text-gray-500 text-xl mt-1 flex-shrink-0"></i>
            <div>
              <h3 class="font-semibold text-gray-800 mb-1">Address</h3>
              <p class="text-gray-600 text-sm">2, Sector 6, Uttara, Dhaka 1230</p>
            </div>
          </div>
          <div class="flex items-start space-x-4">
            <i class="bi bi-telephone text-gray-500 text-xl mt-1 flex-shrink-0"></i>
            <div>
              <h3 class="font-semibold text-gray-800 mb-1">Call Us</h3>
              <p class="text-gray-600 text-sm">+880 1747 10 76 58</p>
            </div>
          </div>
          <div class="flex items-start space-x-4">
            <i class="bi bi-envelope text-gray-500 text-xl mt-1 flex-shrink-0"></i>
            <div>
              <h3 class="font-semibold text-gray-800 mb-1">Email Us</h3>
              <p class="text-gray-600 text-sm">info@rashed-bd.com</p>
            </div>
          </div>
          <!-- Map Section -->
          <div
            class="bg-white rounded-lg shadow-md border border-gray-200 w-full overflow-hidden mt-4"
          >
            <div class="relative w-full h-64 md:h-80">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1824.2153610039227!2d90.40083462455165!3d23.874340633182054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1759219416376!5m2!1sen!2sbd"
                class="w-full h-full border-0"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
              <span
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-full text-red-600 text-3xl pointer-events-none"
              >
                <i class="bi bi-geo-alt-fill"></i>
              </span>
            </div>
            <div class="p-4 bg-gray-50 border-t border-gray-200">
              <h3 class="font-semibold text-gray-800 mb-1">Uttara Dhaka</h3>
              <p class="text-sm text-gray-600">
                <a href="#" class="text-gray-500 hover:underline">View larger map</a>
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Side: Form -->
      <div class="w-full lg:w-2/3 space-y-6">
        <div class="bg-white rounded-lg shadow-md p-6 border border-gray-200">
          <p class="text-xl italic md:text-2xl text-gray-400 mb-6">
            Your message here...
          </p>
          <form @submit.prevent="handleSubmit" class="space-y-4">
            <div class="grid grid-cols-1 gap-4">
              <div>
                <label for="fullname" class="block text-sm font-medium text-gray-700 mb-1"
                  >Your Name</label
                >
                <input
                  type="text"
                  id="fullname"
                  v-model="form.fullname"
                  class="w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent"
                  required
                />
              </div>
              <div>
                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1"
                  >Your Phone</label
                >
                <input
                  type="text"
                  id="phone"
                  v-model="form.phone"
                  class="w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent"
                />
              </div>
              <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1"
                  >Your Email</label
                >
                <input
                  type="email"
                  id="email"
                  v-model="form.email"
                  class="w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent"
                  required
                />
              </div>
            </div>
            <div class="md:mb-5 md:mt-5">
              <label for="subject" class="block text-sm font-medium text-gray-700 mb-1"
                >Subject</label
              >
              <input
                type="text"
                id="subject"
                v-model="form.subject"
                class="w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent"
              />
            </div>
            <div>
              <label for="message" class="block text-sm font-medium text-gray-700 mb-1"
                >Message</label
              >
              <textarea
                id="message"
                v-model="form.message"
                rows="8"
                class="w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent"
                required
              ></textarea>
            </div>
            <div class="flex justify-center">
              <button
                type="submit"
                class="text-black py-2 px-4 border-1 hover:bg-gray-600 hover:text-white transition-colors font-medium items-center justify-center text-center cursor-pointer"
              >
                Send Message
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
import { reactive, onMounted } from "vue";
import api from "@/api/axios";
import Swal from "sweetalert2";

onMounted(() => {
  document.title = "Contact - My Portfolio";
});

const form = reactive({
  fullname: "",
  phone: "",
  email: "",
  subject: "",
  message: "",
});

const handleSubmit = async () => {
  try {
    const res = await api.post("/contact", form);

    Swal.fire({
      icon: "success",
      title: "Message Sent!",
      text: res.data.message || "Thanks for contacting me!",
      confirmButtonColor: "#1f2937",
    });

    // Reset form
    Object.keys(form).forEach((key) => (form[key as keyof typeof form] = ""));
  } catch (err: any) {
    const msg = err.response?.data?.errors
      ? Object.values(err.response.data.errors).flat().join("\n")
      : "Something went wrong!";

    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: msg,
      confirmButtonColor: "#dc2626",
    });
  }
};
</script>

<style scoped>
* {
  transition: opacity 0.7s ease-in-out, transform 0.7s ease-in-out;
}
</style>
