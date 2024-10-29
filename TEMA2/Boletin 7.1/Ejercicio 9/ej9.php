<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $url = $_POST['url'];

    // Validación del correo electrónico
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p>El correo electrónico '$email' es válido.</p>";
    } else {
        echo "<p>El correo electrónico '$email' NO es válido.</p>";
    }

    // Validación de la URL
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        echo "<p>La URL '$url' es válida.</p>";
    } else {
        echo "<p>La URL '$url' NO es válida.</p>";
    }
}
?>
