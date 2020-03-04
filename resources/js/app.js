/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

import VueRouter from "vue-router"
import { routes } from "./routes"
import Vuelidate from 'vuelidate'



//Shared
Vue.component('home-announce', require('./components/shared/HomeAnnounce.vue').default)
Vue.component('home-why', require('./components/shared/HomeWhy.vue').default)
Vue.component('home-background', require('./components/shared/HomeBackground.vue').default)
Vue.component('home-numbers', require('./components/shared/HomeNumbers.vue').default)
Vue.component('home-comment', require('./components/shared/HomeComment.vue').default)
Vue.component('home-brand', require('./components/shared/HomeBrand.vue').default)

Vue.component('interviews', require('./components/shared/Interviews.vue').default);
Vue.component('filter-interview', require('./components/shared/FilterInterview.vue').default);
Vue.component('add-interview-form', require('./components/shared/AddInterviewForm.vue').default);
Vue.component('add-interview-info', require('./components/shared/AddInterviewInfo.vue').default);

//Pages
Vue.component('app-header', require('./components/pages/AppHeader.vue').default)
Vue.component('app-footer', require('./components/pages/AppFooter.vue').default)
Vue.component('home', require('./components/pages/Home.vue').default)
Vue.component('entire-interviews', require('./components/pages/EntireInterviews.vue').default)
Vue.component('add-interview', require('./components/pages/AddInterview.vue').default)
Vue.component('filtered-interview', require('./components/pages/FilteredInterview.vue').default);
Vue.component('interview-id', require('./components/pages/InterviewId.vue').default);


Vue.use(VueRouter);
const router = new VueRouter({
    routes,
    // mode: "history"
})

Vue.use(Vuelidate)


// First Letter Capitalize all word
Vue.filter("toCamelCase" , (value) => {
    var value = value.toLowerCase().split(' ');
    for (var i = 0; i < value.length; i++) {
        // You do not need to check if i is larger than value length, as your for does that for you
        // Assign it back to the array
        value[i] = value[i].charAt(0).toUpperCase() + value[i].slice(1);     
    }
    // Directly return the joined string
   
    return value.join(' '); 
})



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});
