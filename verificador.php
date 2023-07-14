
<?php
  include 'global/config.php';
  include 'global/conexion.php';
  include 'carrito.php';
  include 'templates/cabecera.php';
 reset  ($listaVentas);
?>



<!DOCTYPE html>
<html lang="en">
<head>
      <link rel="icon" type="image/ico" href="imagenes/icologo.ico">
      <title>Get Off Thex</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700i&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


      <style>
                  body
                  {

                    background-image: url('imagenes/fondoveri.png');
                    background-repeat: no-repeat;
                    background-attachment: fixed;
                    background-size: cover;

                  }
                  #img-contenedor img {
                  -webkit-transition:all .9s ease; /* Safari y Chrome */
                  -moz-transition:all .9s ease; /* Firefox */
                  -o-transition:all .9s ease; /* IE 9 */
                  -ms-transition:all .9s ease; /* Opera */
                  width:100%;
                  }
                  #img-contenedor:hover img {
                  -webkit-transform:scale(1.25);
                  -moz-transform:scale(1.25);
                  -ms-transform:scale(1.25);
                  -o-transform:scale(1.25);
                  transform:scale(1.25);
                  }
                  #img-contenedor {/*Ancho y altura son modificables al requerimiento de cada uno*/
                  width:150px;
                      height:150px;
                      border-radius:150px;
                       
                  overflow:hidden;
                  }
                     #titu
                    {
                      font-family: 'Raleway', sans-serif;
                      font-weight: 700;
                      font-size: 35px;
                      color: #C50304;
                    bottom: 200px;
                    }
                    #titu2
                    {
                      font-family: 'Raleway', sans-serif;
                      font-weight: 700;
                      font-size: 30px;
                      color: #7897ab;
                    }
                    #titu3
                    {
                      font-family: 'Raleway', sans-serif;
                      font-weight: 700;
                      font-size: 30px;
                      color: #3F3F44;
                    }
                    
                    #cuerp
                    {
                      font-family: 'Raleway', sans-serif;
                      font-weight: 500;
                      font-size: 18px;
                      color: #fff;
                    }
                    #resalto
                    {
                      font-family: 'Raleway', sans-serif;
                      font-weight: 700;
                      font-style: italic;
                      font-size: 16px;
                      color: #C50304;
                    }
                     #is
                    {
                      font-family: 'Raleway', sans-serif;
                      font-weight: 700;
                      font-size: 16px;
                      color: #7897ab;
                    }
                    #ark
                    {
                      font-family: 'Raleway', sans-serif;
                      font-weight: 700;
                      font-size: 16px;
                      color: #5ac576;
                    }
                    #cor{
                      font-family: Montserrat, sans-serif;
                      font-size: 25px;
                      color: #15FF02;
                    }
                    #extra{
                       background-color:#7B97AC;
                    }
                    #ex{

                          background-color: #d5edfd;
                    }
                    .container {
                      padding: 50px 70px;
                    }
                    .person {
                      border: 10px solid transparent;
                      margin-bottom: 25px;
                    }
                    .person:hover {
                      border-color: #f1f1f1;
                    }
                    .carousel{
                      width: 100%;
                    }
                    .carousel-inner img {
                      -webkit-filter: grayscale(50%);
                      filter: grayscale(90%);
                      margin: auto;
                    }
                    .carousel-caption h3 {
                      color: #fff !important;
                    }
                     @media (min-width: 766px) {
                      #barrav{
                        visibility: hidden;
                        background-color: transparent;
                      }
                      #imgbarra{
                        display: none;
                      }
                    }
                    @media (max-width: 766px) {
                      #barrav{
                        visibility: visible;
                      }
                      #imgbarra{
                        display: inline-block;
                        margin-left: 50px;

                      }
                      #prim2
                      {
                      background-color:rgba(0,0,0,0.7);
                      }
                      #navprim
                      {
                      background-color: #000000 !important;
                      }
                      #barrai
                      {
                        display: none;
                      }
                      .navbar{
                        background-color: transparent !important;
                      }
                    }
                    @media (max-width: 600px) {
                      .carousel-caption {
                        display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
                      }
                    }
                    @media (max-width: 768px) {
                      #navBot {
                        display: none; 
                      }
                    }
                   #navprim
                    {
                      background-color:rgba(0,0,0,0.6);
                    /*background-image: url('imagenes/wall.jpg');
                    background-repeat: repeat;*/
                    }
                    #navfondo
                    {
                    background-color: transparent !important;
                    }
                     #botonpad
                    {
                      padding-top: 15px;
                      padding-bottom: 15px;
                    }
                    #fondoins{
                      padding-top: 250px;
                      background-image: url('imagenes/fondoveri.png');
                    background-repeat: no-repeat;
                    background-size: cover;
                    }

                    #espacio{
                      margin-top: 5px;
                    }
                    .nav-tabs li a {
                      color: #777;
                    }
                    .navbar {
                      width: 100%;
                      font-family: Montserrat, sans-serif;
                      margin-bottom: 0;
                      background-color: transparent;
                      border: 0;
                      font-size: 12px !important;
                      letter-spacing: 4px;
                    }
                    .navbar li a, .navbar .navbar-brand { /*color letras navbar*/
                      color: #fff  !important; 
                      font-weight: 800;
                    }
                    .navbar-nav li a:hover { /*Cuando se seleciona un boton color*/
                      background-color: #C50304 !important;
                    }
                    .navbar-nav li.active a {
                      color: #fff !important;
                      background-color: #C50304 !important; /*color del boton clic*/
                    }
                    .navbar-default .navbar-toggle {
                      border-color:  #C50304;
                    }
                    .navbar-toggle {
                      position: relative;
                      float: right;
                      padding: 9px 10px;
                      margin-right: 25px;
                      margin-top: 30px;
                      margin-bottom: 8px;
                      background-color: #fff;
                      background-image: none;
                      border: 8px solid transparent;
                      border-radius: 25px;
                    }

                    footer {
                      background-color: #2d2d30;
                      color: #f5f5f5;
                      padding: 32px;
                    }
                    footer a {
                      color: #f5f5f5;
                    }
                    footer a:hover {
                      color: #777;
                      text-decoration: none;
                    }
                     
                    .form-control {
                      border-radius: 0;
                    }
                    textarea {
                      resize: none;
                    }
                    </style>



                    <style>
                        :root {
                    --main-white-color: white;
                    --main-black-color: black;
                  }

                   {
                    padding: 0;
                    margin: 0;
                    box-sizing: border-box;
                  }

                  .static {
                    position: static;
                  }

                  .cover {
                    background-size: cover;
                    background-position: center;
                    background-repeat: no-repeat;
                  }

                  .owl-carousel .owl-slide {
                    position: relative;
                    height: 100vh;
                    background-color: lightgray;
                  }

                  .owl-carousel .owl-slide-animated {
                    -webkit-transform: translateX(20px);
                            transform: translateX(20px);
                    opacity: 0;
                    visibility: hidden;
                    transition: all 0.05s;
                  }

                  .owl-carousel .owl-slide-animated.is-transitioned {
                    -webkit-transform: none;
                            transform: none;
                    opacity: 1;
                    visibility: visible;
                    transition: all 0.5s;
                  }

                  .owl-carousel .owl-slide-title.is-transitioned {
                    transition-delay: 0.2s;
                  }

                  .owl-carousel .owl-slide-subtitle.is-transitioned {
                    transition-delay: 0.35s;
                  }

                  .owl-carousel .owl-slide-cta.is-transitioned {
                    transition-delay: 0.5s;
                  }

                  .owl-carousel .owl-dots,
                  .owl-carousel .owl-nav {
                    position: absolute;
                  }

                  .owl-carousel .owl-dots .owl-dot,
                  .owl-carousel .owl-nav [class*="owl-"]:focus {
                    outline: none;
                  }

                  .owl-carousel .owl-dots .owl-dot span {
                    background: transparent;
                    border: 1px solid var(--main-black-color);
                    transition: all 0.5s ease;
                  }

                  .owl-carousel .owl-dots .owl-dot:hover span,
                  .owl-carousel .owl-dots .owl-dot.active span {
                    background: var(--main-black-color);
                  }

                  .owl-carousel .owl-nav {/*modifique dimencion*/
                    left: 50%;
                    top: 50%;
                    -webkit-transform: translateX(-50%);
                            transform: translateX(-50%);
                    margin: 0;
                  }

                  .owl-carousel .owl-nav svg {
                    opacity: 0.3;
                    transition: opacity 0.3s;
                  }

                  .owl-carousel .owl-nav button:hover svg {
                    opacity: 1;
                  }

                  .owl-carousel .owl-nav [class*="owl-"]:hover {
                    background: transparent;
                  }
                  .btn-primary {
                      color: #fff;
                      background-color: #007bff;
                      border-color: #007bff;
                  }



                  section {
                    display: none;
                  }

                  @media screen and (max-width: 575px) {
                    .owl-carousel .owl-nav {
                      top: 50%;
                    }
                    
                    .owl-carousel .owl-nav svg {
                      width: 24px;
                      height: 24px;
                    }
                  }

        </style>
    <script>
          window.console = window.console || function(t) {};
        </script>
        <script>
          if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
          }
        </script>

