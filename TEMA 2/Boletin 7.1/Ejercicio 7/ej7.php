<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor = $_POST['valor'];

    // Comprobamos si es un entero
    if (filter_var($valor, FILTER_VALIDATE_INT) !== false) {
        echo "<p>El valor '$valor' es un número entero.</p>";
    } elseif (filter_var($valor, FILTER_VALIDATE_FLOAT) !== false) {
        echo "<p>El valor '$valor' es un número flotante.</p>";
    } elseif (strtolower($valor) === "true" || strtolower($valor) === "false") {
        echo "<p>El valor '$valor' es un valor booleano).</p>";
    } else {
        echo "<p>El valor '$valor' es una cadena de texto.</p>";
    }
}
?>
