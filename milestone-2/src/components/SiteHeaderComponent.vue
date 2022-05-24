<template>
  <header class="px-4">
    <img
      src="https://brandlogos.net/wp-content/uploads/2021/12/spotify-brandlogo.net_.png"
      alt=""
    />
    <span>Filta per genere:</span>
    <SelectDisc
      v-model="genre"
      :array="genreList"
      @selectSubmit="searchGenre"
    />
    <span>Filta per autore:</span>
    <SelectDisc
      v-model="artist"
      :array="authorList"
      @selectSubmit="searchAuthor"
    />
  </header>
</template>

<script>
import axios from "axios";
import SelectDisc from "@/components/SelectDiscComponent.vue";
import state from "@/state.js";

export default {
  name: "SiteHeader",
  components: {
    SelectDisc,
  },
  data() {
    return {
      genre: "",
      artist: "",
      genreList: null,
      authorList: state.artists,
    };
  },
  methods: {
    searchGenre() {
      console.log("Searching for...");
      console.log(this.genre, state);
      state.searchText = this.genre;
      console.log(state.searchText);
    },
    searchAuthor() {
      console.log("Searching for...");
      console.log(this.artist, state);
      state.searchArtist = this.artist;
      console.log(state.searchArtist);
    },
    getGenre() {
      axios
        .get('http://localhost:8888/PHP/php-ajax-dischi/milestone-2/db/genreList.php')
        .then((response) => {
          console.log(response.data);
          this.genreList = response.data;
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
  mounted() {
      this.getGenre()
  },
};
</script>


<style scoped lang="scss">
header {
  height: 100px;
  background-color: rgba(46, 58, 70, 1);
  display: flex;
  justify-content: flex-start;
  align-items: center;
  color: white;
  font-size: 1.3rem;

  img {
    height: 80px;
    margin-right: 3rem;
  }
  span {
    margin-right: 1rem;
    margin-left: 4rem;
  }
}
</style>


