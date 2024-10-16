<?php 
//1. Uso de matrices
$PRODUCTOS = [
    ["Nombre"=>"FIFA25","cantidad"=>1,"precio"=>70],
    ["Nombre"=>"Alcachofa","cantidad"=>3,"precio"=>4],
    ["Nombre"=>"Bote de Aceitunas","cantidad"=>1,"precio"=>2]
];


echo"<p>Lista de la compra:</p><br>";
for ($i = 0; $i < count($PRODUCTOS); $i++) {
    echo "Nombre:". $PRODUCTOS[$i]["Nombre"] ."<br>".
     "Cantidad ". $PRODUCTOS[$i]["cantidad"] ."<br> ".
     "Precio ". $PRODUCTOS[$i]["precio"] ."<br><br> ";
}
//2. Constantes
define("DESCUENTO_PEQUENO",10);
define("LIMITE_COMPRA_GRANDE",100);
define("LIMITE_DESCUENTO",50);

//3. Operaciones aritméticas:
$TOTAL = $PRODUCTOS[0]["cantidad"]* $PRODUCTOS[0]["precio"]+
        $PRODUCTOS[1]["cantidad"]* $PRODUCTOS[1]["precio"]+
        $PRODUCTOS[2]["cantidad"]* $PRODUCTOS[2]["precio"];

//¿Total > 50?
if ($TOTAL > LIMITE_DESCUENTO){
    //Calcular Total con Descuento
    $nuevo_precio = $TOTAL-($TOTAL*DESCUENTO_PEQUENO/100);
}

//4.Formateo de números y 5. Concatenación de cadenas:
echo "<p>El precio Total es de : ".number_format($TOTAL,2)."</p><br>";
echo "<p>El precio con descuento es de : ".number_format($nuevo_precio, decimals: 2)."</p><br>";


//6. Uso de operadores lógicos
if ($nuevo_precio>LIMITE_COMPRA_GRANDE){
    //7. Saltos de línea y caracteres especiales: 
    $mensaje = "Usted ha realizado una compra grande \n Gracias por venir";
    echo nl2br($mensaje);
}

//8. Conversión de tipos de datos: 
$PrecioToString = (string)$nuevo_precio;
echo "<p>El precio final convertido en string: $PrecioToString</p>"

?>
