
require('./bootstrap');

window.Vue = require('vue');


Vue.component('Root', require('./components/Root.vue').default);
Vue.component('Like', require('./components/Like.vue').default);



const app = new Vue({
    el: '#app',

});
