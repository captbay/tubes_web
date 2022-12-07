//import vue router 
import { createRouter, createWebHistory } from 'vue-router'

//define a routes
const routes = [ 
    { 
        path: '/',
        name: 'index', 
        component: () => import('@/components/IndexLayout.vue'), 
        children:[
            {
                path: "/beranda", 
                name: "beranda", 
                component: () => import('@/views/berandaPage.vue'),
            },
            {
                path: "/tentangKami", 
                name: "tentangKami", 
                component: () => import('@/views/aboutUsPage.vue'),
            },
            {
                path: "/bantuan", 
                name: "bantuan", 
                component: () => import('@/views/helpPage.vue'),
            },
            {
                path: "/kontak", 
                name: "kontak", 
                component: () => import('@/views/kontakPage.vue'),
            },
            {
                path: "/masuk", 
                name: "masuk", 
                component: () => import('@/views/masukPage.vue'),
            },
            {
                path: "/masuk/daftar", 
                name: "daftar", 
                component: () => import('@/views/daftarPage.vue'),
            },
            {
                path: "/pesulap", 
                name: "pesulapIndex",  
                component: () => import('@/views/Pesulap/indexPage.vue'),
            },
            {
                path: "/pesulap/detailpesulap", 
                name: "detailPesulap",   
                component: () => import('@/views/Pesulap/detailPesulap.vue'),
            },
            {
                path: "/band", 
                name: "band",  
                component: () => import('@/views/Band/indexPage.vue'),
            },
            {
                path: "/band/detailBand", 
                name: "detailBand",   
                component: () => import('@/views/Band/detailBand.vue'),
            },
            {
                path: "/standUp", 
                name: "standUp",  
                component: () => import('@/views/StandUp/indexPage.vue'),
            },
            {
                path: "/standUp/detailStandUp", 
                name: "detailStandUp",   
                component: () => import('@/views/StandUp/detailStandUp.vue'),
            },
        ],
    },
]

//create router 
const router = createRouter({ 
    history: createWebHistory(), 
    routes // config routes 
}) 

export default router;