<?php 

  require('config.php');

  // ler query do parametro do User query params

  if (isset($_GET["id"])) {
    $userid = mysqli_real_escape_string($connection, $_GET["id"]);
  }
  else {
    die("User id not found");
  };

  $query = "SELECT name, email, avatar, address_name, address_nr, address_postal_code, address_country
  FROM user
  WHERE iduser = $userid";

  $results = mysqli_query($connection, $query);

  if (mysqli_num_rows($results) > 0) {
    $currentUser = mysqli_fetch_assoc($results);
    $query = "SELECT name, email, avatar, address_name, address_nr, address_postal_code, address_country
    FROM user
    WHERE iduser = $userid";
    $avatar = $currentUser["avatar"] == null ? './images/profiles/default.png' : $currentUser["avatar"];
  }
  else {
    die("User does not exist");
  }

// isset e usado para quando o parametro nao existe na base de dados

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
  <img src="" alt="">
  <div class='container'>
    <div class="row">
      <div class="col"></div>
      <div class="col-12 col-lg-6">

        <div class="card text-center">
          <img src="<?php echo $avatar; ?>" class="card-img-top mx-auto img-thumbnail rounded-circle " alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $currentUser["name"]; ?></h5>
            <p class="card-text"><?php echo $currentUser["email"]; ?></p>
          </div>
          <ul class="list-group list-group-flush">
             <li class="list-group-item"><?php echo $currentUser["address_name"] . " " . $currentUser["address_nr"]; ?></li>
             <li class="list-group-item"><?php echo $currentUser["address_postal_code"] . " " . $currentUser["address_country"]; ?></li>
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