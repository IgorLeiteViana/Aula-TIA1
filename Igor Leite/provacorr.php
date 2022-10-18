<?php 
$servername = "localhost";
$username = "root";
$passaword = "";
$dbname = "2tia";//nome do Banco de Dados
$idade = "18";//variavel para a condição

// Criando a conexão
$conn = new mysqli($servername, $username, $passaword, $dbname);
// verificando connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//adicionando a condição do exercicio da prova
if($idade >= 18 && $idade <=35){
    $sql = "SELECT*FROM trabalho";
    $result = Mysqli_query($conn,$sql);
    
    while($row= mysqli_fetch_assoc($result)){
        echo "Idade:".$row["Idade"]. " - Nome:".$row["Nome"]. " Sobrenome:".$row["Sobrenome"]. "<br>" ;
    }
}else{
     echo "não podemos mostram a voce";
} 

?>