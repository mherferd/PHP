<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor = $_POST['valor'];

    // Verificamos con is_numeric()
    if (is_numeric($valor)) {
        echo "<p>El valor '$valor' es numérico (is_numeric).</p>";
    } else {
        echo "<p>El valor '$valor' NO es numérico (is_numeric).</p>";
    }

    // Verificamos con ctype_digit() (solo considera dígitos positivos)
    if (ctype_digit($valor)) {
        echo "<p>El valor '$valor' contiene solo dígitos (ctype_digit).</p>";
    } else {
        echo "<p>El valor '$valor' NO contiene solo dígitos (ctype_digit).</p>";
    }
}
?>
