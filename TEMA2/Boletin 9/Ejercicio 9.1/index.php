<?php

session_start();
    
    // Definir productos
    $products = [
        "eafc25" => ["name" => "EAFC 25", "price" => 60],
        "rl" => ["name" => "Rocket League", "price" => 30],
        "fortnite" => ["name" => "Fortnite", "price" => 40],
        "pz" => ["name" => "Proyect Zomboid", "price" => 20],
        "gta" => ["name" => "GTA VI", "price" => 70],
    ];


    echo "<h1>TIENDA</h1>";
    echo "<form id='form' name='form' action='carrito.php' method='post'>";

    //Creacion de inputs para enviar la informacion
    foreach ($products as $key => $product) {
        echo "<p>{$product['name']} {$product['price']}\$ 
        <input type='number' id='{$key}' name='{$key}'></p>";
    }

    echo "<input type='submit' value='Enviar'>";
    echo "</form>";


       
?>

