<template>
  <div class="">
    <h1>{{ date }}</h1>
    <img :src="url" alt="" />
    <h1>{{ explanation }}</h1>
    <h1>{{ title }}</h1>
  </div>
</template>
<script>
export default {
  name: "home",
  props: {
    url: String,
    date: String,
    explanation: String,
    title: String,
  },
};
</script>
<style scoped>
</style>
