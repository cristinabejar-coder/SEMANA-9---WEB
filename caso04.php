<?php
// Incluimos las funciones
include("lib/funciones.php");

// Variables iniciales
$nota = "";
$mensaje = "";

// Si la persona presiona el botón
if (isset($_POST['btnCalcular'])) {
    // 1. Generamos un número aleatorio entre 0 y 20
    $nota = rand(0, 20);
    
    // 2. Llamamos a la función enviándole la nota
    $mensaje = evaluarNota($nota);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caso 04</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5" style="max-width: 400px;">
        <h3 class="text-center mb-4">Caso 4: Evaluación</h3>

        <form action="" method="post" class="card p-4 shadow-sm text-center">
            <button type="submit" name="btnCalcular" class="btn btn-primary w-100">
                Generar Nota
            </button>
        </form>

        <!-- Se muestra el resultado solo si ya se presionó el botón -->
        <?php if ($nota !== ""): ?>
            <div class="alert alert-info mt-3 text-center" role="alert">
                <p class="mb-1">Su nota es: <strong><?php echo $nota; ?></strong></p>
                <h4><?php echo $mensaje; ?></h4>
            </div>
        <?php endif; ?>

    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>