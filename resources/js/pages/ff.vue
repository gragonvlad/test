<template>
<div class="flex-center position-ref full-height">
       <div class="content">
          <example-component></example-component>
      </div>
</div>
<h1>Here are many child components! {{datall}}</h1>
<!-- <ExampleComponent /> -->
</template>
<script setup>
    import ExampleComponent from '../components/ExampleComponent.vue'
// import legacy from '@vitejs/plugin-legacy'
const props = defineProps({
    datall: String,
})
console.log('test', props);
</script>
<style>
    .content{
background-color: black;
    }

</style>
<!-- <script>
    import ExampleComponent from '../components/ExampleComponent.vue'

    export default {
        props: ['datall'],
       created() {
            console.log(this.datall)
        },
}
</script> -->
