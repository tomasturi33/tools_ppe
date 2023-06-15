/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

//support vuex
import Vuex from 'vuex'
Vue.use(Vuex)
import storeData from "./store/index"

const store = new Vuex.Store(
   storeData
)

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('encuestas-component', require('./components/Encuestas/EncuestasComponent.vue').default);
Vue.component('response-encuestas-component', require('./components/Encuestas/RespuestasComponent.vue').default);
Vue.component('create-encuesta-component', require('./components/Encuestas/CreateComponent.vue').default);
Vue.component('edit-encuesta-component', require('./components/Encuestas/EditComponent.vue').default);
Vue.component('preguntas-component', require('./components/Encuestas/PreguntasComponent.vue').default);
Vue.component('tips-preguntas-component', require('./components/Encuestas/TipsComponent.vue').default);

Vue.component('curriculums-component', require('./components/Curriculums/CurriculumsComponent.vue').default);

Vue.component('test-component', require('./components/index/Test/TestComponent.vue').default);
Vue.component('init-test-component', require('./components/index/Test/InitTestComponent.vue').default);
Vue.component('data-required-test-component', require('./components/index/Test/DataRequiredTestComponent.vue').default);
Vue.component('respuesta-test-component', require('./components/index/Test/RespuestaTestComponent.vue').default);
Vue.component('resultado-test-component', require('./components/index/Test/ResultadoTestComponent.vue').default);
Vue.component('tips-test-component', require('./components/index/Test/TipsTestComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    store, //vuex
});