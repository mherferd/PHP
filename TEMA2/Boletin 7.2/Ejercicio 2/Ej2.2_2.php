<?php

// Recibimos los valores de la fila, la columna, el tamaño de la matriz y la direccion seleccionadas
$fila_seleccionada = $_POST['fila'];
$columna_seleccionada = $_POST['columna'];
$direccion_seleccionada = $_POST['direccion'];

if (isset($_POST['valor'])) {
    $valor = $_POST['valor'];
} 

// Restamos 1 para alinear con los índices de las celdas
$fila = $fila_seleccionada - 1;
$columna = $columna_seleccionada - 1;

$valores_celdas = [];

//Extraemos los valores segun la direccion
switch ($direccion_seleccionada) {

    case 'ABDE': 
        for ($i = 0; $i < $valor; $i++) {
            if ($fila + $i < $valor && $columna + $i < $valor) { 
                $celda = "celda" . ($fila + $i) . "_" . ($columna + $i);
                if (isset($_POST[$celda])) {
                    $valores_celdas[] = $_POST[$celda]; 
                }
            }
        }
        break;

    case 'ABIZ': 
        for ($i = 0; $i < $valor; $i++) {
            if ($fila + $i < $valor && $columna - $i >= 0) { 
                $celda = "celda" . ($fila + $i) . "_" . ($columna - $i);
                if (isset($_POST[$celda])) {
                    $valores_celdas[] = $_POST[$celda]; 
                }
            }
        }
        break;

    case 'ARDE': 
        for ($i = 0; $i < $valor; $i++) {
            if ($fila - $i >= 0 && $columna + $i < $valor) { 
                $celda = "celda" . ($fila - $i) . "_" . ($columna + $i);
                if (isset($_POST[$celda])) {
                    $valores_celdas[] = $_POST[$celda]; 
                }
            }
        }
        break;

    case 'ARIZ': 
        for ($i = 0; $i < $valor; $i++) {
            if ($fila - $i >= 0 && $columna - $i >= 0) { 
                $celda = "celda" . ($fila - $i) . "_" . ($columna - $i);
                if (isset($_POST[$celda])) {
                    $valores_celdas[] = $_POST[$celda]; 
                }
            }
        }
        break;

        case 'AR': 
            for ($i = $fila; $i >=0; $i--) {
                $celda = "celda" . ($fila-$i) . "_" . ($columna);
                    if (isset($_POST[$celda])) {
                        $valores_celdas[] = $_POST[$celda]; 
                    }
                
                }
            break;

            case 'AB': 
                for ($i = $fila; $i < $valor; $i++) {
                    $celda = "celda" . ($fila+$i) . "_" . ($columna);
                        if (isset($_POST[$celda])) {
                            $valores_celdas[] = $_POST[$celda]; 
                        }
                    
                    }
                break;

            case 'IZ': 
                for ($i = $columna; $i >=0; $i--) {
                    $celda = "celda" . ($fila) . "_" . ($columna-$i);
                        if (isset($_POST[$celda])) {
                            $valores_celdas[] = $_POST[$celda]; 
                        }
                    
                    }
                break;

                case 'DE': 
                    for ($i = $columna; $i<$valor   ; $i++) {
                        $celda = "celda" . ($fila) . "_" . ($columna+$i);
                            if (isset($_POST[$celda])) {
                                $valores_celdas[] = $_POST[$celda]; 
                            }
                        
                        }
                    break;

        

    default:
        echo "Dirección no válida.";
}

// Imprimimos los valores de las celdas obtenidas
if (!empty($valores_celdas)) {
    echo "Valores de la matriz partiendo de la posicion ($fila_seleccionada , $columna_seleccionada) y en la dirección seleccionada es:<br>";
    foreach ($valores_celdas as $valor_celda) {
        echo "$valor_celda<br>";
    }
} else {
    echo "No se encontraron valores en la dirección '$direccion_seleccionada'.";
}


echo "<br><br>";
echo "<a href='Ej7.2.html'>Volver al inicio</a>";

?>
