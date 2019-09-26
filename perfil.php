<?php
  $rutaCss = "css/perfil.css";
  $titulo = "Perfil de Usuario";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php require_once("est/head.php") ?>
  <body>
    <?php require("est/header.php") ?>
    <div class="container">

        <div class="row">
              <div class="col-lg-3 col-md-4 col-sm-4">
                  <aside class ="left-column">
                      <div class="gb-my-account-user">
                          <div class="gb-my-account-user-letters">
                              <h3>Perfil de Usuario</h3>
                            <img src="img/Mark-Zuckerberg.jpg" id="perfil" class="rounded-circle img-responsive">
                            <br>
                              <a href="#/logout" class="gb-my-account-user-close">Cerrar Sesión</a>
                          </div>

                          </div>
                      <section class="tutorials-container">
                          <article id="Inicio" class="tutorial">
                              <button type="button" class="btn btn-primary btn-lg btn-block">
                              <p>Inicio</p>

                          </article>
                          <article id="MisDatos" class="tutorial">
                              <button type="button" class="btn btn-primary btn-lg btn-block">
                              <p>Mis Compras</p>

                            </article>
                          <article class="tutorial">
                              <button type="button" class="btn btn-primary btn-lg btn-block">
                              <p>Mis Datos</p>

                          </article>
                          <article class="tutorial">
                              <button type="button" class="btn btn-primary btn-lg btn-block">
                              <p>Mis Favoritos</p>
                          </article>
                          <article class="tutorial">
                              <button type="button" class="btn btn-primary btn-lg btn-block">
                              <p>Historial de navegacion</p>

                          </article>
                      </section>
                          <h3>Nuestas Ofertas</h3>
                      <section class= "ads-container">
                          <div class="container">
                             <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                  <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                  </ol>
                                      <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="img/SO1.jpg" class="d-block w-100 img-responsive" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="img/SO2.jpg" class="d-block w-100 img-responsive" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                 <img src="img/SO3.jpg" class="d-block w-100 img-responsive" alt="...">
                                            </div>
                                      </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                      </a>
                            </div>
                        </div>
                    </section>
              </aside>
      </div>
      <div class="col-lg-9 col-md-8 col-sm-8">
    <section>

         <h3>Mis Compras</h3>
           <div class="gb-my-account-db-recents">
           <div class="row">
             <div class="col-sm-4 col-md-4 col lg-4">
                   <div class="gb-my-account-db-item gb-my-account-db-received">
                       <div class="gb-my-account-text">
                               <span class="gb-icon-checkmark"></span>
                               <h5>Concretadas</h5>
                               <a href="#/MisCompras/concretadas">Ver Todas</a>
                       </div>
                       <div class="gb-my-account-number">
                               <span>1</span>
                               </div>
                       </div>
                   </div>
             <div class="col-sm-4 col-md-4 col lg-4">
                   <div class="gb-my-account-item gb-my-account-db-in-process">
                       <div class="gb-my-account-text">
                             <span class="gb-icon-clock"></span>
                             <h5>En Proceso</h5>
                             <a href="#/MisCompras/en_proceso">Ver Todas</a>
                       </div>
                        <div class="gb-my-account-number">
                             <span>0</span>

                       </div>
                   </div>
              </div>
                   <div class="col-sm-4 col-md-4 col lg-4">
                        <div class="gb-my-account-db-item gb-my-account-db-incomplete">
                              <div class="gb-my-account-text">
                                     <span class="gb-icon-cross"></span>
                                     <h5>Rechazadas</h5>
                                     <a href="#/MisCompras/rechazadas">Ver Todas</a>

                               </div>
                         <div class="gb-my-account-number">
                                 <span>0</span>

                         </div>
                     </div>

           </div>

           </div>

         </div>
          <div class="gb-my-account-module">
            <h4 class="gb-my-account-title">Que puedo hacer en mi cuenta?</h4>
            <div class="gb-account-box gb-my-account-db-description">
              <div class="row">
                <div class="col-sm-6 col-md-4 gb-my-account-db-item">
                  <h5>Actualizar tus datos</h5>
                  <img src="img/usuario1.jpg" class="d-block w-100 img-responsive" alt="">
                  <div class="gb-my-account-db-image">
                    <div class="gb-my-account-db-image-content">
                    <p>Configura tus datos personales y contraseña
                      <br>
                    <a href="#/PERFIL.html">Ir a mis datos</a>
                      </p>
                    </div>

                  </div>
                    </div>
                  <div class="col-sm-6 col-md-4 gb-my-account-db-item">
                    <h5>Ver Favoritos</h5>
                    <img src="img/favoritos1.jpg" class="d-block w-100 img-responsive" alt="">
                    <div class="gb-my-account-db-image">
                      <div class="gb-my-account-db-image-content">
                      <p>Administra tus productos favoritos rapido y facil
                        <br>
                      <a href="#/PERFIL.html">Ir a mis favoritos</a>
                        </p>
                      </div>

                    </div>
                      </div>
                    <div class="col-sm-6 col-md-4 gb-my-account-db-item">
                      <h5>Mis Intereses</h5>
                      <img src="img/intereses1.jpg"class="d-block w-100 img-responsive" alt="">
                      <div class="gb-my-account-db-image">
                        <div class="gb-my-account-db-image-content">
                        <p>Configura tus intereses para mejorar tu experiencia de compra
                          <br>
                        <a href="#/PERFIL.html">Ir a Mis Intereses</a>
                          </p>
                        </div>

                      </div>
                        </div>
                      <div class="col-sm-6 col-md-4 gb-my-account-db-item">
                        <h5>Historial de Navegacion</h5>
                        <img src="img/navegacion.jpg"class="d-block w-100 img-responsive" alt="">
                        <div class="gb-my-account-db-image">
                          <div class="gb-my-account-db-image-content">
                          <p>Recuperá los producots que estuviste viendo
                            <br>
                          <a href="#/PERFIL.html">Ir a Historial de Navegacion</a>
                            </p>
                          </div>

                        </div>
                          </div>
                      </div>

                    </div>

                  </div>


                              </div>





      <!-- <div class="container-column-right">
         <h3>Mis Favoritos</h3>
      </div>
      <div class="container-column-right">
         <h3>Historiales de Navegacion</h3>
      </div> -->
      </section>
      </div>
      </div>


      </div>
      </body>
      <?php require("est/footer.php") ?>
</html>
