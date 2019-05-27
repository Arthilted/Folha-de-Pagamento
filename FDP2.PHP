<?php 

$extras =$_GET['horasex'];
$cpat = $_GET['pat'];
$cb = $_GET['bonus'];
$cpds = $_GET['pds'];
$pensao = $_GET['vdp'];

$hec = $extras*25; /*calculo de horas extras*/
$la = $hec+$cb;
$la2 = $cpat-$cpds;

$cargo = array(array('Gerente', 5000),array('Vendedor', 3500),array('Repositor', 1500),array('Faxineiro', 1000));


if ( $extras >= 21 ){

    echo "<script language=javascript>alert( 'Verifique o número de horas extras' );";
    echo "javascript:window.location='FDP.php';</script>";
    }

if ( $cpat == null ){

      echo "<script language=javascript>alert( 'Todos os campos devem ser preenchido' );";
      echo "javascript:window.location='FDP.php';</script>";
      }

if ( $cb == null ){

      echo "<script language=javascript>alert( 'Todos os campos devem ser preenchido );";
      echo "javascript:window.location='FDP.php';</script>";
        }

if ( $cb == null ){

      echo "<script language=javascript>alert( 'Todos os campos devem ser preenchido );";
      echo "javascript:window.location='FDP.php';</script>";
            }
  
  if($cargo[0][0] == "Gerente"){

    echo "Seu salario bruto é igual a: ";
    echo $cargo[0][1];
    echo ".<br/> Voce fez um total de $extras horas extras.<br/> Vai receber $hec a mais.<br/> ";
    echo "Com todos os descontos, seu salario líquido vai ser: ";
    echo (((($cargo[0][1]*6)/100+($cargo[0][1]*8)/100)-$cargo[0][1])*-1-$pensao);
  
  }

  elseif($cargo[1][0] == "Vendedor"){

    echo "Seu salario bruto é igual a ";
    echo $cargo[1][1];
    echo "Voce fez um total de $extras e vai receber $hec a mais";
    echo "Com todos os descontos, seu salario líquido vai ser ";
    echo (((($cargo[1][1]*6)/100+($cargo[1][1]*8)/100)-$cargo[1][1])*-1-$pensao);

  
  }
  elseif($cargo[2][0] == "Repositor"){

    echo "Seu salario bruto é igual a ";
    echo $cargo[2][1];
    echo "Voce fez um total de $extras e vai receber $hec a mais";
    echo "Com todos os descontos, seu salario líquido vai ser ";
    echo (((($cargo[2][1]*6)/100+($cargo[2][1]*8)/100)-$cargo[2][1])*-1-$pensao);
  
   
  }

  elseif($cargo[3][0] == "Faxineiro"){

    echo "Seu salario bruto é igual a ";
    echo $cargo[3][1];
    echo "Voce fez um total de $extras e vai receber $hec a mais";
    echo "Com todos os descontos, seu salario líquido vai ser ";
    echo (((($cargo[2][1]*6)/100+($cargo[2][1]*8)/100)-$cargo[2][1])*-1-$pensao);
  
  }


  

?>