const { createApp } = Vue;

createApp({
  data() {
    return {
      disks: [],
      apiURL: 'api.php'
    }
  },
  mounted() {

    // Perform the request to the API
    axios.get(this.apiURL)
      .then((result) => {
        console.log(result);
      }
      )
  }
}).mount('#app')