<template>
   <div class="flex-center position-ref full-height">
    
    <div class="content">
       <Button></Button>
      

   </div>
   <div v-for="blog in this.users" :value="blog">
   {{ blog.id }}
   {{ blog.link }}
   {{ blog.menu }}
   {{ blog.express_time }}

   </div>
   <div id="app"> 

</div>
  </div>
</template>
    
    
    <script setup>
   import Button from '../components/ButtonComponent.vue';
    
    import { ref } from 'vue'

    </script>
    <style>
 
    
    </style>
    <script>
       export default {
         created() {
            console.log(this.datall)
        },
        props: {

        },
        data() {
    return { 
        checked: true,
        myJson: {type: Array},
        usersJson: {type: Array},
        users: {type:Array},
        this: {type: Array},
    }
  },
       }
    
    </script>
    