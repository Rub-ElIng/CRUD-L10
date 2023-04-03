import { createApp } from 'vue'

import Oruga from '@oruga-ui/oruga-next'
import '@oruga-ui/oruga-next/dist/oruga.css'
import '@oruga-ui/oruga-next/dist/oruga-full.css'

import App from './App.vue'
import axios from 'axios'




const app =createApp(App).use(Oruga) 

//app.mount('#app')

app.mount('#cont')
app.mount('#cont1')
app.mount('#cont2')
app.mount('#cont3')
app.mount('#tb')
app.mount('#tx')
app.mount('#list')
app.mount('#estaA')
app.mount('#estaA1')






//app.config.globalProperties.$axios = axios
//indow.axios = axios