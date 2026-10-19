<?php
require_once("lib/funciones.php");

$horaLima = null;
$horaNY = null;

if (isset($_POST['btnConsultar'])) {
    $horaLima = obtenerHoraZona('America/Lima');
    $horaNY = obtenerHoraZona('America/New_York');
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Caso 12 - Reloj Multizona</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5" style="max-width: 500px;">
        <h3 class="text-center mb-4 text-primary fw-bold">Caso 12: Comparador de Horas</h3>

        <form action="" method="post" class="card p-4 shadow-sm border-0 rounded-4 text-center">
            <button type="submit" name="btnConsultar" class="btn btn-primary w-100 fw-bold">
                Comparar Hora (Lima vs Nueva York)
            </button>
        </form>

        <?php if ($horaLima !== null): ?>
            <div class="row mt-4">
                <!-- Lima -->
                <div class="col-md-6 mb-3">
                    <div class="card p-3 shadow-sm border-0 rounded-4 text-center bg-white">
                        <h5 class="fw-bold text-primary mb-2">🇵🇪 Lima</h5>
                        <p class="mb-1 text-muted fs-6">Formato 24h: <strong><?php echo $horaLima['formato24']; ?></strong></p>
                        <p class="mb-0 text-muted fs-6">Formato 12h: <strong class="text-success"><?php echo $horaLima['formato12']; ?></strong></p>
                    </div>
                </div>

                <!-- Nueva York -->
                <div class="col-md-6 mb-3">
                    <div class="card p-3 shadow-sm border-0 rounded-4 text-center bg-white">
                        <h5 class="fw-bold text-danger mb-2">🇺🇸 Nueva York</h5>
                        <p class="mb-1 text-muted fs-6">Formato 24h: <strong><?php echo $horaNY['formato24']; ?></strong></p>
                        <p class="mb-0 text-muted fs-6">Formato 12h: <strong class="text-success"><?php echo $horaNY['formato12']; ?></strong></p>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>