const lvCarsApi = {
    getCars: async () => {
        return await axios.get('http://localhost:8000/api/cars');
    }
}

export default lvCarsApi;
