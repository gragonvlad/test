<template>
  <div class="flex-center position-ref full-height">
  </div>
   <div class="content">
    <form>
    <input type="number" id="lat">
    <button v-on:click.stop.prevent="greet"  @click="handleSubmit">Search</button>
    <input id="greet2" value="22" v-text="url" v-model="Ld"></input>
    <input id="greet" value={this.Ld} v-text="url" v-model="Ld"></input>
    {{start}}
  </form>
     </div>
  <div v-for="url in urls.slice(0, n)" :key="url.id">
    <a :for="url.id" class="menu"  :href="url.href">{{ url.page }} </a>
</div>
{{ info }}
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
 latitude: String,
 info: Array,
},

   
       data() {
        latitude: '5'
   return { 
       info: null,
       checked: false,
       urlsJson: [],
       k: 5,
       n: 5,
       email: '',
       
      password: '',
   }
   
 },
mounted() {

  this.checkStatus();

       
console.log("one cycle");
},

 methods: {
  handleSubmit(e) {
    document.getElementById("greet").value="55";
  },
  checkStatus() {


    axios({
  method: 'get',
  url: 'https://api.open-meteo.com/v1/forecast?latitude=52.52&longitude=13.41&hourly=temperature_2m',
  data: {
    latitude: '53',
    latitude: '44',
      longitude: '13',
  },
  headers: {'Accept': 'application/json'},
  headers: {'Content-Type': 'application/json;charset=utf-8'}
  
}).then(response => this.info = response.data);

  
      
   
  },
}
      }
   </script>
   