<?php
// Invocamos las funciones desde la carpeta lib
require_once("lib/funciones.php");

// Variables iniciales
$subtotal = "";
$igv = "";
$total = "";

// Si la persona presiona el botón
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btnCalcular'])) {
    $subtotal = (float) $_POST['monto'];
    
    // Si la función está creada en lib/funciones.php la usamos:
    if (function_exists('calcularIgv')) {
        $igv = calcularIgv($subtotal);
    } else {
        // En caso de no haberla agregado aún a lib/funciones.php:
        $igv = $subtotal * 0.18;
    }
    
    $total = $subtotal + $igv;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caso 6 - Cálculo Financiero</title>
    <!-- CDN Básico de Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5" style="max-width: 450px;">
        <h3 class="text-center mb-4 text-primary fw-bold">Caso 6: Cálculo de IGV</h3>

        <!-- Formulario HTML -->
        <form action="" method="post" class="card p-4 shadow-sm border-0 rounded-4">
            <div class="mb-3">
                <label for="monto" class="form-label fw-bold">Ingrese el Monto Base (Subtotal S/):</label>
                <input type="number" step="0.01" min="0" class="form-control" id="monto" name="monto" value="<?php echo $subtotal; ?>" placeholder="Ej. 100.00" required>
            </div>

            <button type="submit" name="btnCalcular" class="btn btn-primary w-100 fw-bold">
                Calcular IGV y Total
            </button>
        </form>

        <!-- Muestra el resultado únicamente al presionar el botón -->
        <?php if ($subtotal !== ""): ?>
            <div class="card mt-4 p-4 shadow-sm border-0 rounded-4 bg-white">
                <h5 class="fw-bold mb-3 text-secondary text-center">Detalle Financiero</h5>
                <ul class="list-group list-group-flush fs-6">
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                        Subtotal:
                        <span class="fw-bold">S/ <?php echo number_format($subtotal, 2); ?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                        IGV (18%):
                        <span class="fw-bold text-danger">+ S/ <?php echo number_format($igv, 2); ?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0 bg-light p-2 rounded mt-2">
                        <span class="fw-bold fs-5 text-dark">Total:</span>
                        <span class="fw-bold fs-5 text-success">S/ <?php echo number_format($total, 2); ?></span>
                    </li>
                </ul>
            </div>
        <?php endif; ?>

    </div>

    <!-- CDN Básico de Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>