<?php
require_once("lib/funciones.php");

$catetoA = "";
$catetoB = "";
$hipotenusa = "";

if (isset($_POST['btnCalcular'])) {
    $catetoA = $_POST['catetoA'];
    $catetoB = $_POST['catetoB'];
    $hipotenusa = calcularHipotenusa($catetoA, $catetoB);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Caso 10 - Hipotenusa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5" style="max-width: 450px;">
        <h3 class="text-center mb-4 text-primary fw-bold">Caso 10: Teorema de Pitágoras</h3>

        <form action="" method="post" class="card p-4 shadow-sm border-0 rounded-4">
            <div class="mb-3">
                <label class="form-label fw-bold">Cateto A:</label>
                <input type="number" step="any" min="0" name="catetoA" class="form-control" value="<?php echo $catetoA; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Cateto B:</label>
                <input type="number" step="any" min="0" name="catetoB" class="form-control" value="<?php echo $catetoB; ?>" required>
            </div>
            <button type="submit" name="btnCalcular" class="btn btn-primary w-100 fw-bold">Calcular Hipotenusa</button>
        </form>

        <?php if ($hipotenusa !== ""): ?>
            <div class="card mt-4 p-4 shadow-sm border-0 rounded-4 bg-white text-center">
                <p class="text-muted mb-1 fs-6">Hipotenusa (h):</p>
                <div class="alert alert-success fs-3 fw-bold mb-0 rounded-3">
                    <?php echo $hipotenusa; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>