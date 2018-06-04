
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('sniddl-spa');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
$("#top").click(e=>{
    e.preventDefault()
    $("html,body").animate({
        scrollTop: 0
    },"slow")
})
Vue.component('notification', require('./components/notification.vue'));

const app = new Vue({
    el: '#app'
});
