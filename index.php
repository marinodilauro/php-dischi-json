<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Fontawesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- CSS link -->
  <link href='./assets/css/style.css' rel='stylesheet'>

  <title>php-dischi-json</title>
</head>

<body>

  <div id="app">

    <header id="header">

      <nav class="navbar navbar-expand-sm navbar-dark">
        <div class="container">

          <a class="navbar-brand" href="#">
            <img src="./assets/img/logo.svg" alt="">
          </a>

          <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="collapsibleNavId">

            <ul class="navbar-nav me-auto mt-2 mt-lg-0">

              <li class="nav-item">
                <a class="nav-link active" href="index.php" aria-current="page">Home
                  <span class="visually-hidden">(current)</span></a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" href="about.php" aria-current="page">Playlist
                  <span class="visually-hidden">(current)</span></a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" href="about.php" aria-current="page">Cerca
                  <span class="visually-hidden">(current)</span></a>
              </li>

            </ul>

          </div>
        </div>
      </nav>

    </header>

    <main id="main">

      <div class="container">
        <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 g-5 my-3">

          <div class="col m-0" v-for="(disk, index) in disks">

            <div class="card rounded-3" @click="openCardModal(index)">

              <img class="card-img-top px-5 pt-4" :src="disk.poster" alt="Title" />

              <div class="card-body d-flex flex-column justify-content-center align-items-center">

                <h4 class="card-title">{{manageTitleSingleQuote(index)}}</h4>

                <p>{{manageAuthorSingleQuote(index)}}</p>

                <div class="disk_year">
                  <p><strong>{{disk.year}}</strong></p>
                </div>

              </div>

            </div>

            <div class="modal" :class="{'isOpen': disk.isOpen}">

              <div class="card d-flex flex-column justify-content-center align-items-center border-0 rounded-3">

                <img class="card-img-top px-5 pt-4" :src="disk.poster" alt="Title" />

                <div class="card-body d-flex flex-column align-items-center flex-grow-0">

                  <h4 class="card-title">{{manageTitleSingleQuote(index)}}</h4>

                  <p>{{manageAuthorSingleQuote(index)}}</p>

                  <div class="disk_year">
                    <p><strong>{{disk.year}}</strong></p>
                  </div>

                </div>

                <button class="button" @click="openCardModal(index)">
                  <i class="fa-solid fa-xmark fa-lg text-white"></i>
                  <div class="close">Close</div>
                </button>

              </div>
            </div>
          </div>
        </div>

      </div>

  </div>

  </div>

  </main>

  </div>





  <!-- Axios CDN link -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js' integrity='sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>

  <!-- Vue JS CDN link -->
  <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>

  <!-- JS link -->
  <script src='./assets/js/app.js'></script>
</body>

</html>