<?php
// Llamada a las funciones de la librería
include("lib/funciones.php");

$resultadoB = ""; // Inicializamos la variable

if (isset($_POST['btnCalcularB'])) {
    // Obtenemos los dos números enviados por el formulario
    $n1 = (int) $_POST['numero1'];
    $n2 = (int) $_POST['numero2'];
    
    // Invocamos la función producto()
    $prod = producto($n1, $n2);
    
    $resultadoB = "El producto de " . $n1 . " x " . $n2 . " es: <strong>" . $prod . "</strong>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa B - Producto de dos Números</title>
    <!-- CDN Básico de Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-4" style="max-width: 500px;">
        <h3 class="mb-3">Programa B: Producto de Dos Números</h3>

        <!-- Formulario HTML -->
        <form action="" method="post" class="card p-4 shadow-sm">
            <div class="mb-3">
                <label for="numero1" class="form-label fw-bold">Ingrese el primer número entero:</label>
                <input type="number" step="1" class="form-control" id="numero1" name="numero1" required>
            </div>

            <div class="mb-3">
                <label for="numero2" class="form-label fw-bold">Ingrese el segundo número entero:</label>
                <input type="number" step="1" class="form-control" id="numero2" name="numero2" required>
            </div>

            <button type="submit" name="btnCalcularB" class="btn btn-success">Calcular Producto</button>
        </form>

        <!-- Muestra de resultado -->
        <?php if (!empty($resultadoB)): ?>
            <div class="alert alert-success mt-3" role="alert">
                <?php echo $resultadoB; ?>
            </div>
        <?php endif; ?>
        
    </div>

    <!-- CDN Básico de Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>