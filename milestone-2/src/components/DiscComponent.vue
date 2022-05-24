<template>
  <div class="col-2 d-flex">
    <div class="disc mt-5 p-3">
      <img :src="disc.poster" :alt="disc.title" />
      <div class="title my-3">{{ disc.title }}</div>
      <div class="author">{{ disc.author }}</div>
      <div class="year mb-4">{{ disc.year }}</div>
    </div>
  </div>
</template>

<script>
//import state from "@/state.js";
export default {
  name: "DiscComponent",
  props: {
    disc: Object,
  },
  mounted(){
    //console.log('mounted!');
    //console.log(state.artists);
  }
};
</script>

<style scoped lang="scss">
.col-2 {
  width: 20%;
}

.disc {
  background-color: rgba(46, 58, 70, 1);
  box-shadow: 0 0 3px rgba(128, 128, 128, 0.507);
  border: 1px solid transparent;
  border-radius: 0.7rem;
  padding: 0 1rem;  
  &:hover{
      border: 1px solid rgba(255, 255, 255, 0.566);
  }
}
.title {
  font-size: 1.5rem;
  text-transform: uppercase;
  line-height: 30px;
  font-weight: bold;
}
.year,
.author {
  color: gray;
}


</style>