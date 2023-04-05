import './../bootstrap.js';
import '../../css/app.css';
import App from './App.vue'
import Create from './components/Crear.vue';
import Editar from './components/Editar.vue';
import Mostrar from './components/Mostrar.vue';
import Index from './components/Index.vue';
import {createRouter, createWebHashHistory} from 'vue-router'
import { createApp } from 'vue';



const routes = [
  { path: '/', component: Index },
  { path: '/create', component: Create },
  { path: '/edit', component: Editar},
  { path: '/show', component: Mostrar},
]
const router = createRouter({
  history: createWebHashHistory(),
  routes,
})

const app = createApp(App)
app.use(router)
app.mount('#app')



