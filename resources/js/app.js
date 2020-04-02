require('./bootstrap');
import Vue from 'vue'
import Vuetify from '../plugins/vuetify';
import router from './router'; 
Vue.use(Vuetify);
Vue.component('container-component', require('./components/ContainerComponent.vue').default);

const app = new Vue({
	vuetify: Vuetify,
    el: '#app',
    router
});
