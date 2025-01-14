<?php

require_once 'db.php'; // Asegúrate de que este archivo devuelve la conexión
// require_once __DIR__ . '/vendor/autoload.php';  // Ajusta la ruta según corresponda
require __DIR__ . '/vendor/autoload.php';


if (!isset($conn) || !$conn) {
    die("Error: No se pudo establecer conexión con la base de datos.");
}

if ($_POST) {
    try {
        // Recoger los datos del formulario
        $tipo_reclamo = $_POST['tipo_reclamo'] ?? null;
        $tipo_sede = $_POST['tipo_sede'] ?? null;
        $tipo_identificacion = $_POST['tipo_identificacion'] ?? null;
        $numero_identificacion = $_POST['numero_identificacion'] ?? null;
        $nombre = $_POST['nombre'] ?? null;
        $apellido = $_POST['apellido'] ?? null;
        $email = $_POST['email'] ?? null;
        $telefono = $_POST['telefono'] ?? null;
        $direccion = $_POST['direccion'] ?? null;
        $mensaje = $_POST['mensaje'] ?? null;

        // Verificar que los datos no estén vacíos
        if (empty($tipo_reclamo) || empty($tipo_sede) || empty($tipo_identificacion) || empty($numero_identificacion) || empty($nombre) || empty($apellido) || empty($email) || empty($telefono) || empty($mensaje)) {
            throw new Exception("Todos los campos son obligatorios.");
        }

        // Configurar correos según el tipo de sede
         
      

        $correos = "";
        if ($tipo_sede == 'novita') {
            $correos ='citasunidadmedicaespiritusanto@hotmail.com';
        } else if ($tipo_sede == 'meido-sanjuan') {
            $correos = 'citasunidadmedicaespiritusanto@hotmail.com';
        } else if ($tipo_sede == 'sanjose-del-parmar') {
            $correos = 'citasunidadmedicaespiritusanto@hotmail.com';
        } else {
            return  new Exception("Sede no válida.");
        }
                            
  

        // Generar un radicado único
        $radicado = rand(10000, 99999);

        // Preparar la consulta SQL para evitar inyecciones
        $stmt = $conn->prepare("INSERT INTO table_novedades (tipo_reclamo, tipo_sede, tipo_identificacion, numero_identificacion, nombre, apellido, email, telefono, direccion, mensaje, radicado) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        if (!$stmt) {
            throw new Exception("Error al preparar la consulta: " . $conn->error);
        }

        // Asociar los parámetros a la consulta
        $stmt->bind_param(
            "sssssssssss",
            $tipo_reclamo,
            $tipo_sede,
            $tipo_identificacion,
            $numero_identificacion,
            $nombre,
            $apellido,
            $email,
            $telefono,
            $direccion,
            $mensaje,
            $radicado
        );

        var_dump($stmt);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            echo "Datos guardados con éxito. Radicado: " . $radicado;




            $resend = Resend::client('re_gz4rCdZx_N7G2BmJb7hfmKuomrGxBUG9J');

            // Validar sedes,  si es en Novid


            $html_content = "
            <h3>Detalles del Reclamo</h3>
            <p><strong>Radicado:</strong> <strong>$radicado</strong></p>
            <p><strong>Tipo de Radicado:</strong> $tipo_reclamo</p>
            <p><strong>Tipo de Sede:</strong> $tipo_sede</p>
            <p><strong>Tipo de Identificación:</strong> $tipo_identificacion</p>
            <p><strong>Número de Identificación:</strong> $numero_identificacion</p>
            <p><strong>Nombre:</strong> $nombre</p>
            <p><strong>Apellido:</strong> $apellido</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Teléfono:</strong> $telefono</p>
            <p><strong>Dirección:</strong> $direccion</p>
            <p><strong>Mensaje:</strong> $mensaje</p>
            <p><strong>Unidad Medica Espiritu Santo</strong> </p>

            ";


            print_r($correos);
            $resend->emails->send([
            'from' => 'onboarding@resend.dev',
            'to' => $correos, # Al correo del usuario
            'subject' => $tipo_reclamo,
            'html' => $html_content
            ]);


            // Cerrar conexión
            $stmt->close();
            $conn->close();

            // Redirigir a index.php con mensaje de éxito y radicado
            header("Location: ../../contact.php?mensaje=exito&radicado=$radicado");
            exit();

        } else {
            throw new Exception("Error al ejecutar la consulta: " . $stmt->error);
        }

        // Cerrar la consulta
        $stmt->close();

    } catch (Exception $e) {
        // Manejo de errores
        echo "Error: " . $e->getMessage();
    }
}

$conn->close(); // Cierra la conexión al final
?>

