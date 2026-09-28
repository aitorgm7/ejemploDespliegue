<?php
    if(isset($_GET['asignatura']))
        foreach($_GET['asignatura'] as $a){
            echo $a;
        }
    foreach($_GET['profesor'] as $p){
            echo $p;
    }
    echo $_GET['horas'];
    if(!empty($_GET['info']))
        echo "<br/>observaciones:".$_GET['info']."<br/>";
    var_dump($_GET);
    echo "<br/>";
    print_r($_GET);
?>