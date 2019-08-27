<?php

$dbhost= "localhost";
$user= "aluno";
$password= "aluno";
$dbname= "projetointegrador2info3";

$link= mysqli_connect($dbhost,$user,$password,$dbname) or die("Erro na conexão");

$nome= $_POST["nome"];
$email= $_POST["email"];
$senha= $_POST["senha"];
$senha_cornfirmada= $_POST["senhaconfirmacao"];
$data_nasc= $_POST["datanascimento"];

if ($senha!=$senha_cornfirmada)
{echo "As senhas são diferentes";
    mysqli_close($link);
die();}

$query = "INSERT INTO usuario(nome, email, senha, dt_nasc) VALUES('$nome', '$email','$senha','$data_nasc')";

$result = mysqli_query($link, $query) or die("Error querying database.");

echo "Cadastro realizado com sucesso.";

mysqli_close($link);

?>
