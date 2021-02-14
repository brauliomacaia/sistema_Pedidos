<?php

// se a quantidade do meu vetor de post for maior que 0, faço tudo isso aí
    if (count($_POST) > 0) {

    
  //  1. Vamos pegar os valores do formulário
    $email = $_POST["email"]; //pega o email digitado
    $senha = $_POST["senha"]; //pega a senha digitada

  // 2. Fazer uma conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
try {
  $conn = new PDO("mysql:host=$servername;dbname=restaurante_db", $username, $password);
  // Fazer o método de exception de erro do PDO
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Conexão realizada com Sucesso";
     // 3. Verificar se email e senha estão no banco de dados
    // vamos ter que usar o elemento de conexão utilizado acima $conn
    // evitar concatenar aqui dentro, fazer where direto, você acaba dando espaço para SQL Injection. Então criar uma estrutura de seleçao com variaveis
    $stmt = $conn->prepare("SELECT codigo FROM usuario WHERE email=:email AND senha=md5(:senha)");
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);
    $stmt->execute();

    $result = $stmt->fetchAll();

    // criar variavel quantidade
    $qtd_usuarios = count($result);
    if ($qtd_usuarios == 1){
        //A Fazer, substituir pelo redirecionamento...
        $resultado ["msg"] = "Usuário encontrado";
        $resultado ["cod"] = 1;
    } else if ($qtd_usuarios == 0){
        $resultado ["msg"] = "Email e senha não conferem";
        $resultado ["cod"] = 0;
    }

} 
    catch(PDOException $e) {
        echo "Conexão Falhou: " . $e->getMessage();
}
    //Se for nulo ele fecha a conexão com o banco. Num sistema que muitos usam, é importante isso
    $conn = null;
}
     include("index.php");
?>