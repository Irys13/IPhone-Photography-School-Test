window.Vue = require('vue');

Vue.component('blogpost', require('./components/BlogPost.vue').default);
Vue.component('sidebar', require('./components/SideBar.vue').default);
Vue.component('modal', require('./components/Modal.vue').default);


const app = new Vue({
    el:'#app'
});
