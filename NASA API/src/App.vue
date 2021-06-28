<template>
  <span>Enter a Date:</span>
  <input
    id="date"
    type="date"
    placeholder="YYYY-MM-DD Format Only"
    v-model="date"
  />

  <button @click="handleInput">Send</button>
  <Home
    v-bind:url="info.url"
    v-bind:date="info.date"
    v-bind:explanation="info.explanation"
    v-bind:title="info.title"
  />
  <!-- here we import ther home component to use it in all our site -->
  <router-view />
  <!-- this is will take you to the home page route which is -> '/' <---->
</template>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  width: 80%;
}
</style>

<script>
import Home from "./components/home.vue";
export default {
  name: "App",
  components: {
    Home, // hna khadmna home after we imported
  },
  data() {
    return {
      date: "",
      info: {
        url: "",
        date: "",
        explanation: "",
        title: "",
      },
    };
  },
  methods: {
    handleInput() {
      // console.log(typeof this.date); // logs the input value    },\
      fetch(
        `https://api.nasa.gov/planetary/apod?date=${this.date}&hd=true&api_key=PX6KQodjwM0QXhS5JSHPYRAp7WyPGe8J2ui06hFi`
      )
        .then((res) => res.json()) // parse response as JSON (can be res.text() for plain response)
        .then((response) => {
          console.log(response);
          this.info.title = response.title;
          if (response.media_type == "image") {
            this.info.url = response.hdurl;
          } else {
            alert(' no img')
          }
          this.info.explanation =
            response.explanation;
        })
        // .catch((err) => {
        //   console.log(`error ${err}`);
        //   alert("sorry, there are no results for your search");
        // });
    },
  },
};
</script>
<style>

</style>
