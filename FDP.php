<!doctype html>
    <html lang= pt-br>
        <head> 
                <title>  18 de março de 2019 </title>
                <meta charset= "utf-8" >
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel= "stylesheet" href="../_PHP/FDP.css" type="text/css">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
               <style rel="stylesheet">
                   input{
                       float: right;
                   }
                </style>
        </head>
    <body style="background-color: cornflowerblue">
    

    <center><form method= "GET" action="FDP2.php"  style="padding-top:10%; color: white;">
    <div style="width: 20%;">
    <i><header>Folha de Pagamento</header></i> <br />
    <p> Cargo exercido 
    
        <select name="cargo" value = "$cargo">
        <option value="Gerente" name ="Gerente">Gerente</option>
        <option value="Vendedor" name ="Vendedor"> Vendedor</option>
        <option value="Repositor" name ="Repositor">Repositor</option>
        <option value="Faxineiro" name ="Faxineiro">Faxineira</option>
        </select>
   <!-- <input type="text" id="cargo" name="cargo"/>-->
    </p> 

    
    <p> Valor da Pensão 
    <input type="text" name="vdp" id="vdp"  >
    
    <p> Horas extras feitas: 
    <input type="text" id="horasex" name="horasex" >

    <p>P.A.T: 
    <input type="text" id="pat" name="pat" >

    <p> Plano de saúde 
    <input type="text" id="pds" name="pds" >

    <p> Bonus 
    <input type="text" id="bonus" name="bonus" > <br  />


    <center><button type ="submit" name="subimitt" value="subimitt" class="btn btn-primary"> Calcular </button></center> </div> </form> </center>
    </p>
   </body>
</html>   
            