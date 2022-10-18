<?php
$servername = "localhost";
$username = "root";
$passaword = "";
$dbname = "2tia";
$idade = "2";
// Create connection
$conn = new mysqli($servername, $username, $passaword, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT*FROM trabalho";
$result = Mysqli_query($conn,$sql);

if($idade < 35 && $idade >=18){
    //imprimir os registros da tabelas cadastro
    while($row= mysqli_fetch_assoc($result)){
        echo "Idade:".$row["Idade"]. " - Nome:".$row["Nome"]. " Sobrenome:".$row["Sobrenome"]. "<br>" ;
    }
}else{
            echo "nao deu certo a coneção";
            } 
mysqli_close($conn)
?>
