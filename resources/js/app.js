import Vue from 'vue';
import VueSimpleAlert from "vue-simple-alert";
import bootstrap from './bootstrap';
//Main pages
import App from './components/App.vue';
bootstrap;

Vue.use(VueSimpleAlert);

Vue.prototype.$http = window.axios;

const app = new Vue({
    el: '#app',
    components: { App }
});
