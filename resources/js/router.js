import Vue from 'vue'
import VueRouter from 'vue-router'
import list_component from './components/ListComponent'
import create_component from './components/CreateComponent'

Vue.use(VueRouter);

export default new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/list', 
            component: list_component
        },
        {
            path: '/create', 
            component: create_component
        },
    ]
})
