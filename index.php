<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Sidnelson_Lunas</title>
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet" />
    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- SCROOLL REVEAL JS LIBRARY CDN -->
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/1.css">
    <script type="text/javascript" src="js/1.js"></script>
</head>

<body>
    <!-- NAVIGATION -->
    <nav class="navbar navbar-expand-lg navbar-light fon fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Sidnelson_Lunas</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="#header">Inicio</a>
                    <a class="nav-item nav-link" href="#productos">Productos</a>
                    <a class="nav-item nav-link" href="#contact">FeedBack</a>
                    <a class="btn btn-outline-danger boton mx-2 nav-item nav-link" href="productos.php">Realizar pedido</a>
                </div>
            </div>
        </div>
    </nav>
  <header>
    <div class="container arriba py-5">
      <!-- Las Lunas -->
      <section id="header">
          <div class="container">
              <div class="row">
                  <div class="col-md-6 col-sm-6">
                      <div class="header-content-left">
                          <img src="imgs/laluna.jpg" style="width: 100%;">
                      </div>
                  </div>
                  <div class="col-md-6 col-sm-6 my-auto">
                      <div class="header-content-right">
                          <h1 class="display-4">Las Lunas</h1>
                          <p class="mt-3">Amet possimus omnis dolore aliquid quam. Officiis nulla nam laudantium iure amet. Debitis maiores enim modi porro sunt. Ratione harum quasi odit nemo rerum eveniet dolorem quas rem asperiores voluptate!</p>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- El Chiringuito -->
      <section>
          <div class="container mt-5">
              <div class="row">
                  <div class="col-md-6 col-sm-6 my-auto">
                      <div class="header-content-right">
                          <h1 class="display-4">El Chiringuito</h1>
                          <p class="mt-3 my-auto">Amet possimus omnis dolore aliquid quam. Officiis nulla nam laudantium iure amet. Debitis maiores enim modi porro sunt. Ratione harum quasi odit nemo rerum eveniet dolorem quas rem asperiores voluptate!</p>
                      </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                      <div class="header-content-left">
                          <img src="imgs/elchiringuito.jpg" style="width: 100%;">
                      </div>
                  </div>
              </div>
          </div>
      </section>
    </div>
  </header>
  <!-- GALERIA -->
    <section class="galeria p-4">
      <div class="container my-5" id="productos">
      <h3 class="mb-4 font-weight-bold">Productos</h3>
      <div class="card-deck my-2">
        <div class="card my-2">
          <img class="card-img-top" src="imgs/entrantes.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Entrantes</h5>
          </div>
        </div>
        <div class="card my-2">
          <img class="card-img-top" src="imgs/ensaladas.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Ensaladas</h5>
          </div>
        </div>
        <div class="card my-2">
          <img class="card-img-top" src="imgs/combinados.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Platos combinados</h5>
          </div>
        </div>
      </div> 
      <div class="card-deck my-2">
        <div class="card my-2">
          <img class="card-img-top" src="imgs/pasta.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Pasta</h5>
          </div>
        </div>
        <div class="card my-2">
          <a href="pizzas.php"><img class="card-img-top" src="imgs/pizzas.jpg" alt="Card image cap"></a>
          <div class="card-body">
            <h5 class="card-title">Pizzas</h5>
          </div>
        </div>
       <div class="card my-2">
          <img class="card-img-top" src="imgs/kebab.jpg" alt="Card image cap">
          <div class="card-body kebab">
            <h5 class="card-title">Kebab</h5>
          </div>
        </div>
      </div> 
      <div class="card-deck my-2">
       <div class="card my-2">
          <img class="card-img-top" src="imgs/vinos.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Vinos</h5>
          </div>
        </div>
        <div class="card my-2">
          <img class="card-img-top" src="imgs/bebidas.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Bebidas</h5>
          </div>
        </div>
        <div class="card my-2">
          <img class="card-img-top" src="imgs/postres.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Postres</h5>
          </div>
        </div>
      </div> 
    </div>
  </section>
    <!-- FOOTER -->
    <footer id="contact">
        <div class="container p-2">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="my-4">FeedBack</h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <textarea cols="30" rows="10" placeholder="Message" class="form-control"></textarea>
                            </div>
                            <button class="btn btn-outline-secondary btn-block">
                                Send
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </footer>
  </div>
    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>