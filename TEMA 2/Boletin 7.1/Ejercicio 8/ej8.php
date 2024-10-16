<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor = $_POST['valor'];

    // Validar si es alfabético (solo letras)
    if (ctype_alpha($valor)) {
        echo "<p>El valor '$valor' contiene solo caracteres alfabéticos.</p>";
    } else {
        echo "<p>El valor '$valor' NO contiene solo caracteres alfabéticos.</p>";
    }

    // Validar si es alfanumérico (letras y números)
    if (ctype_alnum($valor)) {
        echo "<p>El valor '$valor' contiene solo caracteres alfanuméricos.</p>";
    } else {
        echo "<p>El valor '$valor' NO contiene solo caracteres alfanuméricos.</p>";
    }

    // Validar si contiene solo dígitos
    if (ctype_digit($valor)) {
        echo "<p>El valor '$valor' contiene solo dígitos.</p>";
    } else {
        echo "<p>El valor '$valor' NO contiene solo dígitos.</p>";
    }
}
?>
