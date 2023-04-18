<?php
$datos=array();
$datos[0]="lunes";
$datos[1]="martes";
$datos[2]="miercoles";
$datos[3]="jueves";
$datos[4]="viernes";
$datos[5]="sabado";
$datos[6]="domingo";
print_r($datos);
echo "los dias de la semana son:"."<br>";
for($a=0;$a<=6;$a++){
    echo $datos[$a]."<br>";
}
unset($datos[2]);
print_r($datos);
sort($datos);
print_r($datos);
$tamano=count($datos);
echo $tamano;
for($a=0;$a<6;$a++){
    echo $a."<br>";
   
    echo $tamano."<br>";
    echo $datos[$a];
}