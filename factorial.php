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
                <th>Núemro</th>
                <th>Factorial</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $resultado;
                for($num=1;$num<11;$num++){
                    $resultado=1;
                    for($c=1;$c<$num+1;$c++){
                        $resultado=$resultado*$c;
                    }
                    echo '<tr>'."<td>$num</td>"."<td>$resultado</td>".'</tr>';
                }
            ?>
        </tbody>
    </table>
</body>
</html>