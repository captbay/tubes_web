//import vue router
import { createRouter, createWebHistory } from "vue-router";
// import store from './store'

//define a routes
const routes = [
  {
    path: "/masuk",
    name: "masuk",
    component: () => import("@/views/masukPage.vue"),
    props: true,
    meta: {
      requiresVisitor: true,
      layout: "landing",
    },
  },
  {
    path: "/daftar",
    name: "daftar",
    component: () => import("@/views/daftarPage.vue"),
    props: true,
    meta: {
      requiresVisitor: true,
      layout: "landing",
    },
  },
  {
    path: "/",
    name: "index",
    component: () => import("@/components/IndexLayout.vue"),
    props: true,
    meta: {
      requiresAuth: true,
      layout: "default",
      reload: true,
    },
    children: [
      {
        path: "/",
        name: "beranda",
        component: () => import("@/views/berandaPage.vue"),
      },
      {
        path: "/tentangKami",
        name: "tentangKami",
        component: () => import("@/views/aboutUsPage.vue"),
      },
      {
        path: "/bantuan",
        name: "bantuan",
        component: () => import("@/views/helpPage.vue"),
      },
      {
        path: "/kontak",
        name: "kontak",
        component: () => import("@/views/kontakPage.vue"),
      },
      {
        path: "/profile",
        name: "profile",
        component: () => import("@/views/profilePage.vue"),
      },
      {
        path: "/pesulap",
        name: "pesulapIndex",
        component: () => import("@/views/Pesulap/indexPage.vue"),
      },
      {
        path: "/pesulap/detailpesulap",
        name: "detailPesulap",
        component: () => import("@/views/Pesulap/detailPesulap.vue"),
      },
      {
        path: "/band",
        name: "band",
        component: () => import("@/views/Band/indexPage.vue"),
      },
      {
        path: "/band/detailBand",
        name: "detailBand",
        component: () => import("@/views/Band/detailBand.vue"),
      },
      {
        path: "/standUp",
        name: "standUp",
        component: () => import("@/views/StandUp/indexPage.vue"),
      },
      {
        path: "/standUp/detailStandUp",
        name: "detailStandUp",
        component: () => import("@/views/StandUp/detailStandUp.vue"),
      },
      {
        path: "/keranjang",
        name: "keranjang",
        component: () => import("@/views/keranjangPage.vue"),
      },
    ],
  },
];

//create router
const router = createRouter({
  history: createWebHistory(),
  routes, // config routes
});

// meta: {
//   // tambahkan meta ini
//   requiresAuth: true,
// },
// router.beforeEach((to, from, next) => {
//   if (to.matched.some((record) => record.meta.requiresAuth)) {
//     var token = localStorage.getItem("token");
//     if (!token) {
//       next({
//         path: "/masuk",
//       });
//     } else {
//       next();
//     }
//   } else if (to.matched.some((record) => record.meta.requiresVisitor)) {
//     // if (to.currentRoute.meta.reload == true) {
//     //   window.location.reload();
//     // }
//     if (token) {
//       next({
//         path: "/",
//       });
//     } else {
//       next();
//     }
//   }
// });
// router.beforeEach((to, from, next) => {
//   if (to.matched.some((record) => record.meta.requiresAuth)) {
//     if (store.getters.isLoggedIn) {
//       // ubah baris ini
//       next();
//       return;
//     }
//     next("/login");
//   } else {
//     next();
//   }
// });

export default router;
