<?php
$cpf = $_GET['n1'];

if ($cpf == null){
    echo "<script type=\"text/javascript\">alert('Por Favor, Digite Um CPF Valido');";
    echo "javascript:window.location='sla.php';</script>";
}

else if ($cpf == '00000000000' ||
$cpf == '11111111111' ||
$cpf == '22222222222' ||
$cpf == '33333333333' ||
$cpf == '44444444444' ||
$cpf == '55555555555' ||
$cpf == '66666666666' ||
$cpf == '77777777777' ||
$cpf == '88888888888' ||
$cpf == '99999999999') {
    return false;
}
if (strlen($cpf) != 11){
    echo "<script type=\"text/javascript\">alert('Por Favor, Digite Um CPF Valido');";
    echo "javascript:window.location='sla.php';</script>";
}
 else {   
		
    for ($t = 9; $t < 11; $t++) {
        
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf{$c} * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf{$c} != $d) {
        }
    }
}
echo "<script type=\"text/javascript\">alert('CPF Valido');";
    echo "javascript:window.location='FDP.php';</script>";