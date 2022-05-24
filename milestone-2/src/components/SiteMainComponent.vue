<template>
  <main>
    <div class="container">
      <div class="row" v-if="!loading && filterDiscs.length !== 0">
        <Disc
          :disc="disc"
          v-for="(disc, index) in filterDiscs"
          :key="index"
          @hook:mounted="getLists"

        />
      </div>
      <Loader v-else />
    </div>
  </main>
</template>

<script>
import axios from "axios";
import Loader from "@/components/LoaderComponent.vue";
import Disc from "@/components/DiscComponent.vue";
import state from "@/state.js";

export default {
  name: "SiteMain",
  components: {
    Loader,
    Disc,

  },
  data() {
    return {
      link: "http://localhost:8888/PHP/php-ajax-dischi/milestone-2/db/db.php",
      loading: true,
      discs: null,
    };
  },
  methods: {
    getApi() {
      axios
        .get(this.link)
        .then((response) => {
          console.log(response.data);
          this.discs = response.data;
          this.loading = false;
          console.log(this.discs);
        })
        .catch((error) => {
          console.log(error);
        });
    },
    getLists(){
        this.discs.forEach(disc => {
            if (!state.artists.includes(disc.author)){
                state.artists.push(disc.author)
            } else if (!state.genre.includes(disc.genre)){
                state.genre.push(disc.genre)
            }
        });
        
        console.log(state.artists, state.genre);
    }
  },
  computed: {
    filterDiscs() {
      if (this.discs !== null) {
        return this.discs.filter((disc) => {
          return disc.genre
            .toLowerCase()
            .includes(state.searchText.toLowerCase()) && disc.author.toLowerCase().includes(state.searchArtist.toLowerCase());
        });
      } else{
          return this.discs
      }
    },
  },
  mounted() {
    this.getApi();
  },
};
</script>


<style scoped lang="scss">
main {
  height: calc(100vh - 100px);
  background-color: rgba(30, 45, 59, 1);
  color: white;
  overflow: hidden;
  .container {
    height: 100%;
  }
}
</style>

