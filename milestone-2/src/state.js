import vue from 'vue'

const state = vue.observable({
    searchText: '',
    searchArtist: '',
    artists: [],
    genre: [],
})

export default state