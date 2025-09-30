import "./assets/main.css";

import { createApp } from "vue";
import App from "./App.vue";
import "./assets/main.css"; // important!
import router from "./routes/index.js";
// Import Bootstrap Icons CSS
import "bootstrap-icons/font/bootstrap-icons.css";
import AOS from "aos";
import "aos/dist/aos.css";

const app = createApp(App);
AOS.init();
app.use(router);
app.mount("#app");
