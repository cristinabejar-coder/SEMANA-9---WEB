<?php
// Incluimos las funciones
include("lib/funciones.php");

// Procesamos el formulario cuando se envía
$resultadoA = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btnCalcularA'])) {
    $nombreIngresado = $_POST['nombreA'];
    
    // Llamamos a tu función para obtener el mensaje
    if (function_exists('Nombre')) {
        $resultadoA = Nombre($nombreIngresado);
    } else {
        $resultadoA = "Hola, " . htmlspecialchars($nombreIngresado) . ". Bienvenido/a.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa A - Mensaje de Bienvenida</title>
    <!-- CDN Básico de Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-4" style="max-width: 500px;">
        <h3 class="mb-3">Programa A: Saludo de Bienvenida</h3>

        <!-- Formulario HTML -->
        <form action="" method="post" class="card p-4 shadow-sm">
            <div class="mb-3">
                <label for="nombreA" class="form-label fw-bold">Ingrese su nombre:</label>
                <input type="text" class="form-control" id="nombreA" name="nombreA" placeholder="Ej. Juan" required>
            </div>

            <button type="submit" name="btnCalcularA" class="btn btn-primary">Mensaje</button>
        </form>

        <!-- Muestra de resultado (solo se muestra si $resultadoA no está vacío) -->
        <?php if (!empty($resultadoA)): ?>
            <div class="alert alert-success mt-3" role="alert">
                <?php echo $resultadoA; ?>
            </div>
        <?php endif; ?>

    </div>

    <!-- CDN Básico de Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>