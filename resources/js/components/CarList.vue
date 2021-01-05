<template>
  <div id="car-container">
    <ul class="car-list">
      <Car v-for="ccar in cars" :key="ccar.id" :car="ccar"/>
    </ul>
  </div>
</template>

<script>
import Car from './Car'

export default {
  components: {
    Car,
  },
  name: "CarList",
  data() {
    return {}
  }, computed: {
    cars() {
      return this.$store.getters.getCars;
    }
  }, created() {
    this.$store.dispatch("fetchCars");
  },
}
</script>

<style lang='scss' scoped>


#car-container {
  padding-top: 5rem;
  .car-list {
    list-style: none;
    clear: both;
  }
}
</style>