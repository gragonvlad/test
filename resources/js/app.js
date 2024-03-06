import './bootstrap';

import { createApp } from 'vue/dist/vue.esm-bundler'
let app = createApp();


import PrimeVue from 'primevue/config';
import ff from './pages/ff.vue'; 
import checkrbox from './pages/checkrbox.vue';
import checkrbox2 from './pages/checkrbox2.vue';
import test from './pages/test.vue'; 


app.use(PrimeVue, {
    zIndex: {
        modal: 1100,        //dialog, sidebar
        overlay: 1000,      //dropdown, overlaypanel
        menu: 1000,         //overlay menus
        tooltip: 1100       //tooltip
    }
});

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
app.component('checkrbox', checkrbox);
app.component('checkrbox2', checkrbox2);

app.mount('#app');
