<template>
   <div class="flex-center position-ref full-height">
   </div>
    <div class="content">
       <Button @click="senddd">DATA DELETE</Button>
       <Button @click="resend">DATA REST</Button>
       
      </div>

     <h2>DATA TO DELETE</h2> 
   <div v-for="blog in blogs" :key="blog.id">
    <input type="checkbox" :value="blog.id" :id="blog.id" v-model="selectedBlog" />
    <label :for="blog.id">{{ blog.id }}</label> 
</div>

<h2>DATA BACK</h2>
  <div v-for="unblog in unblogs" :key="unblog.id">
    <input type="checkbox" :value="unblog.id" :id="unblog.id" v-model="unselectedBlog" />
    <label :for="unblog.id">{{ unblog.id }}</label> 
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
    }
    
  },
  computed: {

  },
  methods: {
  
 senddd() {
console.log(this.selectedBlog);
axios.get(`http://localhost:8000/blogrs/${this.selectedBlog}`);
 },
 resend() {
console.log(this.unselectedBlog);
axios.get(`http://localhost:8000/unblogrs/${this.unselectedBlog}`);

 }


  },
       }
      
    </script>
    