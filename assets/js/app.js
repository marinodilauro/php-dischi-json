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

    },

    openCardModal(i) {
      this.disks[i].isOpen = !this.disks[i].isOpen;
      console.log(this.disks[i].title, this.disks[i].isOpen);
    }

  },
  mounted() {

    // Perform the request to the API
    axios.get(this.apiURL)
      .then((result) => {
        // console.log(result);

        let disk;

        result.data.forEach(data => {
          let disk = { ...data, isOpen: false };
          this.disks.push(disk);
        });

        console.log(this.disks);
      }
      )
      .catch((err) => {
        console.log(err.message);
      })
  }
}).mount('#app')