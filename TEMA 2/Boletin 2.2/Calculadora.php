<?php 
//1. Inicio
//2. Declaración de Variables:
$nombre = "FIFA25";
$cantidad = 1;
$precio = 70;
$descuento = 10;

//3. Calcular Total Sin Descuento:
$TOTAL = $cantidad*$precio;

//4. ¿Total > 50?
if ($TOTAL>50){
    //5. Calcular Total con Descuento
    $nuevo_precio = $TOTAL-($TOTAL*10/100);
}

//6. Mostrar Resumen de la Compra:
echo "<p>Producto: $nombre <br>Cantidad: $cantidad<br>Precio Ud: $precio<br>Total sin descuento: $TOTAL<br>TOTAL A PAGAR: $nuevo_precio</p><br>";

//7. ¿Total > 100?: 
if ($nuevo_precio>100){
    //8. Mostrar Mensaje de Compra Grande
    echo "<p>Es una compra grande</p>";
}
//9. Fin:
?>