</head>
<body id="inicio" data-spy="scroll" data-target=".navbar" data-offset="50" >
<div class="opacity" z-index="5">
<nav class="navbar navbar-default navbar-fixed-top" z-index="">
  <div class="container-fluid" >
    <div class="nav navbar-nav" id="navprim">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#barracel" 
      id="botonpad">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a href="#inicio" >
         <img src="imagenes/logochido.png" class="img-responsive" width="180px"  id="imgbarra">
        </a>

    </div>
  <div class="row" id="navprim">
    <div class="col-sm-3" id="navfondo" align="right">
        <a href="#inicio" >
          <img src="imagenes/logochido.png" class="img-responsive" width="250px" id="barrai">
        </a>
    </div>
    <div class="col-sm-9 " id="barrai">
      <div class="col-sm-8"></div>
      <div class="nav navbar-nav col-sm-4">
        <ul class="nav navbar-nav">
        <li> <a href="https://www.facebook.com/getoffthex/" target="_blank"><img src="imagenes/face.png" width="35px" ></a></li>
        <li><a href="https://instagram.com/randymaniacs?igshid=13p4aybb5y4is" target="_blank"><img src="imagenes/instagram.png" width="35px" ></a></li>
        </ul>
      </div>
      <div class="col-sm-12" id="navfondo">
        <div id="barrai">
          <hr>
          <ul class="nav navbar-nav ">
          <li><a href="/">INICIO</a></li>
          <li><a href="cursos">CURSOS</a></li>
          <li><a href="instructores">INSTRUCTORES</a></li>
          <li><a href="contacto">CONTACTO</a></li>
          <li><a href="#inicio"> VERIFICADOR DE CURSOS</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  </div>
    <div class="row">
      <div class="col-sm-8">
      </div>
      <div class="col-sm-4">
        <div class="nav navbar-nav navbar-right" id="barrai">
          <ul class="nav navbar-nav ">
          </ul>
        </div>
      </div>
    </div>
    <div class="row"  id="prim2">
      <div class="col-sm-8">
        <!--barra nav en el celular solo visble en celular-->
        <div id="barrav" class="container-fluid">
        <div class="collapse navbar-collapse" id="barracel">
          <ul class="nav navbar-nav" >
          <li><a href="/">INICIO</a></li>
          <li><a href="cursos">CURSOS</a></li>
          <li><a href="instructores">INSTRUCTORES</a></li>
          <li><a href="contacto">CONTACTO</a></li>
          <li><a href="#inicio"> VERIFICADOR DE CURSOS</li>
          </ul>
          <hr >
          <div class="container-fluid">
          <li> <a href="https://www.facebook.com/getoffthex/" target="_blank"><img src="imagenes/face.png" width="35px" ></a>
           <li><a href="https://instagram.com/randymaniacs?igshid=13p4aybb5y4is" target="_blank"><img src="imagenes/instagram.png" width="35px" ></a></li>
          <a href="" data-toggle="modal" data-target="#myModal"><img src="imagenes/ins.png" width="60px" ></a>
          </li>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
  </div>  <!--barra nav-->

