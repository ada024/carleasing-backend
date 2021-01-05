<template>
<div id="sidebar">
  <Sort/>
</div>
</template>

<script>
import Sort from './Sort'

export default  {
  components:{
    Sort
  }
};

</script>


<style lang='scss' scoped>
#sidebar {
  padding-top: 5rem;
  padding-left: 1rem;
  display: flex;
  flex-direction: column;
  min-height: 100vh;
  min-width: 150px;
  max-width: 150px;
  flex-grow: 1;
  background-color: #191c1f;
  justify-content: left;

}
</style>


