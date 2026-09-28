<?php
    require 'horas.php';
    require 'colores.php';
    function creartabla(){
        $horario=getHoras();

        $color=getColores();

        $swdia=false;

    for($c=0;$c<7;$c++){
        echo "<tr>";
            if(!$swdia){
                echo '<th></th>';
                foreach($horario[$c] as $dia => $asignatura){
                    echo '<th>'.$dia.'</th>';
                }
                echo "</tr>";
                $swdia=true;
                echo "<tr>";
            }
            $swhora=false;
            foreach($horario[$c] as $asignatura){
                if(!$swhora){
                    $i=$c+1;
                    echo '<th>'.$i.'</th>';
                    $swhora=true;
                }
                echo '<td style="color: '.$color[$asignatura].';">'.$asignatura.'</td>';
            }
            echo "</tr>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="aitor gragera martin">
        <link rel="stylesheet" href="estilos.css">
        <title>HORARIO</title>
    </head>
    <body>
        <table>
            <?php creartabla(); ?>
        </table>
        <ul>
            <li>Asignaturas:</li>
            <ul>
                <li>Desarrollo Web en Entorno de Cliente (DWENC)</li>
                <li>Desarrollo Web en Entorno de Servidor (DWESV)</li>
                <li>Despliegue de Aplicaciones Web (DEAPW)</li>
                <li>Sostenibilidad Aplicada al Sistema Productivo (SASP)</li>
                <li>Itinerario Personal para la Empleabilidad 2 (IPP2)</li>
                <li>proyecto intermodular (PIMOD)</li>
                <li>Tutoría (TUTO)</li>
                <li>opt1</li>
                <li>opt2A</li>
                <li>opt2I</li>
            </ul>
            <li>Profesores:</li>
            <ul>
                <li>Luis Miguel Álvarez Recio -ARL</li>
                <li>Ernesto González Trives - GTE</li>
                <li>Santiago Vázquez Águilar - VAS</li>
                <li>Alberto Domínguez Lebrato - DLA</li>
                <li>Isabel Muñoz Domínguez - MDI</li>
            </ul>
        </ul>
    </body>
</html>