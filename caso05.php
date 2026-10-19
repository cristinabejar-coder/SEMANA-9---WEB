<?php
// Aplicamos la función interna include() para invocar el archivo externo
include("lib/funciones.php");

// Variables iniciales
$num1 = "";
$num2 = "";
$resultado = "";

// Si la persona presiona el botón
if (isset($_POST['btnCalcular'])) {
    $num1 = $_POST['numero1'];
    $num2 = $_POST['numero2'];
    
    // Llamamos a la función del archivo externo
    $resultado = sumarNumeros($num1, $num2);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caso 05 - Suma de Números</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5" style="max-width: 450px;">
        <h3 class="text-center mb-4 text-primary">Caso 5: Sumar dos Números</h3>

        <!-- Formulario -->
        <form action="" method="post" class="card p-4 shadow-sm border-0 rounded-4">
            <div class="mb-3">
                <label for="numero1" class="form-label fw-bold">Ingrese el primer número:</label>
                <input type="number" step="1" class="form-control" id="numero1" name="numero1" value="<?php echo $num1; ?>" required>
            </div>

            <div class="mb-3">
                <label for="numero2" class="form-label fw-bold">Ingrese el segundo número:</label>
                <input type="number" step="1" class="form-control" id="numero2" name="numero2" value="<?php echo $num2; ?>" required>
            </div>

            <button type="submit" name="btnCalcular" class="btn btn-primary w-100 fw-bold">
                Calcular Suma
            </button>
        </form>

        <!-- Muestra el resultado de la función solo si se calculó -->
        <?php if ($resultado !== ""): ?>
            <div class="alert alert-success mt-4 text-center fw-bold fs-5 rounded-3" role="alert">
                La suma es: <?php echo $resultado; ?>
            </div>
        <?php endif; ?>

    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>