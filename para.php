<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "2tib";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "select * from cadastro";
$result = mysqli_query($conn, $sql);

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    

    <!-- <h1>Hello, world!</h1> -->

    <table class="table">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nome</th>
          <th scope="col">Idade</th>
          <th scope="col">Curso</th>
        </tr>
      </thead>
      <tbody>
      <nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">Navbar</a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
      <?php 
      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
          // echo "id: " . $row["idAluno"]. " - Name: " . $row["nome"]. " " . $row["idade"]. "<br>";
          echo "<tr>";
          echo "<th scope='row'>". $row['id']."</th>";
          echo "<td>". $row['Nome']."</td>";
          echo "<td>". $row['email']."</td>";
          echo "<td>". $row['curso']."</td>";
          echo "</tr>";
        }
      } else {
        echo "0 results";
      }
      mysqli_close($conn);
      ?>
      </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>