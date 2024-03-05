<template>
   <div class="flex-center position-ref full-height">
   </div>
    <div class="content">
       <Button @click="senddd"></Button>
      </div>

  
   <div v-for="blog in blogs" :key="blog.id">
    <input type="checkbox" :id="blog.id" v-model="selectedBlog" true-value="да" false-value="нет" />
    <label :for="blog.id">{{ blog.id }}</label>
    <label :for="blog.id">{{ blog.link }}</label>
    <label :for="blog.id">{{ blog.menu }}</label>
    <label :for="blog.id">{{ blog.created_at }}</label>
    <label :for="blog.id">{{ blog.updated_at }}</label>
    {{ selectedBlog }}
    
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
   blogs: function () {
      // `this` указывает на экземпляр vm
      return this.blog
    },
    logclick() {
		
      
    },
    selectedBlog: function(){
    	return this.blog.id //данные
    },
  },
  methods: {
  
 senddd: function() {
console.log(this.selectBlog);

 }


  },
       }
    
    </script>
    