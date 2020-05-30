<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>AutoClinic</title>

	 <!-- GOOGLE FONT -->
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">

	<!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

	<!-- material desing-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/css/mdb.min.css" rel="stylesheet">

	 <!-- CUSTOM CSS -->
	 <link rel="stylesheet" type="text/css" href="css/estilos.css"> 
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

   
	<!-- SCROOLL REVEAL JS LIBRARY CDN -->
	<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

	<!--JQUERY DE GOOLGE-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/eskju.jquery.scrollflow.min.js"></script>

	<!--FONT AWESOME-->
	<script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>


	

	<!-- STYLE SLIDER-->
	 <style>
	  /* Make the image fully responsive */
	  .carousel-inner img {
	      width: 100%;
	      height: 100%;
	      opacity: .7;
	  }
    </style>

	
	
	
</head>
<body>

	<!-- NAVIGATION-
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
     <div class="container">
     	<a class="navbar-brand" href="#">WebsiteTwo</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>
	      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	        <div class="navbar-nav ml-auto">
	          <a class="nav-item nav-link" href="#header">Home</a>
	          <a class="nav-item nav-link" href="#info-one">About</a>
	          <a class="nav-item nav-link" href="#contact">Contact</a>
	        </div>
	      </div>     	
     </div>      
    </nav>-->

    <!--NAVIGATION-->
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
	 <div class="container">
        <a href="index.html" class="navbar-brand">Autoclinic</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
        	 <div class="navbar-nav ml-auto">
	          <a class="nav-item nav-link" href="#home-section">Inicio</a>
	          <a class="nav-item nav-link" href="#quienes-somos">Quienes Somos</a>
		      <a class="nav-item nav-link" href="#servicios">Servicios</a>
	          <a class="nav-item nav-link" href="#trabajos">Trabajos</a>
	          <a class="nav-item nav-link" href="#contacto">Contacto</a>
	        </div>   
	    </div>       
     </div>
	</nav>

	<!--HOME-->
	<header id="home-section">
		<div class="dark-overlay">
			<div class="home-inner">
				<div class="container">
		            <div class="row">
		              <div class="col-lg-12 d-none d-sm-block">
		                <h1 class="display-4"><strong>Autoclinic</strong></h1>
		                <!-- check -->
		                <div class="d-flex flex-row">
		                  <div class="p-4 align-self-start">
		                    <i class="fas fa-certificate"></i>
		                  </div>
		                 <div class="p-4 align-self-end">
		                 	Ofrecemos un servicio innovador que garantiza calidad, capacidad operativa y eficiencia en lo que hacemos ya que utilizamos tecnologias, productos y maquinarias de ultima generacion.
		                 </div>
		                </div>
		                  <!-- check -->
		                <div class="d-flex flex-row">
		                  <div class="p-4 align-self-start">
		                    <i class="fas fa-certificate"></i>
		                  </div>
		                  <div class="p-4 align-self-end">
		                  	Pioneros en la estética automotriz<br>
		                  	Somos el único taller certificado por Gtechniq UK para la aplicación de sus productos en la provincia de Santa Fe
		                  </div>
		                </div>
		                 <!-- check -->
		                <div class="d-flex flex-row">
		                  <div class="p-4 align-self-start">
		                    <i class="fas fa-certificate"></i>
		                  </div>
		                  <div class="p-4 align-self-end">
		                    Tratamientos acrílicos y cerámicos, cabina de pintura, sacabollos, limpieza de tapizados e interiores, insumos, capacitaciones y más!
		                  </div>
		                </div>
		            </div>
		           </div>
				</div>
			</div>
		</div>	
	</header>

	
     <!-- QUIENES SOMOS-->
    <section id="quienes-somos">
      <div class="container mt-3">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="header-content-left scrollflow -slide-right -opacity">
              <img src="img/quienes_somos2.jpg" style="width: 100%;">
            </div>  
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="header-content-right scrollflow -slide-left -opacity">
              <h1 class="display-4">¿Quienes Somos?</h1>
              <p class="mt-5">Ofrecemos un servicio innovador que garantiza calidad, capacidad operativa y eficiencia en lo que hacemos ya que utilizamos tecnologías, productos y maquinarias de última generación. Ofreciendo a nuestros clientes la satisfacción y calidad que merecen. Ello nos convierte en los representantes con más trayectoria, producción y reconocimiento en el rubro.</p>
              <!--a href="#" class="btn btn-outline-secondary header-btn btn-lg mt-2 scrollflow -slide-top -opacity">Read More</a-->
            </div>
          </div>
        </div>
      </div>

	</section><br><br>

	<!--PRODUCTOS Y SERVICIOS-->
	 <section class="info-section bg-light text-muted py-5" id="servicios">
      <div class="container">
        <div class="row">
          <div class="col-md-6 scrollflow -slide-left -opacity">
            <h3>NUESTROS SERVICIOS</h3>
            <p>Desde el año 2010, en Autoclinic nos dedicamos a la restauración, cuidado y mantenimiento de vehículos. No sólo nos ocupamos del exterior sino también del interior y cualquier otra superficie donde se pueda practicar el detailing.</p>
            <!-- check -->
            <div class="d-flex flex-row">
              <div class="p-4 align-self-start">
                <i class="fas fa-certificate"></i>
              </div>
              <div class="p-4 align-self-end">
                Sistema de Sellado, Tratamientos a Base de Cera Carnuba.
              </div>
            </div>
            <!-- check -->
            <div class="d-flex flex-row">
              <div class="p-4 align-self-start">
                <i class="fas fa-certificate"></i>
              </div>
              <div class="p-4 align-self-end">
                Proteccion de Interiores, vidrios y LLantas.
              </div>
            </div>
            <!-- check -->
            <div class="d-flex flex-row">
              <div class="p-4 align-self-start">
                <i class="fas fa-certificate"></i>
              </div>
              <div class="p-4 align-self-end">
               Acondiciconado de la Pintura, Proceso de pulido, lustrado y abrillantado.
              </div>
            </div>
          </div>
          <div class="col-md-6 scrollflow -slide-bottom -opacity">
            <img src="img/nosotros_1.jpg" alt="" class="img-fluid mb-3 rouded-circle">
          </div>
        </div>
      </div>
    </section>

    <!-- INFO SERVICIOS -->
    <section id="info-col2" style="background: #f1f1f1;">
      <div class="container">
        <div class="row">
          <div class="col-md-6 scrollflow -slide-right -opacity">
            <h2 class="my-3">MAS DE 7 AÑOS DE EXPERIENCIA</h2>
            <p>Comenzamos como 2 jóvenes emprendedores, pioneros en el detailing, con un sueño que hoy se nos hizo realidad y que aun seguimos con la ambición de crecer y mejorar día a día. Por los albores del 2010 realizábamos nuestros trabajos en un pequeño garage y hoy en día, luego de mucho esfuerzo y miles de horas trabajadas, construimos el primer y mejor centro de Detailing de la ciudad de Santa fe.</p>
          </div>
          <div class="col-md-6 scrollflow -slide-left -opacity">
            <h2  class="my-3">GARANTIA DE CONFIANZA</h2>
            <p>Contamos con una estructura de mas de 300 metros cuadrados, en los cuales realizamos nuestros trabajos de manera profesional en 2 cabinas climatizadas, las mismas fueron construidas para que la superficie a trabajar siempre este a una temperatura ideal, para así lograr un perfecto catalizado de los productos aplicados.</p>
          </div>
        </div>
      </div>
    </section><br><br>

	<!--SLIDERS-->
	<section id=inicio>
		<div id="demo" class="carousel slide" data-ride="carousel">

		  <!-- Indicators -->
		  <ul class="carousel-indicators">
		    <li data-target="#demo" data-slide-to="0" class="active"></li>
		    <li data-target="#demo" data-slide-to="1"></li>
		    <li data-target="#demo" data-slide-to="2"></li>
		  </ul>
		  
		  <!-- The slideshow -->
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="img/img_1.jpg" alt="Los Angeles" width="1100" height="350">
		      <div class="carousel-caption">
		        <h3>Chevrolet Cruze ltz</h3>
		        <p>Tratamiento Ceramico</p>
		      </div> 
		    </div>
		    <div class="carousel-item">
		      <img src="img/img_2.jpg" alt="Chicago" width="1100" height="350">
		      <div class="carousel-caption">
		        <h3>Peugot 208</h3>
		        <p>Aplicacion de cera, correcion de barniz</p>
		      </div> 
		    </div>
		    <div class="carousel-item">
		      <img src="img/img_3.jpg" alt="New York" width="1100" height=350">
		      <div class="carousel-caption">
		        <h3>Gol trend</h3>
		        <p>Repintado de paragolpe y guardabarro</p>
		      </div>
		    </div>
		  </div>
		  
		  <!-- Left and right controls -->
		  <a class="carousel-control-prev" href="#demo" data-slide="prev">
		    <span class="carousel-control-prev-icon"></span>
		  </a>
		  <a class="carousel-control-next" href="#demo" data-slide="next">
		    <span class="carousel-control-next-icon"></span>
		  </a>
		</div>
	</section>

	<section class="container my-5 py-5" id="trabajos">
				<div class="row justify-content-around">				
					<article class="col-lg-8 mt-4 p-4 card">
						<h2 class="border border-muted border-top-0 border-right-0 border-left-0 pb-2 mb-4  text-center bg-grey">Portfolio</h2>
						<h4 class="text-center bg-grey my-3">Ultimos Trabajos</h4>
						<div class="container">
						 <div class="row">
						    <div class="col-sm-12 col-md-6 mb-4 scrollflow -slide-left -opacity">						     
						        <img src="img/img_1.jpg" alt="Paris" width="400" height="300" class="img-fluid">
						        <p class="text-center bg-grey"><strong>Chevrolet Cruze ltz</strong></p>
						        <p class="scrollflow -slide-top -opacity">Este Chevrolet Cruze ltz recibió un acondicionado de la pintura para lograr mayor brillo y profundidad en el color. Luego de este proceso, se le aplico el tratamiento cerámico que le brindara una gran protección.</p>						    
						    </div>
						    <div class="col-sm-12 col-md-6 mb-4 scrollflow -slide-left -opacity">					      
						        <img src="img/img_2.jpg" alt="New York" width="400" height="300" class="img-fluid">
						        <p class="text-center bg-grey"><strong>Peugot 208</strong></p>
						         <p class="scrollflow -slide-top -opacity">Este Peugot 208 recibió un acondicionado de la pintura para lograr mayor brillo y profundidad en el color. Luego de este proceso, se le aplico el tratamiento cerámico que le brindara una gran protección..</p>					     
						    </div>
						    <div class="col-sm-12 col-md-6 mb-4 scrollflow -slide-left -opacity">						     
						        <img src="img/img_3.jpg" alt="Paris" width="400" height="300" class="img-fluid">
						        <p class="text-center bg-grey"><strong>Gol Trend</strong></p>
						        <p class="scrollflow -slide-top -opacity">Este Gol Trend recibió un acondicionado de la pintura para lograr mayor brillo y profundidad en el color. Luego de este proceso, se le aplico el tratamiento cerámico que le brindara una gran protección..</p>						    
						    </div>
						    <div class="col-sm-12 col-md-6 mb-4 scrollflow -slide-left -opacity">					      
						        <img src="img/cnto_1.jpg" alt="New York" width="400" height="300" class="img-fluid">
						        <p class="text-center bg-grey"><strong>Scirocco</strong></p>
						         <p class="scrollflow -slide-top -opacity">Este Scirocco recibió un acondicionado de la pintura para lograr mayor brillo y profundidad en el color. Luego de este proceso, se le aplico el tratamiento cerámico que le brindara una gran protección..</p>					     
						    </div>
						</div>
					</div>
				</article>			
		  </div>			
	</section>


	 <!-- TESTIMONIAL
	 <section id="testimonial">
      <div class="container">
        <p class="h2 mb-2">
          Consectetur esse incidunt voluptatibus modi quae ipsa eos corrupti ad rerum? Modi natus necessitatibus eaque illum voluptas accusamus aliquid ipsum consectetur? Voluptate voluptate in deleniti amet itaque eius? Impedit sapiente?
        </p>
        <p class="h4">- Ryan Ray</p>
      </div>
    </section>-->

    
	

	 <!-- INFO ONE 
    <section id="info-uno">
      <div class="container scrollflow -slide-top -opacity">
        <div class="row mt-5">
          <div class="col-md-6">
            <div class="info-left">
              <img src="img/fondo_3.jpg" style="width: 100%">
            </div>
          </div>
          <div class="col-md-6 my-auto">
            <div class="info-right">
              <h2>Consectetur magnam quos voluptatibus laboriosam.</h2>
              <p>Amet vero earum quis modi ad? Voluptate id nihil harum mollitia exercitationem, dolores mollitia minus voluptates repellat esse. Dignissimos consectetur libero mollitia nihil enim. Nam pariatur veritatis ratione temporibus nisi!</p>
              <a href="#" class="btn btn-outline-secondary btn-lg">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </section>-->

	<section id="contacto">
				<h2  class="text-center bg-grey mt-5 by-2"> CONTACTANOS AHORA </h2>
				<div class="conteiner">
					 <form name="consultas" id="consultas" action="guardar-consulta.php" onsubmit="return validar_campos()" method="post">
								<h2 class="text-center bg-grey bt-3">CONTACTO</h2>
							    <input type="text"  id="nombre" name="nombre" placeholder="Nombre">
								<input type="text" id="correo" name="correo" placeholder="Dirección de Correo electrónico">
								<input type="text" id="telefono" name="telefono" placeholder="Telefono" class="required number" >
								<textarea name="mensaje" id="mensaje" cols="30" rows="10" placeholder="Esciba aqui su mensaje"></textarea>
								<input type="submit" value="ENVIAR" id="boton" data-toggle="modal" data-target="('Modal()')">
					</form>			  
					<div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					    <div class="modal-dialog" role="document">
					        <div class="modal-content">
					           <div class="modal-header">
					           		<h5 class="modal-title" id="exampleModalLabel">Autoclinic</h5>
					          		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          			  <span aria-hidden="true">&times;</span>
								     </button>
							     </div>
								 <div class="modal-body">
					             
					              Su consulta ha sido enviada.!   
					       		</div>
					           <div class="modal-footer">
					          	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					          </div>
					      </div>
					   </div>
					</div>					
					<p  class="text-center bg-grey by-3">Los turnos se reservan por telefono o personalmente en el taller!</p><br>
					<h4  class="text-center bg-grey"> ¿Donde Estamos? </h4><br>       
                </div>
				     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3397.9156613141417!2d-60.701501485045554!3d-31.608770681340374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b50760be73fdad%3A0x2c59631ff7d6f09d!2s1+de+Mayo+6356%2C+S3004KTK+Santa+Fe!5e0!3m2!1ses!2sar!4v1526235108947" width="2000" height="450" frameborder="0" style="border:0" allowfullscreen>
				    </iframe>
		</section>

	<!-- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-4 mt-4">
    <!-- Footer Links -->
    <div class="container text-center text-md-left">
      <!-- Grid row -->
      <div class="row">
        <!-- Grid column -->
        <div class="col-md-4 mx-auto">
          <!-- Content -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">AUTOCLINIC</h5>
          <p>En Autoclinic cada proyecto de detailing es único y un nuevo desafío. Nos apasiona lo que hacemos, por eso entendemos tu pasión por los autos.</p>
        </div>
        <!-- Grid column -->
        <hr class="clearfix w-100 d-md-none">
        <!-- Grid column -->
        <div class="col-md-2 mx-auto">
          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">TRATAMIENTOS</h5>
          <ul class="list-unstyled">
            <li>
              <a href="#!">Abrillantado</a>
            </li>
            <li>
              <a href="#!">Acrilicos</a>
            </li>
            <li>
              <a href="#!">Ceramicos</a>
            </li>
            <li>
              <a href="#!">A base de cera</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->
        <hr class="clearfix w-100 d-md-none">
        <!-- Grid column -->
        <div class="col-md-2 mx-auto">
          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">CONTACTO</h5>
          <ul class="list-unstyled">
            <li>
              <a href="#!">TEL: 0114550054</a>
            </li>
            <li>
              <a href="#!">CEL: 01124356756</a>
            </li>
            <li>
              <a href="#!">autoclinic@gmail.com</a>
            </li>
            <li>
              <a href="#!">FACEBOOK: autoclinic</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->
        <hr class="clearfix w-100 d-md-none">
        <!-- Grid column -->
      <!--  <div class="col-md-2 mx-auto">
          < Links 
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>

        </div>-->
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
    <!-- Footer Links -->
    <hr>
    <!-- Call to action 
    <ul class="list-unstyled list-inline text-center py-2">
      <li class="list-inline-item">
        <h5 class="mb-1">Register for free</h5>
      </li>
      <li class="list-inline-item">
        <a href="#!" class="btn btn-danger btn-rounded">Sign up!</a>
      </li>
    </ul>
     Call to action -->
    <hr>
    <!-- Social buttons 
    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1">
          <i class="fa fa-facebook"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1">
          <i class="fa fa-twitter"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-gplus mx-1">
          <i class="fa fa-google-plus"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-li mx-1">
          <i class="fa fa-linkedin"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-dribbble mx-1">
          <i class="fa fa-dribbble"> </i>
        </a>
      </li>
    </ul>
    <Social buttons -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="https://mdbootstrap.com/bootstrap-tutorial/"> Autoclinic.com</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->
  
	


	<!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	
	<!--script validar form-->
	 <script>
    	function validar_campos(){
    		   		
    		var tem="";
    		var todobien= true;
    		tem=document.getElementById("nombre").value;
    		
    		if (tem==""){
    			alert("el campo nombre debe estar completo");
    			document.getElementById("nombre").focus();
    			todobien= false}
    		tem=document.getElementById("correo").value;
    		if (tem==""){
    			alert("el campo correo debe estar completo");
    			if(todobien==true)
    				document.getElementById("correo").focus();
    			todobien=false}
    		tem=document.getElementById("telefono").value;
    		if (tem==""){
    			alert("el campo telefono debe estar completo");
    			if(todobien==true)
    				document.getElementById("telefono").focus();
    			todobien=false}

    		tem=document.getElementById("mensaje").value;
    		if (tem==""){
    			alert("el campo mensaje debe estar completo");
    			if(todobien==true)
    				document.getElementById("mensaje").focus();    			
    			todobien=false}
    					
	    	if (tem==""){	  
	    		//alert("el formulario ha sido completado");  		
	    		if(todobien==true){
	    		 // Modal();	    		
	    		 alert("el formulario ha sido completado");  
				 todobien=false} 
				return todobien;     				
				} 
				
			}
		


    </script>
    <!--<script>
    	function Modal(){
    	var nuevoalias = jQuery.noConflict();
    	nuevoalias(document).ready(function () {
			 $('#boton').on('click', function(e) {
			   e.preventDefault();
			     $('#mostrarmodal').modal('show');
				    });
			});
		}      	
    </script>-->

     <!-- SCROOLL REVEAL SCRIPT -->
    <script>
      /*window.sr = ScrollReveal();

	    sr.reveal('.navbar', {
	      duration: 2000,
	      origin: 'bottom'
	    });

	    sr.reveal('.header-content-left', {
	      duration: 2000,
	      origin: 'top',
	      distance: '300px'
	    });

	    sr.reveal('.header-content-right', {
	      duration: 2000,
	      origin: 'right',
	      distance: '300px'
	    });

	    sr.reveal('.header-btn', {
	      duration: 2000,
	      delay: 1000, 
	      origin: 'bottom'
	    });

	    sr.reveal('#testimonial div', {
	      duration: 2000,
	      origin: 'left',
	      distance: '300px',
	      viewFactor: 0.2
	    });*/

	    //smoth scrolling
	    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
	      anchor.addEventListener('click', function (e) {
	        e.preventDefault();

	        document.querySelector(this.getAttribute('href')).scrollIntoView({
	          behavior: 'smooth'
	        });
	      });
	    });

	</script>
</body>
</html>