<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Login</title>
    <!-- <link href="img/icons.png" rel="icon"> -->
    <link href="img-espiritusanto/logo.png" rel="icon">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->

                        
 


                        <?php if (isset($_GET['mensaje']) && isset($_GET['type'])): ?>
                            <div id="alerta-mensaje" class="alert alert-<?php echo htmlspecialchars($_GET['type']); ?> alert-dismissible fade show" role="alert">
                                <?php echo htmlspecialchars($_GET['mensaje']); ?>
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
                        

                        <div class="row align-items-center">
                            <!-- Imagen -->
                            <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center">
                                <img src="img-espiritusanto/logo.png" alt="Logo Unidad Médica Espíritu Santo" class="img-fluid" style="max-width: 80%; height: auto; border-radius: 10px;">
                            </div>    


                            

                            
                            <!-- Formulario -->
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Unidad Médica Espíritu Santo</h1>
                                    </div>
                                    <form class="user" method="post"  action="scripts/login.php">
                                        <div class="form-group mb-3">
                                            <input type="text" name="username" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Nombre de usuario..." required>
                                        </div>
                                        <div class="form-group mb-4">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Contraseña"        minlength="5"
                                                required>
                                        </div>
                                        <!-- <a href="index.php" class="btn btn-success btn-user btn-block">
                                            Login
                                        </a> -->

                                        <button  class="btn btn-success btn-user btn-block" type="submit">Ingresar</button>
                                        <hr>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>