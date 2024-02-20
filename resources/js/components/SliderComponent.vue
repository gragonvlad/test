<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="height: 350px;">
        <div class="info" style="height: 15%">
          <span>Center: {{ center }}</span>
          <span>Zoom: {{ zoom }}</span>
          <span>Bounds: {{ bounds }}</span>
        </div>
        <l-map
          style="height: 80%; width: 100%"
          :zoom="zoom"
          :center="center"
          @update:zoom="zoomUpdated"
          @update:center="centerUpdated"
          @update:bounds="boundsUpdated"
        >
          <l-tile-layer :url="url" :attribution="attribution"></l-tile-layer>
        </l-map>
      </div>
</template>

<script setup>

// import legacy from '@vitejs/plugin-legacy'

const props = defineProps({
    datall: String,
    menu: String,
})
function modifyArray(arr) {
  // Create a new copy of the array
  const modifiedArray = [...arr];

  // Make modifications to the new array
  modifiedArray.push('new item');

  // Return the modified array
  return modifiedArray;
}
const mutations = {
ADD_NOTE (state, payload) {
let newNote = payload;
state.notes.push(newNote);
},
ADD_TIMESTAMP (state, payload) {
let newTimeStamp = payload;
state.timestamps.push(newTimeStamp);
}
}
const user = {
  firstName: 'Keks',
  type: 'cat',
  favorites: [
    'milk',
    'meat',
  ],
}

// Получим JSON-строку
const jsonText = JSON.stringify(user);

// {"firstName":"Keks","type":"cat","favorites":["milk","meat"]}
console.log(jsonText);
/*
const sliderElement = document.querySelector('.level-form__slider');
const valueElement =  document.querySelector('.level-form__value');
const specialElement =  document.querySelector('.level-form__special');
valueElement.value = 80;

noUiSlider.create(sliderElement, {
    range: {
        min:0,
        max:100,
    },
    start: 80,
    step: 1,
    connect: 'lower',
    });
sliderElement.noUiSlider.on('update', () => {
    valueElement.value = sliderElement.noUiSlider.get();
});

specialElement.addEventListener('change', (evt) => {
    if (evt.target.checked) {
        sliderElement.noUiSlider.updateOptions({
            range: {
                min: 0,
                max: 10,
            },
            stop: 0.1,
        });
        valueElement.value = 8;
    } else {
        sliderElement.noUiSlider.updateOptions({
            range: {
                min: 0,
                max: 100,
            },
            step: 1,

        });
        sliderElement.noUiSlider.set(80);

    
});
//console.log(state);

const originalArray = ['item 1', 'item 2'];

const modifiedArray = modifyArray(originalArray);

console.log(originalArray); // ['item 1', 'item 2']
console.log(modifiedArray); // ['item 1', 'item 2', 'new item']



console.log('test', props);
var slider = document.getElementById('slider');
*/

</script>
<style>
 

</style>