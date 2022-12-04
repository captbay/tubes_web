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
                path: "/kontak", 
                name: "kontak", 
                component: () => import('@/views/kontakPage.vue'),
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