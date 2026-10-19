<?php
// --- DECLARACIÓN DE FUNCIONES ---

function mensaje(){
    echo "Bienvenidos a PHP";
}

function pon_tu_nombre($nombre){
    echo $nombre;
}

function con_parametros($var1, $var2, $var3) {
    $suma = $var1 + $var2 + $var3;
    echo "La suma de los tres numeros es: " . $suma . "<br/>";
}

function promedio($nt, $nee, $proy){
    $prom = ($nt + $nee + $proy) / 3;
    return $prom;
}

function saludo(string $saludo): string 
{
    return $saludo;
}

function separa() {
    echo "<hr/>";
}

function suma(float $n1, float $n2): float 
{
    $s = $n1 + $n2;
    return $s;
}

// 1. Calcular el cuadrado de un número
function calcularCuadrado(int $n1): int {
    $cuadrado = $n1 * $n1;
    return $cuadrado;
}

// 2. Calcular el producto de dos números
function producto(int $n1, int $n2): int {
    $producto = $n1 * $n2;
    return $producto;
}

// 3. Saludo por nombre
function Nombre($nombre) {
    return "Hola, " . htmlspecialchars($nombre) . ". Bienvenido.";
}

// 4. Evaluación de nota
function evaluarNota($nota) {
    if ($nota >= 13) {
        return "Felicitaciones";
    } else {
        return "Inténtalo en otra oportunidad!!!";
    }
}

// 5. Suma de dos números enteros
function sumarNumeros($numero1, $numero2) {
    return $numero1 + $numero2;
}

// 6. Módulo de Cálculo Financiero (IGV)
function calcularIgv(float $monto): float {
    return $monto * 0.18;
}

// 7. Generador de Código de Ticket
function generarCodigoTicket($categoria, $codigoSecundario) {
    $categoriaLimpia = ltrim($categoria);
    $categoriaMayus = strtoupper($categoriaLimpia);
    $codigoLimpio = rtrim($codigoSecundario);
    return $categoriaMayus . "-" . $codigoLimpio;
}

// 8. Normalización de Nombres Propios
function normalizarNombre($nombreCompleto) {
    $nombreLimpio = trim($nombreCompleto);
    $nombreMinusculas = strtolower($nombreLimpio);
    return ucwords($nombreMinusculas);
}

// 9. Área del Círculo
function calcularAreaCirculo($radio) {
    $area = pi() * pow($radio, 2);
    return number_format($area, 2);
}

// 10. Cálculo de Hipotenusa - Teorema de Pitágoras (SOLO DEBE ESTAR UNA VEZ)
function calcularHipotenusa($catetoA, $catetoB) {
    $hipotenusa = sqrt(pow($catetoA, 2) + pow($catetoB, 2));
    return number_format($hipotenusa, 2);
}

// 11. Generador de Marca de Tiempo y Fecha Completa
function obtenerInfoFechaHora() {
    date_default_timezone_set('America/Lima');
    return [
        'segundos' => time(),
        'fecha' => date("d/m/Y"),
        'hora' => date("h:i:s A")
    ];
}

// 12. Reloj Multizona Horaria
function obtenerHoraZona($zona) {
    date_default_timezone_set($zona);
    return [
        'formato24' => date("H:i:s"),
        'formato12' => date("h:i:s a")
    ];
}

?>