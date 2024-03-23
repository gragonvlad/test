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
 datas: String,
 datas2: String,
},

   
       data() {
       
   return { 
       info: null,
       checked: false,
       urlsJson: [],
       k: 5,
       n: 5,
   }
   
 },
mounted() {
  this.postRequest()

},
 methods: {
  postRequest() {
      axios({
          method: 'post',
          url: 'http://localhost:8000/email/verify/',
          params: {
            id: this.$datas,
            hash: this.$datas2
          },
          data: `data2=${encodeURIComponent('1')}`,
          headers: {
            "Content-type": "application/x-www-form-urlencoded"
          }
        })
        .then(function(response) {
          console.log('Ответ сервера успешно получен!');
          console.log(response.data);
        })
        .catch(function(error) {
          console.log(error);
        });
    }
 },
      }
     
   </script>
   