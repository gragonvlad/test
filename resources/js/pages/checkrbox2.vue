<template>
  <div class="flex-center position-ref full-height">
  </div>
   <div class="content">

      
     </div>


  <div v-for="url in urls.slice(0, n)" :key="url.id">
    <a :for="url.id" class="menu"  :href="url.href">{{ url.page }}></a>
   
</div>

  <div id="app"> 


 </div>



</template>
   
   

   <style>

   
   </style>
   <script>
 import Button from '../components/ButtonComponent.vue';
 
      export default {
        created() {
  
       },
       
       props: {
 urls: Array,
},

   
       data() {
       
   return { 
       checked: false,
       urlsJson: [],
       k: 5,
       n: 5,
   }
   
 },
mounted() {
 
},
 methods: {

 },
      }
     
   </script>
   