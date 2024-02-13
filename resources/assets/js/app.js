require('./bootstrap');
import Vue from 'vue';
window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('new-component', require('./components/NewComponent.vue'));
Vue.component('slider-component', require('./components/SliderComponent.vue'));

const app = new Vue({
    el: '#app'
});
const student = {
	firstName: 'Anabel',
	lastName: 'Garra'
};

const studentJSON = JSON.stringify(student);
console.log(studentJSON);
const studentObj = JSON.parse(studentJSON);
console.log(studentObj);