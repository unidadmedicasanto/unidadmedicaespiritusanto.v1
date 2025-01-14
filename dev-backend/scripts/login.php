<?php

require_once 'db.php'; // Asegúrate de que este archivo devuelve la conexión


session_start(); // Iniciar sesión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];


    // Buscar el usuario en la base de datos
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        
        // Verificar la contraseña
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            echo "Inicio de sesión exitoso. <a href='welcome.php'>Continuar</a>";

            header("Location: ../index.php");    // Redirigir a la página de bienvenida
            exit;

        } else {
            // Cerrar conexión
            $stmt->close();
            $conn->close();

            $erro = "Contraseña incorrecta";
            header("Location: ../login.php?mensaje=" . urlencode($erro) . "&type=warning");
            exit();
        }
    } else {
        echo "Usuario no encontrado.";
    }

    $stmt->close();
    $conn->close();
}
?>

