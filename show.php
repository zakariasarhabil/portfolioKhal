<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- css style -->
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<!--/ Intro Single End /-->

<!--/ Property Single Star /-->
<?php
    
    $s = $_GET['projet'];


    require "dashbord/database.php";


$db = Database::connect();
$sql = "SELECT *  FROM projets WHERE id = $s";
$stmt = $db->query($sql);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
Database::disconnect();
    // $c = "nomprojet";
    // $m = 'description';

    ?>

    <?php foreach ($rows as $row) : ?>


<!-- Card -->
<div class="card card-cascade wider reverse">

  <!-- Card image -->
  <div class="view view-cascade overlay">
    <img class="card-img-top" src="dashbord/img/<?= $row['imgprojet'] ?>"
    alt="'<?= $row['nomprojet'] ?>'">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body card-body-cascade text-center">

    <!-- Title -->
    <h4 class="card-title"><strong> <?= $row['nomprojet'] ?></strong></h4>
    <!-- Subtitle -->
    <h6 class="font-weight-bold indigo-text py-2"> <?= $row['techno'] ?></h6>
    <!-- Text -->
    <p class="card-text"> <?= $row['description'] ?>
    </p>

    <!-- Linkedin -->
    <a href=" <?= $row['git'] ?>" class="px-2 fa-lg li-ic"><i class="fab fa-github"></i></a>
    <!-- Twitter -->
    
    <!-- Dribbble -->
    

  </div>

</div>
<!-- Card -->












<?php endforeach; ?>



   
      
<!--/ Property Single End /-->
