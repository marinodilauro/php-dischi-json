const { createApp } = Vue;

createApp({
  data() {
    return {
      disks: [],
      apiURL: 'api.php'
    }
  },
  methods: {
    manageTitleSingleQuote(i) {

      const chars = { '"': "'" };
      return this.disks[i].title.replace(/["]/g, match => chars[match]);

    },
    manageAuthorSingleQuote(i) {

      const chars = { '"': "'" };
      return this.disks[i].author.replace(/["]/g, match => chars[match]);

    }
  },
  mounted() {

    // Perform the request to the API
    axios.get(this.apiURL)
      .then((result) => {
        console.log(result);
        this.disks = result.data;
      }
      )
      .catch((err) => {
        console.log(err.message);
      })
  }
}).mount('#app')