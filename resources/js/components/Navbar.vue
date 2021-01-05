<template>
  <div id="navbar-wrap" class="card-shadow">
    <div id="navbar">
      <h2 @click="$router.push('/')">Cars2go</h2>
      <div>
        <h2 @click="showModal =true">Add new Car</h2>
        <input v-model="search" type="text" placeholder="Search... (name/description)">

      </div>

      <modal v-if="showModal" @cancel="showModal = !showModal">
        <template v-slot:header>
          <h3 class="m-0" style="color: white">Add new car</h3>
        </template>
        <template v-slot:body>
          <form
              @submit.prevent="addCar"
              ref="carForm"
              id="car-form">
            <label>Title</label>
            <input
                required
                v-model="form.title"
                type="text"
                placeholder="Title"
            />
            <br>
            <label>Price</label>
            <input
                required
                v-model="form.price"
                type="number"
                placeholder="Price"
            />
            <br>
            <label>Image URL</label>
            <input
                required
                v-model="form.img"
                type="text"
                placeholder="Image URL"
            />
            <br>
            <div id="form-inline">
              <label>Persons</label>
              <input
                  required
                  v-model="form.persons"
                  type="text"
                  placeholder="Persons"
              />
              <label>Doors</label>
              <input
                  required
                  v-model="form.doors"
                  type="text"
                  placeholder="Doors"
              />
              <label>Liters per 100 km</label>
              <input
                  required
                  v-model="form.liters_per"
                  type="text"
                  placeholder="Liters per 100 km"
              />
            </div>

            <hr/>
            <label>Description</label>
            <textarea
                required
                v-model="form.description"
                placeholder="Description..."
                rows="6"
            />
          </form>
        </template>
        <template v-slot:footer>
          <button id="add-car" @click="$refs.carForm.requestSubmit()">
            Submit
          </button>
        </template>

      </modal>
    </div>

  </div>
</template>


<script>



export default {
  data() {
    return {
      search: '',
      showModal: false,
      form: {
        id: 1,
        title: '',
        price: null,
        img: "",
        persons: null,
        doors: null,
        liters_per: null,
        description: '',
      }
    }
  }, watch: {
    search() {
      this.$store.dispatch("search", this.search)
    }
  }, methods: {
    addCar(evt) {
      console.log(evt)
      evt.preventDefault()

      this.$store.dispatch('addCar', this.form);
      this.showModal = false;

    }
  }
};
</script>

<style scoped>

</style>
