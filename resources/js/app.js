require('./bootstrap');
import "babel-polyfill";
import VueRouter from 'vue-router';
import Vue from "vue";
import App from "./app.vue";
import home from './components/home.vue';
import login from './components/login.vue';
import register from './components/register.vue';
import RanckProject from './components/RanckProject.vue';
import show from './components/show.vue';


Vue.use(VueRouter);

const routes = [
    { path: '/', component: home },
    { path: '/register', component: register },
    { path: '/RanckProject', component: RanckProject },
    { path: '/show', component: show },

];

const router = new VueRouter({
    // mode: 'history',
    routes
});
// Create Vue Object
new Vue({
    render: (h) => h(App),
    router,
}).$mount("#app");
