<?php
function getHoras(){
    $array=[
                ["L"=>"IPP2","M"=>"DWENC","X"=>"IPP2","J"=>"DWESV","V"=>"OPT2I"],
                ["L"=>"DWENC","M"=>"DWENC","X"=>"DWENC","J"=>"DWESV","V"=>"OPT2A"],
                ["L"=>"DWESV","M"=>"DWESV","X"=>"DWENC","J"=>"DWESV","V"=>"DASP"],
                ["L"=>"PIMOD","M"=>"DWESV","X"=>"DWESV","J"=>"SASP","V"=>"DWESV"],
                ["L"=>"DEAPW","M"=>"PIMOD","X"=>"DEAPW","J"=>"OPT1","V"=>"DWESV"],
                ["L"=>"DWENC","M"=>"DEAPW","X"=>"DEAPW","J"=>"IPP2","V"=>"TUTO"],
                ["L"=>"DWENC"]
           ];
    return $array;
}
?>


select
checkbox

asignaturas,profesor,horas,informacion