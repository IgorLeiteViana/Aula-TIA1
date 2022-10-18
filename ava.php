<?php 
$servername = "localhost";
$database = "ava";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 

$va = $_GET["a"];

switch ($va) {
    case "Inserir":?><head>
        <style type="text/css">
       /*#n{
            }*/
        </style>
    </head>
        <form method="get" action="inserir.php">
            Nome:<input type="text" name="nome" placeholder="Digite o nome o produto aqui" required="">
            Validade:<input type="text" name="valida" placeholder="Digite a validade">
            Preco:<input type="text" name="pre" placeholder="Digite o preço">
            <input type="submit" name="enviar" value="Inserir">
        </form>
        <a href="loja.html"><input type="button" value="Nenhuma Ação" name="a" id="n"></a>

       <?php 
      break;

    case "Visualizar":?>              
    
      <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    </head>
    <table class="table table-striped">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nome</th>
          <th scope="col">Preço</th>
          <th scope="col">Validade</th>           
        </tr>
      </thead>
      <tbody>
    </html>
        <?php
        $sql = "SELECT id, nome, validade, preco FROM loja";
    $result = mysqli_query($conn,$sql);


    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<th scope='row'>". $row['id']."</th>";
          echo "<td>". $row['nome']."</td>";
          echo "<td>"."R$ ". $row['preco']."</td>";
          echo "<td>". $row['validade']."</td>";
          echo "</tr>";  
        }
      } else {
        echo "0 results";
      }
      mysqli_close($conn);  
      break;

    default:
      break;
  }
  ?>
     </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>

