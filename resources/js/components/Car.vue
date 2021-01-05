<template>
  <li>
    <div class="car-element">

      <div style="overflow:auto">

        <div class="left">
          <img :src="car.img" alt="Image car">
        </div>

        <div class="mid">
          <h3>{{ car.title }}</h3>

          <button class="btn-icon"><i class="fa fa-user"></i> {{car.persons}}</button>
          <button class="btn-icon"><i class="fa fa-unlock"></i> {{car.doors}}</button>
          <button class="btn-icon"><i class="fa fa-battery-full"></i> {{car.liters_per}}L/100km</button>

          <h4>Description</h4>
          <div class="car-desc-text">{{ car.description }}</div>
        </div>

        <div class="right">
          <div class="car-price">
            ${{ car.price }}
          </div>
          <button>Book Now</button>

        </div>
        <button class="btn-astext" @click="deleteCar(car.id)">Delete car</button>

      </div>
    </div>
  </li>

</template>

<script>
export default {
  name: "Car",
  props: {
    car: {
      type: Object,
      default: () => {
      }
    }
  }, methods: {
    deleteCar(id) {
      this.$store.dispatch('deleteCar', id)
    }
  }
}
</script>

<style lang='scss' scoped>
* {
  box-sizing: border-box;
}

.car-element {
  display: block;
  margin: 1em;
  padding: 1em;
  border: 3px solid #ccc;
  background: #f7f7f7;

  &:hover {
    background: lightgray;
  }


  .left {
    float: left;
    width: 20%;

  }

  .left img {
    padding: 8px;
    margin-top: 7px;
    display: block;
    max-width: 100%;
    max-height: 100%;

  }

  .mid {
    float: left;
    width: 60%;
    padding: 0 20px;

    .car-desc-text{
      color: #A3A3A3;
    }

    button{
      border: none;
      color: white;
      padding: 4px 2px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 8px 2px;
      cursor: pointer;
      &.btn-icon{
        background-color: white;
        color: black;
        border: 2px solid #e7e7e7;
        border-radius: 12px;
      }
    }
  }

  .right {

    float: left;
    width: 20%;
    padding: 15px;
    margin-top: 7px;
    text-align: center;

    .car-price {
      padding-bottom: 10px;
      font-size: x-large;
      color: #5DAC6E
    }
  }

  @media only screen and (max-width: 620px) {
    /* For mobile phones: */
    .left, .mid, .right {
      width: 100%;
    }
  }


}

button {
  width: auto;
  padding: 9px 15px;
  background: #22313F;
  border: 0;
  font-size: 14px;
  color: #F6F6F6;
  cursor: pointer;
}


.btn-astext {
  background: none;
  border: none;
  margin: 0;
  color: #22313F;
  padding-left: 10px;

  &:hover {
    color: red;
    font-size: smaller;
  }
}

</style>