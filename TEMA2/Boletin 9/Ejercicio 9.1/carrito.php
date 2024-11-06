<?php
session_start();



    // Definir productos
    $products = [
        "eafc25" => ["name" => "EAFC 25", "precio" => 60],
        "rl" => ["name" => "Rocket League", "precio" => 30],
        "fortnite" => ["name" => "Fortnite", "precio" => 40],
        "pz" => ["name" => "Project Zomboid", "precio" => 20],
        "gta" => ["name" => "GTA VI", "precio" => 70],
    ];

    // Guardar cantidades en la sesión

    $_SESSION["eafc25"] = isset($_POST["eafc25"]) ? (int)$_POST["eafc25"] : 0;
    $_SESSION["rl"] = isset($_POST["rl"]) ? (int)$_POST["rl"] : 0;
    $_SESSION["fortnite"] = isset($_POST["fortnite"]) ? (int)$_POST["fortnite"] : 0;
    $_SESSION["pz"] = isset($_POST["pz"]) ? (int)$_POST["pz"] : 0;
    $_SESSION["gta"] = isset($_POST["gta"]) ? (int)$_POST["gta"] : 0;


    // Mostrar productos seleccionados en el carrito
    echo "<h1>Productos seleccionados en el carrito:</h1><hr>";
    $total = 0;

    foreach ($products as $key => $product) {
        if ($_SESSION[$key] > 0) {
            $cantidad = $_SESSION[$key];
            $precio = $product['precio'];
            $subtotal = $cantidad * $precio;
            $total += $subtotal;
            echo "{$product['name']}: $cantidad <br>";
            echo "Precio: {$precio} \$<br><br><hr>";
        }

    }
    echo "TOTAL: {$total}\$<br><hr>";


    //Enlace para volver a la tienda
    echo "<a href='index.php'>Cancelar compra:</a>";


    // Temporizador de inactividad
    $inactividad = 10; 
    if (isset($_SESSION["timeout"])) {
        $sesion_actual = time() - $_SESSION["timeout"];
        if ($sesion_actual > $inactividad) {
            session_destroy();
            exit; 
        }
    }
    $_SESSION["timeout"] = time(); 


?>
