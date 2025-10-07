import { createRouter, createWebHistory } from "vue-router";
import HomeView from "@/views/index.vue";

const routes = [
  {
    path: "/",
    name: "Home",
    component: HomeView,
    meta: { title: "Home - Portfolio" },
  },
  {
    path: "/about",
    name: "About",
    component: () => import("@/views/About.vue"),
    meta: { title: "About - Portfolio" },
  },
  {
    path: "/resume",
    name: "Resume",
    component: () => import("@/views/Resume.vue"),
    meta: { title: "Resume - Portfolio" },
  },
  {
    path: "/project",
    name: "Project",
    component: () => import("@/views/Project.vue"),
    meta: { title: "Project - Portfolio" },
  },
  {
    path: "/services",
    name: "Services",
    component: () => import("@/views/Services.vue"),
    meta: { title: "Service - Portfolio" },
  },
  {
    path: "/contact",
    name: "Contact",
    component: () => import("@/views/Contact.vue"),
    meta: { title: "Contact - Portfolio" },
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
