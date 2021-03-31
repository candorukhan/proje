require('./bootstrap');

window.Vue = require('vue').default;
import Vue from 'vue';
import axios from 'axios';
import vSelect from "vue-select";
import 'vue-select/dist/vue-select.css';

window.Vue = Vue;
window.axios = axios;
Vue.component('vue-select', vSelect);
import 'vue-select/dist/vue-select.css';
