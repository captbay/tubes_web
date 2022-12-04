//import vue router 
import { createRouter, createWebHistory } from 'vue-router'

//define a routes 
const routes = [ 
    {
        path: '/',
        name: 'beranda', 
        component: () => import('@/components/IndexLayout.vue'),
    }, 
]

//create router 
const router = createRouter({ 
    history: createWebHistory(), 
    routes // config routes 
}) 

export default router;
