<?php


require_once 'db.php'; // Asegúrate de que este archivo devuelve la conexión
// Variables para el formulario


$titulo = $_POST['titulo'] ?? '';
$contenido = $_POST['contenido'] ?? '';
$categoria = $_POST['categoria'] ?? '';
$fecha_creacion = date('Y-m-d H:i:s'); // Fecha de creación actual


// Manejo de imágenes
$imagenes = [];
$max_size = 5 * 1024 * 1024; // 5MB máximo por imagen
$img_dir = 'img-files/';
echo '<br>';
var_dump($img_dir);


if (isset($_FILES['imagenes']) && !empty($_FILES['imagenes']['name'][0])) {
    foreach ($_FILES['imagenes']['tmp_name'] as $index => $tmp_name) {
        $img_name = basename($_FILES['imagenes']['name'][$index]);
        $img_tmp = $_FILES['imagenes']['tmp_name'][$index];
        $img_size = $_FILES['imagenes']['size'][$index];
        $img_error = $_FILES['imagenes']['error'][$index];
        
        // Verificar si hay algún error con la carga
        if ($img_error !== UPLOAD_ERR_OK) {
            echo "Error al subir la imagen $img_name.";
            continue;
        }

        // Validar el tamaño de la imagen
        if ($img_size > $max_size) {
            echo "La imagen $img_name es demasiado grande. El tamaño máximo permitido es 5MB.";
            continue;
        }

        // Generar nombre único para la imagen
        $img_new_name = uniqid('', true) . '.' . pathinfo($img_name, PATHINFO_EXTENSION); // Extraemos el nombre de la img

        var_dump($img_new_name);
        echo '<br>';
        $img_path = $img_dir . $img_new_name;

        // Mover la imagen a la carpeta de destino
        if (move_uploaded_file($img_tmp, $img_path)) {
            $imagenes[] = $img_new_name;
        } else {
            echo "Error al mover la imagen $img_name.";
        }
    }
}

// Convertir las imágenes en una cadena separada por comas para insertar en la base de datos
$imagenes_str = !empty($imagenes) ? implode(',', $imagenes) : '';

// Insertar en la base de datos
if (!empty($titulo) && !empty($contenido) && !empty($categoria)) {
    $sql = "INSERT INTO noticias (titulo, contenido, categoria, imagenes, fecha_creacion) 
            VALUES ('$titulo', '$contenido', '$categoria', '$imagenes_str', '$fecha_creacion')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../index.php?mensaje=Noticia publicada con éxito&type=success");
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Por favor complete todos los campos del formulario.";
}

$conn->close();


?>