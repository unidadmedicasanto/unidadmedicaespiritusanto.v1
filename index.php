 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8">
     <title>Espiritu Santo</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport">
     <meta content="" name="keywords">
     <meta content="" name="description">

     <!-- Favicon -->
     <!-- <link href="img/icons.png" rel="icon"> -->
     <link href="img/icons.png" rel="icon">


     <!-- Google Web Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

     <!-- Icon Font Stylesheet -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

     <!-- Libraries Stylesheet -->
     <link href="lib/animate/animate.min.css" rel="stylesheet">
     <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
     <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

     <!-- Customized Bootstrap Stylesheet -->
     <link href="css/bootstrap.min.css" rel="stylesheet">

     <!-- Template Stylesheet -->
     <link href="css/style.css" rel="stylesheet">

     <!-- Responsive Stylesheet -->
     <link rel="stylesheet" href="css/button.css">

     <style>
     .btn-publicacion {
         background-color: #5ba2db;
         /* Color de fondo verde */
         color: #ffffff;
         /* Texto blanco */
         border: none;
         /* Sin borde */
         border-radius: 5px;
         /* Bordes redondeados */
         padding: 10px 20px;
         /* Espaciado interno */
         font-size: 10px;
         /* Tamaño de la fuente */
         font-weight: bold;
         /* Texto en negrita */
         text-transform: uppercase;
         /* Texto en mayúsculas */
         text-decoration: none;
         /* Sin subrayado */
         cursor: pointer;
         /* Cambia el cursor al puntero */
         transition: all 0.3s ease;
         /* Efecto suave al pasar el cursor */
     }

     .btn-publicacion:hover {
         background-color: #5ba2db;
         /* Color más oscuro al pasar el cursor */
         color: #e8f5e9;
         /* Texto ligeramente más claro */
         box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
         /* Sombra */
     }

     .btn-publicacion:active {
         background-color: #1e7e34;
         /* Color al hacer clic */
         box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
         /* Sombra más pequeña */
     }




     .project-item {
         margin-bottom: 10px;
     }

     .project-item .position-relative {
         margin-bottom: 10px;
         /* Espacio entre imagen y contenido */
     }

     @media (max-width: 768px) {
         .project-item {
             padding: 10px;
         }

         .project-carousel .owl-carousel {
             gap: 10px;
             /* Espaciado entre ítems */
         }
     }

     .project-item img {
         margin-bottom: 10px;
         /* Espaciado inferior */
     }




     .project-item img {
         width: 100%;
         /* Ancho completo del contenedor */
         height: 200px;
         /* Altura fija */
         object-fit: cover;
         /* Recortar la imagen para que encaje sin deformarse */
         border-radius: 10px;
         /* Bordes redondeados */
     }

     .project-item h6 {
         font-size: 18px;
         font-weight: bold;
         margin-bottom: 10px;
     }

     .project-item span {
         font-size: 14px;
         color: #555;
         display: block;
         margin-bottom: 10px;
     }

     .btn-publicacion {
         padding: 8px 16px;
         font-size: 14px;
         color: white;
         background-color: #28a745;
         border: none;
         border-radius: 5px;
         cursor: pointer;
         transition: background-color 0.3s ease;
     }

     .btn-publicacion:hover {
         background-color: #218838;
     }
     </style>
 </head>



 <body>
     <!-- Spinner Start -->
     <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status"></div>
        <i class="fa fa-laptop-code fa-2x text-primary position-absolute top-50 start-50 translate-middle"></i>
    </div> -->
     <!-- Spinner End -->




     <!-- Brand & Contact Start -->
     <div class="container-fluid py-2 px-5 wow fadeIn" data-wow-delay="0.1s">
         <div class="row align-items-center top-bar">
             <div class="col-lg-9 col-md-12 text-center text-lg-start">
                 <a href="" class="navbar-brand m-0 p-0">

                     <img src="img/logo.png" alt="Logo">
                 </a>
             </div>
             <div class="col-lg-3 col-md-4 d-none d-lg-block">
                 <div class="row">
                     <div class="col-8 ">
                         <div class="d-flex align-items-center justify-content-end">
                             <div class="flex-shrink-0 btn-lg-square border rounded-circle btn-interactive btn-cursor">
                                 <!-- <i class="far fa-clock text-primary"></i> -->
                                 <a href="https://www.facebook.com/umesantoac" target="_blank">
                                     <i class="bi bi-facebook text-primary">

                                     </i>
                                 </a>
                             </div>

                         </div>
                     </div>
                     <div class="col-2">
                         <div class="d-flex align-items-center justify-content-end">
                             <div class="flex-shrink-0 btn-lg-square border rounded-circle btn-interactive btn-cursor">
                                 <a href="https://www.instagram.com/unidadmedicaespiritusanto/" target="_blank">
                                     <i class="bi bi-instagram text-primary">

                                     </i>
                                 </a>
                             </div>
                         </div>
                     </div>
                     <div class="col-2">
                         <div class="d-flex align-items-center justify-content-end">
                             <div class="flex-shrink-0 btn-lg-square border rounded-circle btn-interactive btn-cursor">
                                 <a href="https://www.tiktok.com/@espiritusanto3111" target="_blank">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-tiktok text-primary" viewBox="0 0 16 16">
                                         <path
                                             d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z" />
                                     </svg>
                                 </a>

                             </div>
                         </div>
                     </div>

                 </div>
             </div>
         </div>
     </div>
     <!-- Brand & Contact End -->


     <!-- Navbar Start -->
     <nav class="navbar navbar-expand-lg bg-primary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn"
         data-wow-delay="0.1s">
         <a href="#" class="navbar-brand ms-3 d-lg-none">MENU</a>
         <button type="button" class="navbar-toggler me-3" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarCollapse">
             <div class="navbar-nav me-auto p-3 p-lg-0">
                 <a href="index.php" class="nav-item nav-link active">Inicio</a>
                 <!-- <a href="about.html" class="nav-item nav-link">Nosotros </a> -->
                 <a href="#servicios" class="nav-item nav-link">Servicios</a>
                 <div class="nav-item dropdown">
                     <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Quienes Somos</a>
                     <div class="dropdown-menu border-0 rounded-0 rounded-bottom m-0">
                         <a href="about.html#historia" class="dropdown-item">Historia</a>
                         <a href="about.html#mision" class="dropdown-item">Misión</a>
                         <a href="about.html#vision" class="dropdown-item">Visión</a>
                         <a href="about.html#politicas" class="dropdown-item">Politicas de Calidad</a>


                     </div>
                 </div>

                 <!-- <a href="project.html" class="nav-item nav-link">Sedes</a> -->
                 <div class="nav-item dropdown">
                     <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Sedes</a>
                     <div class="dropdown-menu border-0 rounded-0 rounded-bottom m-0">

                         <a href="ubicacion.html" class="dropdown-item">Novita</a>
                         <a href="ubicacion.html#sanjose" class="dropdown-item">Medio San Juan</a>
                         <a href="ubicacion.html#sanjose" class="dropdown-item">San Jose del Palmar</a>


                     </div>
                 </div>
                 <div class="nav-item dropdown">
                     <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Red de Servicios</a>
                     <div class="dropdown-menu border-0 rounded-0 rounded-bottom m-0">
                         <a href="https://servicios.adres.gov.co/BDUA/Consulta-Afiliados-BDUA" class="dropdown-item"
                             target="_blank">Consulta Adress</a>
                         <a href="https://www.minsalud.gov.co/Portada/index.php" class="dropdown-item"
                             target="_blank">Ministerio de Salud</a>
                         <a href="https://www.supersalud.gov.co/es-co/Paginas/Home.aspx" target="_blank"
                             class="dropdown-item">Super salud</a>
                         <a href="https://saludtotal.com.co/" target="_blank" class="dropdown-item"></a>
                     </div>
                 </div>
                 <a href="contact.php" class="nav-item nav-link ">Contacto</a>
             </div>
             <a href="contact.php"
                 class="btn btn-sm btn-light rounded-pill py-2 px-4 d-none d-lg-block   btn-cursor">Contactanos</a>
         </div>
     </nav>
     <!-- Navbar End -->


     <!-- Carousel Start -->
     <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
         <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
             <div class="carousel-indicators">
                 <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active"
                     aria-current="true" aria-label="Slide 1">
                     <img class="img-fluid" src="img/estaaaaaaaa (1).jpg" alt="Image">
                 </button>
                 <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2">
                     <img class="img-fluid" src="img/estaaaaaaaa (2).png" alt="Image">
                 </button>
                 <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2" aria-label="Slide 3">
                     <img class="img-fluid" src="img/es esta.png" alt="Image">
                 </button>
             </div>
             <div class="carousel-inner">
                 <div class="carousel-item active">
                     <img class="w-100" src="img/sede.jpg" alt="Image">
                     <div class="carousel">
                         <div class="p-3" style="max-width: 900px;">
                             <h4 class="text-white text-uppercase mb-4 animated zoomIn"></h4>
                             <h1 class="display-1 text-white mb-0 animated zoomIn"></h1>
                         </div>
                     </div>
                 </div>
                 <div class="carousel-item">
                     <img class="w-100" src="img/sede 2.jpg" alt="Image">
                     <div class="carousel">
                         <div class="p-3" style="max-width: 900px;">
                             <h4 class="text-white text-uppercase mb-4 animated zoomIn"></h4>
                             <h1 class="display-1 text-white mb-0 animated zoomIn"></h1>
                         </div>
                     </div>
                 </div>
                 <div class="carousel-item">
                     <img class="w-100" src="img/sede 3 .jpg" alt="Image">
                     <div class="carousel">
                         <div class="p-3" style="max-width: 900px;">
                             <h4 class="text-white text-uppercase mb-4 animated zoomIn"></h4>
                             <h1 class="display-1 text-white mb-0 animated zoomIn"></h1>
                         </div>
                     </div>
                 </div>
             </div>
             <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                 <span class="visually-hidden">Previous</span>
             </button>
             <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                 <span class="visually-hidden">Next</span>
             </button>
         </div>
     </div>
     <!-- Carousel End -->


     <!-- Facts Start -->
     <div class="container-xxl py-5">
         <div class="container">
             <div class="row g-4">
                 <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                     <div class="fact-item bg-light rounded text-center h-100 p-5">
                         <i class="fa fa-certificate fa-4x text-primary mb-4"></i>
                         <h5 class="mb-3">Numero de sedes</h5>
                         <h1 class="display-5 mb-0" data-toggle="counter-up">3</h1>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                     <div class="fact-item bg-light rounded text-center h-100 p-5">
                         <i class="fa fa-users-cog fa-4x text-primary mb-4"></i>
                         <h5 class="mb-3">Miembros del equipo</h5>
                         <h1 class="display-5 mb-0" data-toggle="counter-up">50</h1>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                     <div class="fact-item bg-light rounded text-center h-100 p-5">
                         <i class="fa fa-users fa-4x text-primary mb-4"></i>
                         <h5 class="mb-3">Usuarios satisfechos</h5>
                         <h1 class="display-5 mb-0" data-toggle="counter-up">500</h1>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                     <div class="fact-item bg-light rounded text-center h-100 p-5">
                         <i class="fa fa-check fa-4x text-primary mb-4"></i>
                         <h5 class="mb-3">Brigadas realizadas</h5>
                         <h1 class="display-5 mb-0" data-toggle="counter-up">1234</h1>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Facts End -->


     <!-- About Start -->
     <div class="container-xxl py-5">
         <div class="container">
             <div class="row g-5">
                 <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                     <div class="img-border">
                         <img class="img-fluid" src="img/medicos-sede.jpg" alt="">
                     </div>
                 </div>
                 <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                     <div class="h-100">
                         <h6 class="section-title bg-white text-start text-primary pe-3">Unidad Medica Espiritu Santo
                         </h6>
                         <h1 class="display-6 mb-4">Contamos con mas de 10 años de experiencia</span></h1>
                         <p>Contamos con un equipo altamente capacitado y comprometido, compuesto por profesionales
                             dedicados a brindar un servicio excepcional. Nuestro personal combina experiencia,
                             conocimiento y un trato humano para garantizar la satisfacción y confianza de nuestros
                             clientes.</p>
                         <p class="mb-4">Porque la calidad de nuestro equipo es la base de nuestra excelencia. <br>
                             <small>Estamos aquí para ti. 🎉</small>
                         </p>
                         <a class="btn
                                  btn-success 
                                  rounded-pill 
                                  py-3 
                                  px-5" href="about.html">Saber mas</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- About End -->


     <!-- Service Start -->
     <div id="servicios" class="container-xxl py-5">
         <div class="container">
             <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.3s" style="max-width: 600px;">
                 <h6 class="section-title bg-white text-center text-success px-3">Nuestros servicios</h6>
                 <h1 class="display-6 mb-4">Lo que ofrecemos para usted</h1>
             </div>

             <div class="row g-4">
                 <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                     <a class="service-item d-block rounded text-center h-100 p-4">
                         <img class="img-fluid rounded mb-4" src="img/imagen (4).jpeg" alt="">
                         <h4 class="mb-0">Servicio Farmaceutico</h4>
                     </a>
                 </div>
                 <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
                     <a class="service-item d-block rounded text-center h-100 p-4">
                         <img class="img-fluid rounded mb-4" src="img/imagen (1).jpeg" alt="">
                         <h4 class="mb-0">Enfermeria</h4>
                     </a>
                 </div>

                 <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.12s">
                     <a class="service-item d-block rounded text-center h-100 p-4">
                         <img class="img-fluid rounded mb-4" src="img/1odontologia.png" alt="">
                         <h4 class="mb-0">Odontologia General</h4>
                     </a>
                 </div>




                 <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.14s">
                     <a class="service-item d-block rounded text-center h-100 p-4">
                         <img class="img-fluid rounded mb-4" src="img/ginecologia.png" alt="">
                         <h4 class="mb-0">Ginecología</h4>
                     </a>
                 </div>


                 <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.16s">
                     <a class="service-item d-block rounded text-center h-100 p-4">
                         <img class="img-fluid rounded mb-4" src="img/urgencias.png" alt="">
                         <h4 class="mb-0">Urgencias</h4>
                     </a>
                 </div>



                 <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.18s">
                     <a class="service-item d-block rounded text-center h-100 p-4">
                         <img class="img-fluid rounded mb-4" src="img/medicina-general.png">
                         <h4 class="mb-0">Medicina General</h4>
                     </a>
                 </div>





                 <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.20s">
                     <a class="service-item d-block rounded text-center h-100 p-4">
                         <img class="img-fluid rounded mb-4" src="img/imagen (8).jpeg" alt="">
                         <h4 class="mb-0">Vacunación</h4>
                     </a>
                 </div>
                 <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.22s">
                     <a class="service-item d-block rounded text-center h-100 p-4">
                         <img class="img-fluid rounded mb-4" src="img/imagen (5).jpeg" alt="">
                         <h4 class="mb-0">Medicamentos en la puerta de tu hogar</h4>
                     </a>
                 </div>
                 <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.24s">
                     <a class="service-item d-block rounded text-center h-100 p-4">
                         <img class="img-fluid rounded mb-4" src="img/WhatsApp Image 2022-12-19 at 9.34.38 AM.jpeg"
                             alt="">
                         <h4 class="mb-0">Atencion a la primera infancia</h4>
                     </a>
                 </div>
             </div>
         </div>
     </div>
     <!-- Service End -->


     <!-- Feature Start -->
     <div class="container-xxl py-5">
         <div class="container">
             <div class="row g-5">
                 <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                     <div class="h-100">
                         <h6 class="section-title bg-white text-start text-success pe-3">¿Por que deberias de confiar en
                             nosotros?</h6>
                         <h1 class="display-6 mb-4">Tenemos los mejores servicios en salud</h1>
                         <p class="mb-4">Estamos dedicados a proporcionar atención médica confiable y efectiva en cada
                             uno de nuestros servicios, asegurando siempre el bienestar y la satisfacción de nuestros
                             pacientes. ¡Tu salud es nuestra prioridad!</p>
                         <div class="row g-4">
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                     <div>
                         <img style="max-width: 100%;height: auto;" class="img-fluid" src="img/logo.png" alt="">

                         <!-- <img style="max-width: 100%;height: auto;" class="img-fluid" src="img/publicidad.png"  alt=""> -->
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Feature End -->





     <?php
    require_once  'database/db.php';

    // Consulta para obtener las publicaciones
    $sql = "SELECT id, titulo, contenido, categoria, imagenes, fecha_creacion FROM noticias ORDER BY fecha_creacion DESC";
    $result = $conn->query($sql);

    // Inicializar contador para manejar el delay de la animación
    $delayCount = 0;
    ?>

     <!-- Project Start -->
     <div class="container-xxl py-5">
         <div class="container">
             <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="3s" style="max-width: 600px;">
                 <h6 class="section-title bg-white text-center text-success px-3">Noticias 24/7</h6>
                 <h1 class="display-6 mb-4">Noticias</h1>
             </div>

             <!-- Aquí comienza el Owl Carousel -->
             <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.10s">

                 <?php
                // Verificar si hay resultados y mostrar cada noticia
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        // Incrementar el delayCount para dar un retraso diferente a cada post
                        $delayCount++;
                        $delayTime = 0.10 * $delayCount; // Incrementar el retraso de animación en 0.10s

                        // Obtener las imágenes de la base de datos
                        $imagenes = explode(',', $row['imagenes']); // Convertir las imágenes en un array
                        $fecha = date("d/m/Y", strtotime($row['fecha_creacion'])); // Formatear la fecha de creación
                        ?>

                 <!-- Publicación en el carrusel -->
                 <div class="project-item border rounded h-100 p-4" data-dot="<?php echo $row['id']; ?>"
                     data-wow-delay="<?php echo $delayTime; ?>s">

                     <!-- Imagen principal de la noticia -->
                     <div class="position-relative mb-4">
                         <?php
                                // Mostrar la primera imagen de la noticia (si existe)
                                if (!empty($imagenes[0])) {
                                    echo "<img class=' img-fluid rounded' src='dev-backend/scripts/img-files/{$imagenes[0]}' alt=''>";
                                }
                                ?>
                         <a href="dev-backend/scripts/img-files/<?php echo $imagenes[0]; ?>" data-lightbox="project">
                             <i class="fa fa-eye fa-2x"></i>
                         </a>
                     </div>

                     <!-- Título y contenido de la publicación -->
                     <h6><?php echo $row['titulo']; ?></h6>
                     <span>
                         <?php
                                // Mostrar un resumen del contenido (los primeros 200 caracteres)
                                echo substr($row['contenido'], 0, 200) . '...';
                                ?>
                     </span>

                     <!-- Fecha y botón para ver la publicación completa -->
                     <div class="mt-2">
                         <p class="fw-bold"><?php echo $fecha; ?></p>
                         <button class="btn-publicacion" type="button"
                             onclick="window.location.href='ver_publicacion.php?id=<?php echo $row['id']; ?>'">
                             Ver Publicación
                         </button>
                     </div>
                 </div>

                 <?php
                    }
                } else {
                    echo "<p>No hay publicaciones disponibles.</p>";
                }
                ?>
             </div>
             <!-- Fin del Owl Carousel -->
         </div>
     </div>
     <!-- Project End -->







     <!-- Estilos de Owl Carousel -->

     <!-- Project Start -->
     <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="3s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-success px-3">Noticias 24/7</h6>
                <h1 class="display-6 mb-4">Noticias</h1>
            </div>




            <div class="owl-carousel 
                        project-carousel
                        wow 
                        fadeInUp" 
                data-wow-delay="0.10s"
                >
                
                <div class="project-item border rounded h-100 p-4" data-dot="02">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="img/imagen (2).jpeg" alt="">
                        <a href="img/imagen (2).jpeg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>Implementos</h6>
                    <span>Ofrecemos implementos de calidad diseñados para satisfacer las más altas exigencias. Cada producto ha sido cuidadosamente seleccionado para garantizar durabilidad, eficiencia y seguridad, adaptándose a tus necesidades</span>

                    <div class="mt-2">
                        <p class="fw-bold">26/12/2024</p>
                        <button class="btn-publicacion" onclick="window.location.href='https://tu-enlace.com/publicacion';">
                            Ver Publicación
                        </button>
                    </div>
                </div>


                



                <div class="project-item border rounded h-100 p-4" data-dot="0">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="img/imagen (4).jpeg" alt="">
                        <a href="img/imagen (4).jpeg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>Entrega de medicamentos</h6>
                    <span>Facilitamos el acceso a los medicamentos que necesitas de manera rápida, segura y confiable. Nuestro servicio de entrega garantiza que recibas tus tratamientos en la puerta de tu hogar</span>

                    <div class="mt-2">
                        <p class="fw-bold">26/12/2024</p>
                        <button class="btn-publicacion" onclick="window.location.href='https://tu-enlace.com/publicacion';">
                            Ver Publicación
                        </button>
                    </div>
                </div>


                <div class="project-item border rounded h-100 p-4" data-dot="05">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="img/imagen (5).jpeg" alt="">
                        <a href="img/imagen (5).jpeg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>Medicamentos en la puerta de tu hogar</h6>
                    <span>Olvídate de las filas y el tiempo perdido. Con nuestro servicio de entrega de medicamentos, llevamos tus tratamientos directamente a la puerta de tu hogar, de manera rápida, segura y confiable</span>

                    <div class="mt-2">
                        <p class="fw-bold">26/12/2024</p>
                        <button class="btn-publicacion" onclick="window.location.href='https://tu-enlace.com/publicacion';">
                            Ver Publicación
                        </button>
                    </div>
                </div>


  


                <div class="project-item border rounded h-100 p-4" data-dot="07">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="img/imagen (7).jpeg" alt="">
                        <a href="img/imagen (7).jpeg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>Medicamentos de calidad</h6>
                    <span>Comprometidos con tu salud, ofrecemos una amplia selección de medicamentos de la más alta calidad, garantizados por laboratorios reconocidos y con estrictos estándares de seguridad</span>

                    <div class="mt-2">
                        <p class="fw-bold">26/12/2024</p>
                        <button class="btn-publicacion" onclick="window.location.href='https://tu-enlace.com/publicacion';">
                            Ver Publicación
                        </button>
                    </div>
                </div>



    


                <div class="project-item border rounded h-100 p-4" data-dot="09">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="img/WhatsApp Image 2022-12-19 at 9.34.38 AM.jpeg" alt="">
                        <a href="img/WhatsApp Image 2022-12-19 at 9.34.38 AM.jpeg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>Atencion a primera infancia</h6>
                    <span>Brindamos un cuidado integral para la primera infancia, enfocándonos en el desarrollo físico, emocional, social y cognitivo de los más pequeños.</span>
                        <button class="btn-publicacion" onclick="window.location.href='https://tu-enlace.com/publicacion';">
                            Ver Publicación
                        </button>
                    </div>
                </div>



            </div>
        </div>
    </div> -->
     <!-- Project End -->
     <!-- Project End -->


     <!-- Team Start -->
     <div class="container-xxl py-5">
         <div class="container">
             <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                 <h6 class="section-title bg-white text-center text-success px-3">Nuestras redes sociales</h6>
                 <h1 class="display-6 mb-4">Visita nuestras redes sociales</h1>
             </div>
             <div class="row g-4">
                 <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                     <div class="team-item text-center p-4">
                         <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="img/facebook_icon.svg.png"
                             alt="">
                         <div class="team-text">
                             <div class="team-title">
                                 <h5>Facebook</h5>
                                 <span>REDES</span>
                             </div>
                             <div class="team-social">
                                 <a class="btn btn-square btn-primary rounded-circle"
                                     href="https://www.facebook.com/umesantoac"><i class="fab fa-facebook-f"></i></a>

                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                     <div class="team-item text-center p-4">
                         <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="img/instagram.png" alt="">
                         <div class="team-text">
                             <div class="team-title">
                                 <h5>Instagram</h5>
                                 <span>REDES</span>
                             </div>
                             <div class="team-social">

                                 <a class="btn btn-square btn-primary rounded-circle"
                                     href="https://www.instagram.com/unidadmedicaespiritusanto/"><i
                                         class="fab fa-instagram"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                     <div class="team-item text-center p-4">
                         <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="img/tiktok-icon.png" alt="">
                         <div class="team-text">
                             <div class="team-title">
                                 <h5>TikTok</h5>
                                 <span>REDES</span>
                             </div>
                             <div class="team-social">
                                 <a class="btn btn-square btn-primary rounded-circle"
                                     href="https://www.tiktok.com/@espiritusanto3111">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-tiktok" viewBox="0 0 16 16">
                                         <path
                                             d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z" />
                                     </svg>

                                 </a>

                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Team End -->


     <!-- Testimonial Start -->
     <div class="container-xxl py-5">
         <div class="container">
             <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                 <h6 class="section-title bg-white text-center text-success px-3">Testimonios</h6>
                 <h1 class="display-6 mb-4">¡Qué dicen nuestros clientes!</h1>
             </div>
             <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">

                 <div class="testimonial-item bg-light rounded p-4">
                     <div class="d-flex align-items-center mb-4">
                         <img class="flex-shrink-0 rounded-circle border p-1" src="img/perfil1.png" alt="">
                         <div class="ms-4">
                             <h5 class="mb-1">Pedro Cuesta</h5>
                             <span>Paciente</span>
                         </div>
                     </div>
                     <p class="mb-0">La atención en urgencias fue rápida y efectiva. Estoy muy agradecida por el
                         profesionalismo del equipo médico.</p>
                 </div>
                 <div class="testimonial-item bg-light rounded p-4">
                     <div class="d-flex align-items-center mb-4">
                         <img class="flex-shrink-0 rounded-circle border p-1" src="img/perfil2.png" alt="">
                         <div class="ms-4">
                             <h5 class="mb-1">Alirio Palacios</h5>
                             <span>Paciente</span>
                         </div>
                     </div>
                     <p class="mb-0">El personal es muy atento y profesional. Me siento en buenas manos cada vez que
                         visito sus instalaciones.</p>
                 </div>
                 <div class="testimonial-item bg-light rounded p-4">
                     <div class="d-flex align-items-center mb-4">
                         <img class="flex-shrink-0 rounded-circle border p-1" src="img/testimonial-4.jpg" alt="">
                         <div class="ms-4">
                             <h5 class="mb-1">Ana Maria</h5>
                             <span>Paciente</span>
                         </div>
                     </div>
                     <p class="mb-0">Gracias a la consulta externa, mi problema de salud fue diagnosticado y tratado de
                         manera eficaz. ¡Excelente servicio!</p>
                 </div>
             </div>
         </div>
     </div>
     <!-- Testimonial End -->


     <!-- Footer Start -->
     <div class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
         <div class="container py-8">
             <div class="row g-5">
                 <div class="col-lg-3 col-md-6">
                     <h5 class="text-light mb-4">Unidad Medica Espiritu Santo</h5>
                     <p class="mb-2"><i class="fa  me-3">
                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-person-video2" viewBox="0 0 16 16">
                                 <path d="M10 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                                 <path
                                     d="M2 1a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM1 3a1 1 0 0 1 1-1h2v2H1zm4 10V2h9a1 1 0 0 1 1 1v9c0 .285-.12.543-.31.725C14.15 11.494 12.822 10 10 10c-3.037 0-4.345 1.73-4.798 3zm-4-2h3v2H2a1 1 0 0 1-1-1zm3-1H1V8h3zm0-3H1V5h3z" />
                             </svg>
                         </i>

                         NIT:818001360-9</p>
                     <p class="mb-2">
                         <i class="fa fa-map-marker-alt me-2"></i>
                         Novita
                     <p>
                     <p class="mb-2">
                         <i class="fa fa-map-marker-alt me-2"></i>
                         Medio San Juan
                     <p>
                     <p class="mb-2">
                         <i class="fa fa-map-marker-alt me-2"></i>
                         San Jose del Palmar
                     <p>

                     <p class="mb-2">
                         <i class="fa fa-map-marker-alt me-2"></i>
                         San Jose
                     <p>

                     <div class="d-flex pt-2">
                         <a class="btn btn-square btn-outline-secondary rounded-circle me-1"
                             href="https://www.facebook.com/umesantoac"><i class="fab fa-facebook-f"></i></a>
                         <a class="btn btn-square btn-outline-secondary rounded-circle me-1"
                             href="https://www.instagram.com/unidadmedicaespiritusanto/"><i
                                 class="fab fa-instagram"></i></a>
                         <a class="btn btn-square btn-outline-secondary rounded-circle me-1"
                             href="https://www.tiktok.com/@espiritusanto3111"><i class="fab fa-Tiktok">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-tiktok btn-outline-secondary" viewBox="0 0 16 16">
                                     <path
                                         d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z" />
                                 </svg>
                             </i>
                         </a>


                     </div>
                     <br>
                 </div>
                 <br>

                 <div class="col-lg-3 col-md-6">
                     <h5 class="text-light mb-4">Líneas de Atención</h5>
                     <ul class="list-unstyled">
                         <li class="mb-2">
                             <i class="fa fa-map-marker-alt me-2 "></i>
                             <span class="text-secondary">Dirección:</span>
                             Medio San Juan - Chocó
                         </li>
                         <li class="mb-2">
                             <i class="fa fa-phone-alt me-2 "></i>
                             <a href="tel:+3108954673" class="text-secondary">(+57) 321 243 6278</a>
                         </li>
                         <li>

                             <i class="fa fa-envelope py-2"></i>
                             <a href="mailto:unidadmedicaespiritu@hotmail.com"
                                 class="text-secondary">unidadmedicaespiritu</a>
                         </li>

                         <p class="py-2">
                             <a href="ubicacion.html" class="text-secondary" class="">
                                 <i class="fa fa-map-marker-alt me-3"></i>
                                 Sitios de Contactos
                             </a>
                         </p>
                     </ul>
                 </div>


                 <div class="col-lg-3 col-md-6">
                     <h5 class="text-light mb-4">Normatividad</h5>
                     <p class="mb-2">
                         <a href="marco-legal.html" class="text-secondary">
                             <i class="bi bi-file-earmark-text-fill me-2"></i>
                             Marco Legal</a>
                     </p>
                     <p class="mb-2">
                         <a href="politicas.html" class="text-secondary">
                             <i class="bi bi-file-earmark-text-fill me-2"></i>
                             Políticas</a>
                     </p>
                     <p class="mb-2">
                         <a href="portafolio.html" class="text-secondary" class="">
                             <i class="bi bi-file-earmark-text-fill me-2"></i>
                             Portafolio y Servicios
                         </a>
                     </p>

                     </p>


                 </div>



                 <div class="col-lg-3 col-md-6">
                     <h5 class="text-light mb-4">Afíliate a la IPS Espíritu Santo</h5>
                     <div class="row g-2">
                         <div class="col-6">
                             <img class="img-fluid rounded" src="img/logo u.png" alt="Image">
                         </div>

                     </div>
                 </div>

             </div>
         </div>
         <div class="container-fluid copyright">
         </div>
     </div>
     <!-- Footer End -->


     <!-- Back to Top -->
     <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
             class="bi bi-arrow-up"></i></a>


     <!-- JavaScript Libraries -->
     <script>
     document.addEventListener("DOMContentLoaded", () => {
         if (window.location.hash) {
             const target = document.querySelector(window.location.hash);
             if (target) {
                 target.scrollIntoView({
                     behavior: "smooth"
                 });
             }
         }
     });
     </script>

     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
     <script src="lib/wow/wow.min.js"></script>
     <script src="lib/easing/easing.min.js"></script>
     <script src="lib/waypoints/waypoints.min.js"></script>
     <script src="lib/counterup/counterup.min.js"></script>
     <script src="lib/owlcarousel/owl.carousel.min.js"></script>
     <script src="lib/lightbox/js/lightbox.min.js"></script>

     <!-- Template Javascript -->
     <script src="js/main.js"></script>

 </body>

 </html>