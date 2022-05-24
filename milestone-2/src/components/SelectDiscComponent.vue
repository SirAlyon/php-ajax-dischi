<template>
  <!-- <select name="selectDisc">
        <option v-for="(disc, index) in discs" :key="index" :value="disc.genre">{{disc.genre}}</option>
    </select> -->

  <select name="selectGenre" 
  v-on:input="$emit('input', $event.target.value)"
  @change="$emit('selectSubmit')">
    <option value="">Nessun Filtro</option>
    <option :value="text" v-for="text in array" :key="text">{{text}}</option>
  </select>
</template>

<script>
import state from "@/state.js"
export default {
  name: "SelectDisc",
  props: {
      array: Array
  },
  data(){
      return {
          
      }
  },
  mounted(){
      console.log(state.genre);
      console.log('mounted');
  }
  
};
</script>

<style scoped lang="scss">
</style>