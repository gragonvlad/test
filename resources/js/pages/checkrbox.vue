<template>
   <div class="flex-center position-ref full-height">
   </div>
    <div class="content">
       <Button @click="senddd"></Button>
      </div>

  
   <div v-for="blog in blogs" :key="blog.id">
    <input type="checkbox" :id="blog.id" v-model="selectedBlog" true-value="да" false-value="нет" />
    <label :for="blog.id">{{ blog.id }}</label>

    
    
</div>
<input type="submit" value="Send Request"  @click="senddd" />
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
},

    
        data() {
        
    return { 
        checked: false,
        usersJson: [],
        selectedBlog: [],
    }
    
  },
  computed: {

  },
  methods: {
  
 senddd() {
console.log(this.selectedBlog);

 }


  },
       }
    
    </script>
    