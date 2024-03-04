<template>
<div class="flex-center position-ref full-height">
    
       <div class="content">
          <example-component></example-component>
         

      </div>
      <Calendar v-model="date" dateFormat="dd.mm.yy"  today :minDate="null" hourPicker :numberOfMonths="2" yearRange="2000:2030" :showTime="true" :showButtonBar="true" :unstyled="false" />
</div>
<head></head>

<h1>Here are many child components! {{datall}}</h1>
<!-- <ExampleComponent /> -->
</template>


<script setup>
import StyleClass from 'primevue/styleclass';


    import SliderComponent from '../components/slidercomponent.vue';
    import NewComponent from '../components/NewComponent.vue';
    import chekrbox from '../pages/checkrbox.vue';
    import PrimeVue from 'primevue/config';
// import legacy from '@vitejs/plugin-legacy'


import Calendar from 'primevue/calendar';

import { ref } from 'vue'



const date = defineModel();
//console.log(Object.keys(window));
const now = new Date();
const Hour = now.getHours();
const Minute = now.getMinutes();
const today = new Date(now.getFullYear(), now.getMonth(), now.getDate(), now.getHours(), now.getMinutes());

const a = 1
const b = ref(2)

defineExpose({
  a,
  b
})
console.log(a);

 
  

const props = defineProps({
    data: String,
    textss: String,
    numberOfMonths: Number,
    showTime: Boolean,
    showButtonBar: String,
    summbanalimon: String,
})
const isSelected= ref(false);
console.log('Привет, мир!');
document.addEventListener('DOMContentLoaded', () => {
  const btn = document.getElementById('btn');

  console.log(btn); // HTMLButtonElement object
  
  // ✅ Works as expected
 
 
  
});



console.log('test', props);
</script>
<style>
.p-datepicker table td.p-datepicker-today > span {
  background-color: burlywood;
}
.p-datepicker table td > span {
  background-color: orange;
}
.p-inputtext
{
    background-color: yellowgreen;
}
.my-switch-slider {
    border-radius: 0;
}

.my-switch-slider:before {
    border-radius: 0;
}
.p-datepicker-group-container, .p-minute-picker, .p-hour-picker
{
    background-color: red;
}
    h1.hh
    {
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    text-align: center;
    text-decoration: overline;
    }
    .content{
background-color: black;

    }
    body.menu {
        margin: 0;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    div.nav {
        overflow: hidden;
        background-color: green;
    }
    a.active:hover{
background-color: blue;
color:black;

    }
    
    input.dd:focus {
  background-color: lightblue;
}
input.dd:focus-visible {
  outline: 5px solid crimson;
  border-radius: 5px;
}
label.dd:focus-within {
  font-weight: bold;
} /*text side*/
    a.menu:hover{
background-color: blue;
color:black;


    }
    a.menu {
 float:left;
 color: #f2f2f2;
 
 text-align:center;
 padding: 14px 16px;
 text-decoration: none;
 font-size: 17px;
    }
    a.activer {
        float:left;
color: #f2f2f2;
 text-align:center;
 padding: 14px 16px;
 text-decoration: none;
 font-size: 17px;
color:white;

    }
    a.active {
float:left;
color: #f2f2f2;
 text-align:center;
 padding: 14px 16px;
 text-decoration: none;
 font-size: 17px;
color:white;
    }
    h1.data{
        background-color: aqua;
        font-size: 3em;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    h2.times{
        background-color: white;
        font-size: 3em;
        font-family: 'Times New Roman', Times, serif;
    }
    h2.cursive{
        background-color: blue;
        font-size: 3em;
        font-weight: normal;
        font-family: cursive;
    }

</style>
<script>
    import ExampleComponent from '../components/ExampleComponent.vue'
    

    export default {
        props: ['datall', 'textss', 'summbanalimon', 'numberOfMonths', 'showTime', 'data', 'statusValue', 'status'],
        
        data() {
          return {
            status: this.status,
            checked2: true,
        }
    },
        methods: {
            onHover: function (event) {
                event.target.style.color = 'red'
            }
},
        


 


        head: {
        script: [{
            src: 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js',
                type: 'application/javascript'
        }]
    },
       created() {
            console.log(this.datall)
        },
        
}

</script>
