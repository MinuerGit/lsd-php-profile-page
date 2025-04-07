<?php $userName = "Carlos Pablo";

// array asscociativo de 3 users

$users = array(
  array("name" => "Pablo", "email" => "Pablothehorse@gmail.com", "adress" => "Rua dos Cavalos Espanhois 130 4º Drt", "postal" => "243-17"),
  array("name" => "Gustavo", "email" => "Gustamomostarvo@gmail.com", "adress" => "Rua dos Molhos ingleses 320 2º Esq", "postal" => "432-1")
);

$currentUser = $users[1];
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <title>User Profile</title>

  <style type="text/css">
    .card-img-top {
      object-fit: cover;
      width: 200px;
      height: 200px;

    }
  </style>

</head>

<body>
  <div class='container'>
    <div class="row">
      <div class="col"></div>
      <div class="col-12 col-lg-6">

        <div class="card text-center">
          <img src="./images/profiles/10.jpg" class="card-img-top mx-auto img-thumbnail rounded-circle " alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $currentUser["name"] ?></h5>
            <p class="card-text"><?php echo $currentUser["email"] ?></p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><?php echo $currentUser["adress"] ?></li>
            <li class="list-group-item"><?php echo $currentUser["postal"] ?></li>
          </ul>
          <div class="card-body">
            <a href="#" class="card-link">Close</a>
            <a href="#" class="card-link">Edit</a>
          </div>
        </div>

      </div>
      <div class="col"></div>

    </div>
  </div>






  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>