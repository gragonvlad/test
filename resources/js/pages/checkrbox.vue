<template>
   <div class="flex-center position-ref full-height">
   </div>
    <div class="content">
       <Button @click="senddd">DATA DELETE</Button>
       <Button @click="resend">DATA REST</Button>
       
      </div>

     <h2>DATA TO DELETE</h2> 
   <div v-for="blog in blogs.slice(0, n)" :key="blog.id">
    <input type="checkbox" :value="blog.id"  :id="blog.id" v-model="selectedBlog" />
    <label :for="blog.id">{{ blog.id }}</label> 
    <label :for="blog.id">{{ blog.link }}</label> 
    <label :for="blog.id">{{ blog.menu }}</label> 
    
</div>
<button v-on:click="load">+5 Load Data</button>

<h2>DATA BACK</h2>
  <div v-for="unblog in unblogs.slice(0, k)" :key="unblog.id">
    <input type="checkbox" :value="unblog.id" :id="unblog.id" v-model="unselectedBlog" />
    <label :for="unblog.id">{{ unblog.id }}</label> 
    <label :for="unblog.id">{{ unblog.link }}</label> 
    <label :for="unblog.id">{{ unblog.menu }}</label> 
    
</div>
<button v-on:click="loads">+5 Load Data</button>
<button v-on:click="reload">Reload Page</button>
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
  blogs: Array,
  unblogs: Array,
  selectedBlog: Array,
  unselectedBlog: Array,
},

    
        data() {
        
    return { 
        checked: false,
        usersJson: [],
        selectedBlog: [],
        unselectedBlog: [],
        k: 5,
        n: 5,
    }
    
  },
 mounted() {
  
 },
  methods: {

load() {
  this.n = this.n + 5;
},
loads() {
  this.k = this.k + 5;
},
 senddd() {


axios.get(`http://localhost:8000/blogrs/${this.selectedBlog}`);

 },
 resend() {


axios.get(`http://localhost:8000/unblogrs/${this.unselectedBlog}`);

 },
 reload() {

location.reload(); 
 }


  },
       }
      
    </script>
    