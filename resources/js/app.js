require('./bootstrap');

window.Vue = require('vue');
// CkEditor
let CKEditor = require('@ckeditor/ckeditor5-vue2');     
Vue.use(CKEditor)
// Toast
import Toasted from 'vue-toasted';
Vue.use(Toasted)

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('delete-component', require('./components/Delete.vue').default);

// Liric
Vue.component('liric-component', require('./components/liric/Liric').default);
Vue.component('liric-create-component', require('./components/liric/Create').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
