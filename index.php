<?php

if(isset($_POST['submit'])){

include_once('config.php');

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];

$result = mysqli_query($conexao, "INSERT INTO cadastro(nome, telefone) values('$nome', '$telefone')");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aulasexta</title>
    <link rel="stylesheet" href="estilo.css">

    
</head>
<body>



<img src="https://assets.stickpng.com/images/580b57fcd9996e24bc43c529.png">




  
<form action="index.php" method="POST">


<form class="caixa">
<div class="login">


<div class="ajustar">

<h1 style="font-size:30px; font-family: Netflix Sans, Helvetica Neue, Segoe UI, Roboto, Ubuntu, sans-serif" > Entrar</h1>

<br>
<label></label>
<input placeholder="Digite o seu email" type="text"  name="E-mail" id="E-mail" class="E-mail" style=" width:300px;
height:50px; background-color: #333333; border-radius: 5px; border: solid 0; padding-left: 20px; color:#fff;" /> 
<br>
<br>
<br>
<label></label>
<input  placeholder="Digite a sua senha" type="text" name="Senha" style=" width:300px;
height:50px; background-color: #333333; border-radius: 5px; border: solid 0; padding-left: 20px; color:#fff;" />
<br>
<br>
<br>
<input  type="submit" name="submit" id="submit" value="Entrar"  style="background-color:red; width:320px;
height:50px; border-radius: 5px;  border: solid 0; padding-left: 10px;" />
<br>
<br>
<input type="checkbox"  />
<label>Lembre-se de mim</labe>


</div>
</div>
</form> 




</body>
</html>