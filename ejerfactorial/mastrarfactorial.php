<!-- input en name  si pones corchetes te genera un array
en el foreach se le da un nombre al indice del array 
-->

<?php
                if(isset($_GET["valor"])){
                    $resultado;
                    for($num=1;$num<$_GET["valor"]+1;$num++){
                        $resultado=1;
                        for($c=1;$c<$num+1;$c++){
                            $resultado=$resultado*$c;
                        }
                        $factoriales[$num]=$resultado;
                    }
                }
                
            ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Factorial del 1 al 10</th>
            </tr>
            <tr>
                <!--<th>Núemro</th>-->
                <th>Factorial</th>
            </tr>
        </thead>
        <tbody>
            <?php
                /*foreach($factoriales as $numero => $resultado){
                    //echo '<tr>'."<td>$numero</td>"."<td>$resultado</td>".'</tr>';
                    echo $numero. '-';
                    echo $resultado;
                    echo '<br/>';
                }*/
                foreach($factoriales as $resultado){
                    echo '<tr>'."<td>$resultado</td>".'</tr>';
                }
            ?>
        </tbody>
    </table>
</body>
</html>