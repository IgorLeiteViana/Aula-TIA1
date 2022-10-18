<?php
$servername ="localhost";
$username ="root";
$passaword ="";

$dbname ="2tia";

//Criando a conexão
$conn = new mysqli($servername, $username,$passaword,$dbname);

//verificando a conexão
if($conn->connect_error){
    die("Conexão falhou:" .$conn->connect_error);
}
$sql = "SELECT * FROM cadastro1";

$result = Mysqli_query($conn,$sql);

if(Mysqli_num_rows($result) >0){
    //imprimir os registros da tabelas cadastro
    while($row= mysqli_fetch_assoc($result)){
        echo "CODICO:".$row["Codigo do Cinema(CNPJ)"]. " - Nome de Fantasia:".$row["Nome de Fantasia"]. " Rua:".$row["Rua"]. "Numero:".$row["Numero"]. " - Bairro:".$row["Bairro"]. " -Cidade:".$row["Cidade"]. "Estado:".$row["Estado"]. " - Lotação:".$row["Lotação"]."<br>" ;  
    }
}else{
    echo "0 results";
}
//echo "Conectado com sucesso";

//Inserindo informaçoes no banco de dados;
$sql ="INSERT INTO cadastro (nome, email,curso)
VALUES ('Josh Astolfo Santos', 'Astolfo@gmail.com','TECMAM da Informação-EM')";

if(mysqli_query($conn,$sql)){
    echo"Novo dado inserido com sucesso";
}else{
    echo"Erro: ".$sql. "<br>". mysqli_error($conn);
}

//deletar informaçoes do banco de dados:
    $sql= "DELETE FROM cadastro WHERE idAluno=3";
    if(mysqli_query($conn,$sql)){
        echo"<br>Deletado com sucesso";
    }else{
        echo"Erro: ".$sql. "<br>". mysqli_error($conn);
    }

mysqli_close($conn)

?>