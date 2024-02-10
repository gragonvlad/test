import './bootstrap';

import { createApp } from 'vue/dist/vue.esm-bundler'
let app = createApp();
import ff from './pages/ff.vue'; 
import test from './pages/test.vue'; 



const student = {
	firstName: 'Anabel',
	lastName: 'Garra'
};
const studentJSON = JSON.stringify(student);
console.log(studentJSON);
const studentObj = JSON.parse(studentJSON);
console.log(studentObj);
app.component('ff', ff);
app.component('test', test);

app.mount('#app');
