<template>
  <div id="sort">
    <h3>Sort by: </h3>
    <p v-for="(sort,index) in sorts" :key="index" @click="sortBy(sort)">
      {{sort.name}}
    </p>
  </div>
</template>

<script>
export default {
  name: "Sort",
  data() {
    return {
      sorts: [
        {
          name: 'Price low',
          key: 'price',
          order: 'desc'
        },
        {
          name: 'Price high',
          key: 'price',
          order: 'asc'
        },
        {
          name: 'Persons few',
          key: 'persons',
          order: 'desc'
        },
        {
          name: 'Persons many',
          key: 'persons',
          order: 'asc'
        }
      ]
    }
  },methods:{
    sortBy(sort){
      this.$store.dispatch('sortBy',sort)
    }
  }
};
</script>

<style lang='scss' scoped>
#sort {
  text-align: left;
  color: rgb(143, 143, 143);
  cursor: pointer;

  p {
    margin-left: 10px;
  }
}
</style>