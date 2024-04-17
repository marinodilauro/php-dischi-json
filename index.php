<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- CSS link -->
  <link href='./assets/css/style.css' rel='stylesheet'>

  <title>php-dischi-json</title>
</head>

<body>

  <div id="app">

    <div class="container my-5">
      <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 g-5">

        <div class="col m-0" v-for="(disk, index) in disks">
          <div class="card rounded-3">
            <img class="card-img-top px-5 pt-4" :src="disk.poster" alt="Title" />
            <div class="card-body d-flex flex-column justify-content-center align-items-center">
              <h4 class="card-title">{{disk.title}}</h4>
              <p>{{disk.author}}</p>
              <div class="disk_year">
                <p><strong>{{disk.year}}</strong></p>
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