import { createRouter, createWebHistory } from "vue-router";
import HomeView from "@/views/index.vue";

const routes = [
  { path: "/", name: "Home", component: HomeView },
  {
    path: "/about",
    name: "About",
    component: () => import("@/views/About.vue"),
  },
  {
    path: "/resume",
    name: "Resume",
    component: () => import("@/views/Resume.vue"),
  },
  {
    path: "/project",
    name: "Project",
    component: () => import("@/views/Project.vue"),
  },
  {
    path: "/services",
    name: "Services",
    component: () => import("@/views/Services.vue"),
  },
  {
    path: "/contact",
    name: "Contact",
    component: () => import("@/views/Contact.vue"),
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
