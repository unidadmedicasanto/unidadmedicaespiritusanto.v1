<?php
// Configuración de base de datos
require_once 'db.php';



// Verificar si se ha pasado el id de la noticia a eliminar
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Consultar las imágenes asociadas a la noticia para eliminarlas del servidor
    $sql = "SELECT imagenes FROM noticias WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $imagenes = explode(',', $row['imagenes']);
    
    // Eliminar las imágenes físicas del servidor
    foreach ($imagenes as $imagen) {
        if (!empty($imagen)) {
            $imagePath = 'img-files/' . $imagen;
            if (file_exists($imagePath)) {
                unlink($imagePath); // Eliminar la imagen
            }
        }
    }

    // Eliminar la noticia de la base de datos
    $sqlDelete = "DELETE FROM noticias WHERE id = $id";
    
    if ($conn->query($sqlDelete) === TRUE) {
        // Redirigir a la página de confirmación después de la eliminación mensaje=Noticia publicada con éxito&type=success
        header("Location: ../tables.php?mensaje=Noticia eliminada con éxito&type=success");
        exit();
    } else {
        // En caso de error, redirigir con un mensaje de error
        header("Location: ../tables.php?mensaje=error_eliminando");
        exit();
    }
} else {
    // Si no se pasa el id, redirigir con un mensaje de error
    header("Location: noticias.php?mensaje=error_id");
    exit();
}

$conn->close();
?>
