<?php

$nome = $_POST ['nome'];
$salario = $_POST ['salario'];

echo $nome ."<br>";
echo $salario ."<br>";

echo "dados sendo armazenados no banco de dados<br>";

$conexao = mysqli_connect ("127.0.0.1", "root","mysqluser","aula3");
$query = "INSERT INTO funcionarios (nome,salario) VALUES ('$nome', $salario)";

echo $query;

$result = mysqli_query ($conexao, $query);
if($result){
    echo "Registro armazenado com sucesso<br>";
}else {
    echo "Erro. BAH TA LIGADO TEU BANCO PIÁ????";
}

?>