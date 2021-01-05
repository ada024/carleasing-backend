<template>
    <h1>DEMOOOOOOOOOOOO</h1>
    <div>Home VUE!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</div>

</template>

<script>



export default {
    name: 'Home',
    components: {

    }
    , created() {
        console.log("Created!!!")
        axios.get('http://localhost:8000/api/cars').then(response => {
            console.log(response);
        }).catch(err => {
            console.log(err)
        })
    },
}
</script>

<style type="text/css">
#main {
    display: flex;
    margin-top: 0px;
    width: 93%;
    padding: 10px 0 0 10px;
    font-family: "Roboto Light";
}

</style>
