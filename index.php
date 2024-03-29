<?php

  session_start();

  if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
  }

?>

<!DOCTYPE html>
<html>
  <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous"
  />
  <head>
    <title>Video Club</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, user-scalable=no"
    />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript>
      <link rel="stylesheet" href="assets/css/noscript.css"
    /></noscript>
  </head>

  <body class="homepage is-preload">
    <div id="page-wrapper">
      <!-- Cabecera -->
      <div id="header">
        <!-- Subtítulo -->
        <div class="inner">
          <header>
            <h1><a href="index.html" id="logo">Películas Destacadas</a></h1>
            <hr />
            <p>¡Últimas estrenos de peliculas disponibles!</p>
          </header>
          <footer>
            <a href="#banner" class="button circled scrolly">Ir</a>
          </footer>
        </div>

        <!-- Nav -->
        <nav id="nav">
          <ul>
            <li><a href="index.html">Inicio</a></li>
            <li>
              <a href="#">Otras categorías</a>
              <ul>
                <li><a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Magna phasellus</a></li>
                <li><a href="#">Etiam dolore nisl</a></li>
                <li>
                  <a href="#">And a submenu &hellip;</a>
                  <ul>
                    <li><a href="#">Lorem ipsum dolor</a></li>
                    <li><a href="#">Phasellus consequat</a></li>
                    <li><a href="#">Magna phasellus</a></li>
                    <li><a href="#">Etiam dolore nisl</a></li>
                  </ul>
                </li>
                <li><a href="#">Veroeros feugiat</a></li>
              </ul>
            </li>
            <li><a href="left-sidebar.html">Estrenos</a></li>
            <li><a href="right-sidebar.html">Acción</a></li>
            <li><a href="no-sidebar.html">Romance</a></li>
            <li>
              <a href="#">Perfil</a>
              <ul>
                <li><a href="#"><?php echo $_SESSION["nombre"]; echo " "; echo $_SESSION["apellidoPaterno"]; ?></a></li>
                <li><a href="cerrar_sesion.php">Cerrar sesion</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>

      <!-- Banner -->
      <section id="banner">
        <header>
          <h2>Estrenos Disponibles</h2>
          <p></p>
        </header>
      </section>

      <!-- Carousel -->
      <section class="carousel">
        <div class="reel">
          <article>
            <a href="#" class="image featured"
              ><img src="images/pic02.jpg" alt=""
            /></a>
            <header>
              <h3><a href="#">Fermentum sagittis proin</a></h3>
            </header>
            <p>
			  Commodo id natoque malesuada sollicitudin elit suscipit magna.
			  <button type="button" class="btn btn-success">
					¡Agregar Película!
				  </button>
            </p>
          </article>

          <article>
            <a href="#" class="image featured"
              ><img src="images/pic03.jpg" alt=""
            /></a>
            <header>
              <h3><a href="#">Sed quis rhoncus placerat</a></h3>
            </header>
            <p>
			  Commodo id natoque malesuada sollicitudin elit suscipit magna.
			  <button type="button" class="btn btn-success">
					¡Agregar Película!
				  </button>
            </p>
          </article>

          <article>
            <a href="#" class="image featured"
              ><img src="images/pic04.jpg" alt=""
            /></a>
            <header>
              <h3><a href="#">Ultrices urna sit lobortis</a></h3>
            </header>
            <p>
			  Commodo id natoque malesuada sollicitudin elit suscipit magna.
			  <button type="button" class="btn btn-success">
					¡Agregar Película!
				  </button>
            </p>
          </article>

          <article>
            <a href="#" class="image featured"
              ><img src="images/pic05.jpg" alt=""
            /></a>
            <header>
              <h3><a href="#">Varius magnis sollicitudin</a></h3>
            </header>
            <p>
			  Commodo id natoque malesuada sollicitudin elit suscipit magna.
			  <button type="button" class="btn btn-success">
					¡Agregar Película!
				  </button>
            </p>
          </article>

          <article>
            <a href="#" class="image featured"
              ><img src="images/pic01.jpg" alt=""
            /></a>
            <header>
              <h3><a href="#">Pulvinar sagittis congue</a></h3>
            </header>
            <p>
			  Commodo id natoque malesuada sollicitudin elit suscipit magna.
			  <button type="button" class="btn btn-success">
					¡Agregar Película!
				  </button>
            </p>
          </article>

          <article>
            <a href="#" class="image featured"
              ><img src="images/pic02.jpg" alt=""
            /></a>
            <header>
              <h3><a href="#">Fermentum sagittis proin</a></h3>
            </header>
            <p>
			  Commodo id natoque malesuada sollicitudin elit suscipit magna.
			  <button type="button" class="btn btn-success">
					¡Agregar Película!
				  </button>
            </p>
          </article>

          <article>
            <a href="#" class="image featured"
              ><img src="images/pic03.jpg" alt=""
            /></a>
            <header>
              <h3><a href="#">Sed quis rhoncus placerat</a></h3>
            </header>
            <p>
			  Commodo id natoque malesuada sollicitudin elit suscipit magna.
			  <button type="button" class="btn btn-success">
					¡Agregar Película!
				  </button>
            </p>
          </article>

          <article>
            <a href="#" class="image featured"
              ><img src="images/pic04.jpg" alt=""
            /></a>
            <header>
              <h3><a href="#">Ultrices urna sit lobortis</a></h3>
            </header>
            <p>
			  Commodo id natoque malesuada sollicitudin elit suscipit magna.
			  <button type="button" class="btn btn-success">
					¡Agregar Película!
				  </button>
            </p>
          </article>

          <article>
            <a href="#" class="image featured"
              ><img src="images/pic05.jpg" alt=""
            /></a>
            <header>
              <h3><a href="#">Varius magnis sollicitudin</a></h3>
            </header>
            <p>
			  Commodo id natoque malesuada sollicitudin elit suscipit magna.
			                  <button type="button" class="btn btn-success">
									¡Agregar Película!
                </button>
            </p>
          </article>
        </div>
      </section>

      <!-- Main -->

      <!-- Features -->
      <div class="wrapper style1">
        <section id="features" class="container special">
          <header>
            <h2>Morbi ullamcorper et varius leo lacus</h2>
            <p>
              Ipsum volutpat consectetur orci metus consequat imperdiet duis
              integer semper magna.
            </p>
          </header>
          <div class="row">
            <article class="col-4 col-12-mobile special">
              <a href="#" class="image featured"
                ><img src="images/pic07.jpg" alt=""
              /></a>
              <header>
                <h3><a href="#">Gravida aliquam penatibus</a></h3>
              </header>
              <p>
                Amet nullam fringilla nibh nulla convallis tique ante proin
                sociis accumsan lobortis. Auctor etiam porttitor phasellus
                tempus cubilia ultrices tempor sagittis. Nisl fermentum
                consequat integer interdum.
              </p>
            </article>
            <article class="col-4 col-12-mobile special">
              <a href="#" class="image featured"
                ><img src="images/pic08.jpg" alt=""
              /></a>
              <header>
                <h3><a href="#">Sed quis rhoncus placerat</a></h3>
              </header>
              <p>
                Amet nullam fringilla nibh nulla convallis tique ante proin
                sociis accumsan lobortis. Auctor etiam porttitor phasellus
                tempus cubilia ultrices tempor sagittis. Nisl fermentum
                consequat integer interdum.
              </p>
            </article>
            <article class="col-4 col-12-mobile special">
              <a href="#" class="image featured"
                ><img src="images/pic09.jpg" alt=""
              /></a>
              <header>
                <h3><a href="#">Magna laoreet et aliquam</a></h3>
              </header>
              <p>
                Amet nullam fringilla nibh nulla convallis tique ante proin
                sociis accumsan lobortis. Auctor etiam porttitor phasellus
                tempus cubilia ultrices tempor sagittis. Nisl fermentum
                consequat integer interdum.
              </p>
            </article>
          </div>
        </section>
      </div>

      <!-- Footer -->
      <div id="footer">
        <div class="container">
          <div class="row">
            <!-- Tweets -->
            <section class="col-4 col-12-mobile">
              <header>
                <h2 class="icon brands fa-twitter circled">
                  <span class="label">Tweets</span>
                </h2>
              </header>
              <ul class="divided">
                <li>
                  <article class="tweet">
                    Amet nullam fringilla nibh nulla convallis tique ante sociis
                    accumsan.
                    <span class="timestamp">5 minutes ago</span>
                  </article>
                </li>
                <li>
                  <article class="tweet">
                    Hendrerit rutrum quisque.
                    <span class="timestamp">30 minutes ago</span>
                  </article>
                </li>
                <li>
                  <article class="tweet">
                    Curabitur donec nulla massa laoreet nibh. Lorem praesent
                    montes.
                    <span class="timestamp">3 hours ago</span>
                  </article>
                </li>
                <li>
                  <article class="tweet">
                    Lacus natoque cras rhoncus curae dignissim ultricies.
                    Convallis orci aliquet.
                    <span class="timestamp">5 hours ago</span>
                  </article>
                </li>
              </ul>
            </section>

            <!-- Posts -->
            <section class="col-4 col-12-mobile">
              <header>
                <h2 class="icon solid fa-file circled">
                  <span class="label">Posts</span>
                </h2>
              </header>
              <ul class="divided">
                <li>
                  <article class="post stub">
                    <header>
                      <h3><a href="#">Nisl fermentum integer</a></h3>
                    </header>
                    <span class="timestamp">3 hours ago</span>
                  </article>
                </li>
                <li>
                  <article class="post stub">
                    <header>
                      <h3><a href="#">Phasellus portitor lorem</a></h3>
                    </header>
                    <span class="timestamp">6 hours ago</span>
                  </article>
                </li>
                <li>
                  <article class="post stub">
                    <header>
                      <h3><a href="#">Magna tempus consequat</a></h3>
                    </header>
                    <span class="timestamp">Yesterday</span>
                  </article>
                </li>
                <li>
                  <article class="post stub">
                    <header>
                      <h3><a href="#">Feugiat lorem ipsum</a></h3>
                    </header>
                    <span class="timestamp">2 days ago</span>
                  </article>
                </li>
              </ul>
            </section>

            <!-- Photos -->
            <section class="col-4 col-12-mobile">
              <header>
                <h2 class="icon solid fa-camera circled">
                  <span class="label">Photos</span>
                </h2>
              </header>
              <div class="row gtr-25">
                <div class="col-6">
                  <a href="#" class="image fit"
                    ><img src="images/pic10.jpg" alt=""
                  /></a>
                </div>
                <div class="col-6">
                  <a href="#" class="image fit"
                    ><img src="images/pic11.jpg" alt=""
                  /></a>
                </div>
                <div class="col-6">
                  <a href="#" class="image fit"
                    ><img src="images/pic12.jpg" alt=""
                  /></a>
                </div>
                <div class="col-6">
                  <a href="#" class="image fit"
                    ><img src="images/pic13.jpg" alt=""
                  /></a>
                </div>
                <div class="col-6">
                  <a href="#" class="image fit"
                    ><img src="images/pic14.jpg" alt=""
                  /></a>
                </div>
                <div class="col-6">
                  <a href="#" class="image fit"
                    ><img src="images/pic15.jpg" alt=""
                  /></a>
                </div>
              </div>
            </section>
          </div>
          <hr />
          <div class="row">
            <div class="col-12">
              <!-- Contact -->
              <section class="contact">
                <header>
                  <h3>Nisl turpis nascetur interdum?</h3>
                </header>
                <p>
                  Urna nisl non quis interdum mus ornare ridiculus egestas
                  ridiculus lobortis vivamus tempor aliquet.
                </p>
                <ul class="icons">
                  <li>
                    <a href="#" class="icon brands fa-twitter"
                      ><span class="label">Twitter</span></a
                    >
                  </li>
                  <li>
                    <a href="#" class="icon brands fa-facebook-f"
                      ><span class="label">Facebook</span></a
                    >
                  </li>
                  <li>
                    <a href="#" class="icon brands fa-instagram"
                      ><span class="label">Instagram</span></a
                    >
                  </li>
                  <li>
                    <a href="#" class="icon brands fa-pinterest"
                      ><span class="label">Pinterest</span></a
                    >
                  </li>
                  <li>
                    <a href="#" class="icon brands fa-dribbble"
                      ><span class="label">Dribbble</span></a
                    >
                  </li>
                  <li>
                    <a href="#" class="icon brands fa-linkedin-in"
                      ><span class="label">Linkedin</span></a
                    >
                  </li>
                </ul>
              </section>

              <!-- Copyright -->
              <div class="copyright">
                <ul class="menu">
                  <li>&copy; Untitled. All rights reserved.</li>
                  <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.dropotron.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
