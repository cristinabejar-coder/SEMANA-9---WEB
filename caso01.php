<?php
// Llamada a la función calcular cuadrado
include("lib/funciones.php");

$resultadoA = ""; // Inicializamos la variable

if (isset($_POST['btnCalcularA'])) {
    // Usamos 'numeroA' para que coincida con el atributo name del input
    $num = (int) $_POST['numeroA']; 
    $cuadrado = calcularCuadrado($num);
    $resultadoA = "El cuadrado de " . $num . " es: <strong>" . $cuadrado . "</strong>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa A - Cuadrado de un Número</title>
    <!-- CDN Básico de Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-4" style="max-width: 500px;">
        <h3 class="mb-3">Programa A: Calcular Cuadrado</h3>

        <!-- Formulario HTML -->
        <form action="" method="post" class="card p-4 shadow-sm">
            <div class="mb-3">
                <label for="numeroA" class="form-label fw-bold">Ingrese un número entero:</label>
                <input type="number" step="1" class="form-control" id="numeroA" name="numeroA" required>
            </div>

            <button type="submit" name="btnCalcularA" class="btn btn-primary">Calcular Cuadrado</button>
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