import './bootstrap';

import { createApp } from 'vue'
app.mount('#app');
const student = {
	firstName: 'Anabel',
	lastName: 'Garra'
};
const studentJSON = JSON.stringify(student);
console.log(studentJSON);
const studentObj = JSON.parse(studentJSON);
console.log(studentObj);