</nav>
  <div id="fondoins">
    <font color="#ffffff"><b>
      <div id="contact" class="container-fluid bg-grey">
        <h2 class="text-center">Verifica la lista de personas que acreditaron curso con nosotros</h2>
        <br><br><br>
          <div>
            <div align="center" >
                      <form action="" method="POST" accept-charset="utf-8" >
                        <input type="text" autofocus name="documento" placeholder="Escriba la matricula" style="background-color: #333">
                          </form><br><br>  
                            <?PHP
                              if($_POST) 
                                  {
                                    $id = $_POST['documento'];
                                    $SQL = 'SELECT * FROM tblverificador WHERE matricula =:doc';
                                    $stmt =$pdo->prepare($SQL);
                                    $result = $stmt->execute(array(':doc'=>$id));
                                    $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
                                      if(count($rows))
                                        {
                                          foreach($rows AS $row )
                                            {
                            ?>
                                              <div class="panel panel-success">
                                                <div class="panel-heading">Informacion del usuario</div>
                                                  <div class="panel-body">
                                                    <p class="card-text text-white" style="text-shadow: 0 0 black;color: #333;">
<div class="table-responsive">
            
  <table class="table table-dark"  style="text-shadow: 0 0 black;color: #333;">
     <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Fecha de registro</th>
        <th scope="col">Pais</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td> <?php print($row->nombre) ?></td>
         <td><?php print($row->fecha_curso) ?></td>
         <td><?php print($row->pais) ?></td>
      </tr>
    </tbody>
     </table>
</div>


                                                      
                                                    </p>
                                                  </div>
                                              </div>
                            <?
                                          } 
                                        }
                                          else
                                            {


echo "Aviso!, Usuario no registrado";
                                            
                                            }
                                  }
                            ?>
               
             
            </div>
          </div>
