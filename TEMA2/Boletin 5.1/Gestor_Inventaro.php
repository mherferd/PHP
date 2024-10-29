<?php 

//Declaración de Arrays

$Inventario_Actual = [
    ["Nombre"=>"Teclado","precio"=>20,"categoria"=>"Electrónica", "cantidad"=>4],
    ["Nombre"=>"Ratón","precio"=>15,"categoria"=>"Electrónica", "cantidad"=>4],
    ["Nombre"=>"Monitor","precio"=>100,"categoria"=>"Electrónica", "cantidad"=>4],
    ["Nombre"=>"Silla","precio"=>80,"categoria"=>"Muebles", "cantidad"=>4],
];
echo "<pre>";print_r($Inventario_Actual);echo"</pre>";

$Inventario_A = [
    ["Nombre"=>"Ratón","precio"=>10,"categoria"=>"Electrónica"],
    ["Nombre"=>"Lámpara","precio"=>25,"categoria"=>"Iluminación"],
    ["Nombre"=>"Escritorio","precio"=>50,"categoria"=>"Muebles"],
];
echo "<pre>";print_r($Inventario_A);echo"</pre>";


$Inventario_B = [
    ["Nombre"=>"Monitor","precio"=>92,"categoria"=>"Electrónica"],
    ["Nombre"=>"Auriculares","precio"=>30,"categoria"=>"Electrónica"],
    ["Nombre"=>"Lámpara","precio"=>20,"categoria"=>"Iluminación"],
];
echo "<pre>";print_r(value: $Inventario_B);echo"</pre><br><hr>";


//ACCEDER AL NOMBRE MANUALMENTE

$Inventario_Actual_Producto = [];
foreach ($Inventario_Actual as $fila){
        $Inventario_Actual_Producto[] = $fila["Nombre"];
}

$Inventario_A_Producto = [];
foreach ($Inventario_A as $fila_a){
        $Inventario_A_Producto[] = $fila_a["Nombre"];
}
echo "<p>Productos del inventario actual: </p><pre>";print_r(value:$Inventario_Actual_Producto);echo"</pre>";
echo "<p>Productos del inventario A: </p><pre>";print_r(value:$Inventario_A_Producto);echo"</pre><hr>";


//COMPARAR INIVENTARIOS

$Diferencia_Actual_A = array_diff($Inventario_Actual_Producto,$Inventario_A_Producto);
echo "<p>Inventarios comparados con diff: </p><pre>";print_r($Diferencia_Actual_A );echo"</pre>";

$Diferencia_Actual_A_2 = array_diff_assoc($Inventario_Actual_Producto,$Inventario_A_Producto);
echo "<p>Inventarios comparados con diff assoc: </p><pre>";print_r($Diferencia_Actual_A_2 );echo"</pre>";

$Diferencia_Actual_A_3 = array_diff_key($Inventario_Actual_Producto,$Inventario_A_Producto);
echo "<p>Inventarios comparados con diff key: </p><pre>";print_r($Diferencia_Actual_A_3 );echo"</pre><br><hr>";


//UNIR INIVENTARIOS

$Unir_Inventarios = array_merge($Inventario_Actual_Producto,$Inventario_A_Producto);
echo "<p>Inventarios comparados con diff key: </p><pre>";print_r($Unir_Inventarios);echo"</pre><br><hr>";


//ELIMINAR DUPLICADOS 

