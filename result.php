<?php
  include "connection.php";
?>
<html>
<head>
  <title>HangApp-Result</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/application.css">
</head>
<body>
  <?php
    include 'header.php';
  ?>

  <div class="result">
    Resultado da Pesquisa:
    <?php
      $search=$_GET['search'];
      $query = "SELECT * FROM videos WHERE name LIKE '%".$search."%'";
      $sql = mysqli_query($connection ,$query);

          while ($linha = mysqli_fetch_array($sql)) {
            $nome = $linha['name'];
            $tipo = $linha['category'];
            $url  = $linha['url'];
            ?>
            <div class="video">
              <iframe width="350" height="270" src="<?php echo $url ?>" frameborder="0" allowfullscreen></iframe>
              <p> <?php echo $nome ?></p>
            </div>
            <?php
          }
     ?>
  </div>

  <?php
    include 'footer.php';
  ?>
</body>
</html>