<div class="modal fade" id="myModal" role="dialog">
  <div id="pricing" class="container-fluid">
      <div align="center"> <!--texto titulo-->
        <img src="imagenes/boton-crea.png" class="img-responsive" >
      </div>
      <div class="row"><!--contenido-->
          <div class="col-sm-2 col-xs-12">
            <!--espacio-->
          </div>
          <div class="col-sm-2 col-xs-12">
            <!--espacio-->
          </div>
          <div class="col-sm-4 col-xs-12" align="center"><!--registro-->
            <div class="panel panel-default text-center">
              <div class="panel-heading" align="center">
                  <img src="imagenes/logs2.png" class="img-responsive" width="250px" >
              </div>
              <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <p id="is" align="center">
                        <a data-toggle="collapse5" data-parent="#accordion" href="#collapse5"><img src="imagenes/inscribete.png" class="img-responsive" width="200px" align="center"></a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="panel-group" id="accordion">
            <div class="panel panel-default">
            <div class="panel-heading">
            <h5 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
             Antes de ir al proceso de inscripción revisa todos nuestros cursos con toda su información detallada en <a href="cursos"> <font id="resalto" >CURSOS </font></a>
            </h5>
            </div>
            <div id="collapse1" class="panel-collapse collapse in">
            <div class="panel-body" align="left">
              
            </div>
            </div>
            </div>
            <div class="panel panel-default">
            <div class="panel-heading">
            <h5 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
            Las fechas de los cursos puedes consultarlas contactando con nostros  <a href="contacto"><font id="resalto" > CONTACTO </font></a></a>
            </h5>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
            <div class="panel-body">
            </div>
            </div>
            </div>
          </div>
          <div class="panel-footer">
            <div class="row">
                     <a href="tienda/carrito" tex> <button onclick="" class="btn btn-success btn-lg">Inscribirse</button></a>
              </div>
            </div>
          
          </div>
          </div>      
        </div>     
            </div>
            <div align="center"><!--boton cancelar-->
              <button type="submit" class="btn btn-danger btn-lg" data-dismiss="modal">
              <span class="glyphicon glyphicon-remove"></span> Cerrar
              </button>
             </div>
          </div>  
          <div class="col-sm-3 col-xs-12">
            <!--espacio-->
          </div>
      </div>
  </div>
</div>







<script>
  $(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  $(".navbar a,footer a[href='#inicio'], body a[href='#cursos']").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1500, function(){
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>
<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#inicio" data-toggle="tooltip" title="Volver">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br>
  <p>Ir arriba</p> 
</footer>
</body>
</html>