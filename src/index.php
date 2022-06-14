<?php
    use ITEC\PRESENCIAL\DAW\BDLIST\Clases\bd;
    $bd = new bd();
    $resultado = $bd->Select("SHOW DATABASES");
    print_r($resultado);
    
?>