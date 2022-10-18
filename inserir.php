<?php 
$servername = "localhost";
$database = "ava";
$username = "root";
$password = "";

$nome = $_GET['nome']; 
$validade = $_GET['valida']; 
$preco = $_GET['pre']; 
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

$nome = strtolower($nome);
$sql = "INSERT INTO loja (id, nome, validade, preco) VALUES ('', '$nome' ,'$validade','$preco' )";

        if($nome != "laranja" & $nome !="goiaba"& $nome!="pera"& $nome!="maça" & $nome !="mexirica" & $nome!= "melão" & $nome!= "abacate" & $nome!= "abacaxi" & $nome!="acerola" & $nome!= "amora" & $nome!="toamte" & $nome!="alface" & $nome!= "pepino" & $nome!= "uva"& $nome!= "morango"& $nome!= "pêssego"& $nome!= "romã"& $nome!= "coco"& $nome!= "caju"& $nome!= "damasco"& $nome!= "figo"& $nome!= "lichia"& $nome!= "cereja"& $nome!= "tâmara"& $nome!= "pitaia"& $nome!= "limão"& $nome!= "brócolis"& $nome!= "cenoura"& $nome!= "batata"& $nome!= "espinafre"& $nome!= "coentro"& $nome!= "ervilha"& $nome!= "cogumelo"& $nome!= "erva-doce"& $nome!= "mandioca"& $nome!= "abóbora"& $nome!= "palmito"& $nome!= "rabanete"& $nome!= "inhame"& $nome!= "milho"& $nome!= "couve"& $nome!= "berinjela"& $nome!= "abobrinha"& $nome!= "hortelã"& $nome!= "gengibre"& $nome!= "cebolinha"& $nome!= "cebola"){
            echo"Nome errado";
        }
        else{
        if (mysqli_query($conn, $sql)) {
              echo "<br>Inserido com SUCESSO!<br>";
        } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }}
 ?>