<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS link -->
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>

  <!-- CSS link -->
  <link href='./assets/css/style.css' rel='stylesheet'>

  <title>php-dischi-json</title>
</head>

<body>

  <div id="app">

    <div class="container">
      <div class="row">
        <div class="col" v-for="(disk, index) in disks">
          <div class="card">
            <img class="card-img-top" :src="disk.poster" alt="Title" />
            <div class="card-body">
              <h4 class="card-title">{{disk.author + ' - ' + disk.title}}</h4>
              <div class="description">
                <p>{{disk.genre}}</p>
                <p>{{disk.year}}</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>





  <!-- Axios CDN link -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js' integrity='sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>

  <!-- Vue JS CDN link -->
  <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>

  <!-- JS link -->
  <script src='./assets/js/app.js'></script>
</body>

</html>