<!DOCTYPE html>
<html lang="en">

<head>
    
</head>

<body>
    <form action="verpedidos.php">
        <label for="cpf">CPF: </label>
        <input type="cpf" name="cpf" />
        
        <input type="submit" value="Consultar" />
    </form>

    <?php 
    if (isset($_GET["cpf"])){
        
    // definições de host, database, usuário e senha
    $host = "localhost";
    $db   = "hotelXPTO";
    $user = "root";
    $pass = "";
    // conecta ao banco de dados
    $con = mysqli_connect($host, $user, $pass, $db) or trigger_error(mysqli_error($con), E_USER_ERROR);
    // seleciona a base de dados em que vamos trabalhar
    mysqli_select_db($con, $db);
    // cria a instrução SQL que vai selecionar os dados
    $nome = $_GET["nome"];
    $query = sprintf("SELECT * FROM reservas where nomeP ='$nome'");
    // executa a query
    $dados = mysqli_query($con, $query) or die(mysqli_error($con));

    foreach ($dados as $linha) {
        echo "<p>ID:$linha[id] - Nome: $linha[nomeP] + - Sexo: $linha[sexoP]</p>";
        echo "<ul>";
        echo "<li> Email: $linha[email]</li>";
        echo "<li> Chegada: $linha[dtChegada]</li>";
        echo "<li> Diárias: $linha[qtdDiaria]</li>";
        echo "<li>Hospedes: $linha[qtdHosp]</li>";
        echo "<li> Mensagem: $linha[mensagem]</li>";
        echo "</ul>";
        echo "</br>";
    }

    //liberando os dados resultantes
    mysqli_free_result($dados);
    // fechando conexão com banco
    mysqli_close($con);
 
    }
    ?>


</body>

</html>