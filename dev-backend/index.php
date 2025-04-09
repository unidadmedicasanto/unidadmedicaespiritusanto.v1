<?php
session_start();

// Verificar si la sesión está iniciada
if (!isset($_SESSION['username'])) {
    header("Location: login.php");  // Redirigir al login si no hay sesión
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Espiritu Santo</title>
    <!-- <link href="img/icons.png" rel="icon"> -->
    <link href="img-espiritusanto/logo.png" rel="icon">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            .image-preview {
                display: flex;
                flex-wrap: wrap;
                gap: 10px;
            }
            .image-preview div {
                position: relative;
            }
            .image-preview img {
                max-width: 150px;
                max-height: 150px;
                object-fit: cover;
                border: 2px solid #ddd;
                border-radius: 5px;
            }
            .remove-btn {
                position: absolute;
                top: 5px;
                right: 5px;
                background-color: rgba(255, 0, 0, 0.8);
                color: white;
                border: none;
                border-radius: 50%;
                width: 25px;
                height: 25px;
                display: flex;
                align-items: center;
                justify-content: center;
                cursor: pointer;
            }
        </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
         
                <div class="sidebar-brand-text mx-3"> 
                    <img src="img-espiritusanto/logo.png"  class="rounded" width="100%" alt="">

                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Inicio</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Publicaciónes</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <li class="nav-item">
                <a class="nav-link" href="novedades.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>información</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                 

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->

                        <!-- Nav Item - Alerts -->
                     
                        <!-- Nav Item - Messages -->
                      

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Unidad Medica Espiritu Santo</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                         
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Salir
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

 

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                            
                                <!-- Card Body -->
                                <div class="card-body">

                                <?php if (isset($_GET['mensaje']) && isset($_GET['type'])): ?>
    <div id="alerta-mensaje" class="alert alert-<?php echo htmlspecialchars($_GET['type']); ?> alert-dismissible fade show" role="alert">
        <?php echo htmlspecialchars($_GET['mensaje']); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <script>
        // Espera 30 segundos (30000 milisegundos) y oculta la alerta
        setTimeout(function() {
            var alerta = document.getElementById('alerta-mensaje');
            if (alerta) {
                alerta.classList.remove('show');
                alerta.classList.add('fade');
                alerta.addEventListener('transitionend', function() {
                    alerta.remove(); // Elimina el elemento del DOM después de la transición
                });
            }
        }, 10000);
    </script>
<?php endif; ?>




                                    <div class="container  mt-5 col-8">
                                        <h1 class="text-center mb-4">Publicar Noticias</h1>
                                        <form action="scripts/public_notices.php" method="POST" enctype="multipart/form-data">
                                            <!-- Título -->
                                            <div class="mb-3">
                                                <label for="titulo" class="form-label">Título de la noticia</label>
                                                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingrese el título de la noticia" required>
                                            </div>
                                            
                                            <!-- Contenido -->
                                            <div class="mb-3">
                                                <label for="contenido" class="form-label">Contenido</label>
                                                <textarea class="form-control" id="contenido" name="contenido" rows="5" placeholder="Escriba el contenido de la noticia" required></textarea>
                                            </div>
                                            
                                            <!-- Imágenes -->
                                            <div class="mb-3">
                                                <label for="imagenes" class="form-label">Subir Imágenes</label>
                                                <input type="file" class="form-control" id="imagenes" name="imagenes[]" >
                                                <div id="imagePreview" class="image-preview mt-3"></div>
                                            </div>
                                            
                                            <!-- Categoría -->
                                            <div class="mb-3">
                                                <label for="categoria" class="form-label">Categoría</label>
                                                <select class="form-select" id="categoria" name="categoria" required>
                                                    <option value="" selected disabled>Seleccione una categoría</option>
                                                    <option value="Salud">Salud</option>
                                                    <option value="Educación">Educación</option>
                                                    <option value="Comunidad">Comunidad</option>
                                                    <option value="Eventos">Eventos</option>
                                                </select>
                                            </div>
                                            
                                            <!-- Enviar -->
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-success">Publicar Noticia</button>
                                            </div>
                                        </form>
                                    </div>
                                





                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                     
                    </div>

                    <!-- Content Row -->
                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <!-- <span>Copyright &copy; Your Website 2021</span> -->
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Esta seguro de salir?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-success" href="logout.php">Salir</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->

      <!-- Script para manejo de imágenes -->
 <!-- Script para manejo de imágenes -->
 <script>
    const fileInput = document.getElementById('imagenes');
    const imagePreview = document.getElementById('imagePreview');
    const selectedFiles = [];

    fileInput.addEventListener('change', (event) => {
        const files = Array.from(event.target.files);
        files.forEach((file) => {
            if (file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    const div = document.createElement('div');
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.alt = file.name;

                    // Botón para eliminar la imagen
                    const removeBtn = document.createElement('button');
                    removeBtn.classList.add('remove-btn');
                    removeBtn.innerHTML = '×';
                    removeBtn.addEventListener('click', () => {
                        const index = selectedFiles.indexOf(file);
                        if (index > -1) selectedFiles.splice(index, 1);
                        div.remove();
                    });

                    div.appendChild(img);
                    div.appendChild(removeBtn);
                    imagePreview.appendChild(div);
                    selectedFiles.push(file);
                };
                reader.readAsDataURL(file);
            }
        });

        // Actualizar el input con los archivos restantes
        fileInput.files = new FileList(selectedFiles);
    });
</script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>