//conexao com o banco de dados 

<?php 
define("HOST", "192.168.52.128");
define("PORT", "5432");
define("DBNAME", "minimundo");
define("USER", "postgres");
define("PASSWORD", "159753");

try {
  $dsn = new PDO("sql:host=". HOST . ";port=".PORT.";dbname=" . DBNAME .";user=" . USER . ";password=" . PASSWORD);
} catch (PDOException $e) {
  echo "a conexao falhou e retornou a seguinte mensagem de erro: " .$e->getMessage();
}

/*** FIM DOS CÓDIGOS DE CONEXÃO COM O BD ***/


/***PREPARAÇÃO E INSERÇÃO NO BANCO DE DADOS ***/
$stmt = $dsn->prepare("INSERT INTO cliente(nome_cliente, cpf_cliente, email_cliente, data_nascimento_cliente)VALUES(?,?,?,?)");

$resultSet = $stmt->execute([$_REQUEST["nome_cliente"], $_REQUEST["cpf_cliente"], $_REQUEST["email_cliente"], $_REQUEST["data_nascimento_cliente"]]);
if($resultSet) {
  echo "os dados foram inseridos com sucesso !!!";
} else {
  echo "ocorreu um erro e nao foi possivel inserir os dados.";
}

// destruindo o objeto statement e fechando a conexao
$stmt = null;
$dsn = null;
?>
