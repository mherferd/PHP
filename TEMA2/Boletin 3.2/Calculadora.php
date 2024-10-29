<?php 
//1. Uso de matrices
$PRODUCTOS = [
    ["Nombre"=>"FIFA25","cantidad"=>50,"precio"=>70],
    ["Nombre"=>"Alcachofa","cantidad"=>3,"precio"=>4],
    ["Nombre"=>"Bote de Aceitunas","cantidad"=>1,"precio"=>2]
];


echo"<p>Lista de la compra:</p><br>";
for ($i = 0; $i < count($PRODUCTOS); $i++) {
    echo "Nombre:". $PRODUCTOS[$i]["Nombre"] ."<br>".
     "Cantidad ". $PRODUCTOS[$i]["cantidad"] ."<br> ".
     "Precio ". $PRODUCTOS[$i]["precio"] ."€<br><hr><br> ";
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
echo"<p>Aplicampos descuento de 10% por que la compra supera los 50€</p>";
echo "<p>El precio con descuento es de : ".number_format($nuevo_precio, decimals: 2)."</p><br>";




define("LIMITE_CANTIDAD_ADICIONAL",40);
define("DESCUENTO_CANTIDAD_ADICIONAL",5);
define("IVA",15);

$Cantidad_Productos = $PRODUCTOS[0]["cantidad"]+ $PRODUCTOS[1]["cantidad"]+ $PRODUCTOS[2]["cantidad"];

// Aplicar descuento adicional si la cantidad total de productos supera un cierto límite
if ($Cantidad_Productos > LIMITE_CANTIDAD_ADICIONAL){
    $nuevo_precio = $nuevo_precio-($nuevo_precio*DESCUENTO_CANTIDAD_ADICIONAL/100);
    echo"<p>Aplicampos descuento de 5% por que la compra supera los 40 productos</p>";
    echo"<p>El precio con descuento es de :  $nuevo_precio</p><br>";
}

// Calcular el IVA (Impuesto sobre el Valor Añadido)
// Calcular el total con impuestos
$nuevo_precio=$nuevo_precio + $nuevo_precio*IVA/100;
echo "<p> Precio tras aplicar IVA: ". round($nuevo_precio,2)."</p><br>";

if ($nuevo_precio > 2000){
    echo"<p>Enhorabuena!! Tu compra supera los 2000€, por lo que regalamos un bote de aceitunas gratuito extra!!!</p>";
}


//8. Conversión de tipos de datos: 
$PrecioToString = (string)$nuevo_precio;
echo "<p>El precio final convertido en string: $PrecioToString</p>";


// Determinar si el total de productos es par o impar utilizando el operador %

if ($Cantidad_Productos%2== 0){
    echo"<p>Tu total de productos es par</p>";
}
else {
    echo"<p>Tu total de productos es impar</p>";
}

// Calcular cuantos descuentos se han aplicado

if (($Cantidad_Productos > LIMITE_DESCUENTO) && ($TOTAL > LIMITE_CANTIDAD_ADICIONAL)){
    echo "Se han aplicado todos los descuentos posibles";
}
else if (($Cantidad_Productos > LIMITE_DESCUENTO) || ($TOTAL > LIMITE_CANTIDAD_ADICIONAL)){
    echo "Se ha aplicado un descuento";
}
else {
    echo"No se han aplicado descuentos";
}


// Calcular el precio promedio por producto

$Promedio_Producto = $nuevo_precio / $Cantidad_Productos;
echo "<p>El promedio de cada producto es de: ". round($Promedio_Producto,2)."€</p>";


if ($nuevo_precio>LIMITE_COMPRA_GRANDE){
    //7. Saltos de línea y caracteres especiales: 
    $mensaje = "Usted ha realizado una compra grande \n Gracias por venir";
    echo nl2br($mensaje);
}
?>
