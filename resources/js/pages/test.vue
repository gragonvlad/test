<template>
<div class="flex-center position-ref full-height">
       <div class="content">
          <new-component></new-component>
      </div>
</div>
<h1>Here are many child components! {{sellall}}</h1>
// <!-- <ExampleComponent /> -->
</template>
<script setup>
import NewComponent from '../components/NewComponent.vue'
// import legacy from '@vitejs/plugin-legacy'
const props = defineProps({
    sellall: String,
    nameall: String,
})
console.log('testf', props);
</script>
<style>
    .content{
background-color: blue;
    }

</style>
