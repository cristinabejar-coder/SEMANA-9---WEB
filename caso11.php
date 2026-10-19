<?php
require_once("lib/funciones.php");

$infoFecha = null;

if (isset($_POST['btnGenerar'])) {
    $infoFecha = obtenerInfoFechaHora();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Caso 11 - Fecha y Hora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5" style="max-width: 480px;">
        <h3 class="text-center mb-4 text-primary fw-bold">Caso 11: Marca de Tiempo y Fecha</h3>

        <form action="" method="post" class="card p-4 shadow-sm border-0 rounded-4 text-center">
            <p class="text-muted mb-3">Zona horaria: <strong>America/Lima</strong></p>
            <button type="submit" name="btnGenerar" class="btn btn-primary w-100 fw-bold">Consultar Fecha y Hora</button>
        </form>

        <?php if ($infoFecha !== null): ?>
            <div class="card mt-4 p-4 shadow-sm border-0 rounded-4 bg-white">
                <ul class="list-group list-group-flush fs-6">
                    <li class="list-group-item d-flex justify-content-between px-0">
                        <span>Segundos desde 01/01/1970:</span>
                        <strong class="text-primary"><?php echo $infoFecha['segundos']; ?></strong>
                    </li>
                    <li class="list-group-item d-flex justify-content-between px-0">
                        <span>Fecha actual (d/m/Y):</span>
                        <strong><?php echo $infoFecha['fecha']; ?></strong>
                    </li>
                    <li class="list-group-item d-flex justify-content-between px-0">
                        <span>Hora actual (12 Horas):</span>
                        <strong class="text-success"><?php echo $infoFecha['hora']; ?></strong>
                    </li>
                </ul>
            </div>
        <?php endif; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>