import { createApp } from "vue";
import App from "./App.vue";
import router from "./routes/index.js";

// Global styles
import "./assets/main.css";

// Bootstrap Icons
import "bootstrap-icons/font/bootstrap-icons.css";

// AOS Animation Library
import AOS from "aos";
import "aos/dist/aos.css";

const app = createApp(App);

// Initialize AOS after mounting
app.mixin({
  mounted() {
    AOS.init({
      duration: 800,
      once: true,
    });
  },
});

app.use(router);
app.mount("#app");
