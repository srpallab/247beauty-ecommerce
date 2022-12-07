import { createApp } from 'vue';
import './style.css';
// import './template.js';

import router from "./router";
import App from './App.vue';

import axios from 'axios';

// console.log(axios.isCancel('something'));


const app = createApp(App);
app.use(router);
app.provide('axios', app.config.globalProperties.axios);  // provide 'axios'
app.mount('#app');

