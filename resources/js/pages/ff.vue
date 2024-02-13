<template>
<div class="flex-center position-ref full-height">
       <div class="content">
          <example-component></example-component>
      </div>
</div>


<h1>Here are many child components! {{datall}}</h1>
<!-- <ExampleComponent /> -->
</template>
<script setup>
    import ExampleComponent from '../components/ExampleComponent.vue'
    import SliderComponent from '../components/SliderComponent.vue'
// import legacy from '@vitejs/plugin-legacy'

const props = defineProps({
    datall: String,
})

document.addEventListener('DOMContentLoaded', () => {
  const btn = document.getElementById('btn');

  console.log(btn); // HTMLButtonElement object

  // ✅ Works as expected
  btn.addEventListener('mousemove', () => {
    //alert('You mousemove the button');
    document.getElementById("btn").style.backgroundColor = "red";
  });
  btn.addEventListener('click', () => {
    alert('You click the button');
    document.getElementById("btn").style.backgroundColor = "yellow";
  });
  
});


console.log('test', props);
</script>
<style>
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
        props: ['datall'],
        methods: {
            onHover: function (event) {
                event.target.style.color = 'red'
            }
        },
       created() {
            console.log(this.datall)
        },
}
</script>
