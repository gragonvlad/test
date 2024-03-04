<template>
   <div class="flex-center position-ref full-height">
   </div>
    <div class="content">
       <Button></Button>
      </div>

  
   <div v-for="blog in blogs" :key="blog.id">
    <input type="checkbox" :id="blog.id" v-model="selectedBlog" true-value="да" false-value="нет" v-on:click="toggleBlog(blog)" />
    <label :for="blog.id">{{ blog.id }}</label>
    <label :for="blog.id">{{ blog.link }}</label>
    <label :for="blog.id">{{ blog.menu }}</label>
    <label :for="blog.id">{{ blog.created_at }}</label>
    <label :for="blog.id">{{ blog.updated_at }}</label>
    {{ selectedBlog }}
    <input type="submit" value="Send Request" />
</div>
   <div id="app"> 


  </div>
</template>
    
    
    <script setup>
   import Button from '../components/ButtonComponent.vue';
   const props = defineProps(['blog']);
    import { ref } from 'vue'
    inheritAttrs: false;
   
    </script>
    <style>
 
    
    </style>
    <script>
    
       export default {
         created() {
   
        },
        
        props: {
  blogs: Array,
  selectedBlog: Array,
  check: Array,
},

    
        data() {
        
    return { 
        checked: true,
        myJson: {type: Array},
        usersJson: {type: Array},
        blogs: {type: Array},
        selectedBlog: {type: Array},
        check: {type: Array},
        
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
    	return this.blog.filter(this.isSelected);
    },
  },
  methods: {
   selectedBlog() {
   
 console.log("FFF")
      return this.selectedBlog;
   },
   toggleBlog: function(blog){
    	this.selected = ((this.selected === undefined) ? true : !this.selected);
       
      
    },
    isSelected: function(obj){
      console.log(this.value);
    	return obj.selected;
    }
 


  },
       }
    
    </script>
    