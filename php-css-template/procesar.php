<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar Formulario</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Formulario de Contacto</h1>
    </header>
    <main>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $message = htmlspecialchars($_POST['message']);
            
            // Validación simple
            if (!empty($name) && !empty($email) && !empty($message)) {
                echo "<p>Gracias, $name. Tu mensaje ha sido enviado.</p>";
            } else {
                echo "<p>Por favor, completa todos los campos.</p>";
            }
        }
        ?>
        <a href="index.html">Volver al formulario</a>
    </main>
    <footer>
        <p>&copy; 2024 Formulario de Contacto</p>
    </footer>
</body>
</html>

