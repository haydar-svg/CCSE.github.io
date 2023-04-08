<?php
include '../Contact/connexion.php';
$sql = "SELECT * FROM formations";
$stm = $con->prepare($sql);
$stm->execute();
$data=$stm->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../PUBLIC/CSS/Public.css" />
    <link rel="stylesheet" href="../../PUBLIC/FONT/Oswald/Font.css" />
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
  </head>
  <body>
<div class="container-all-formation">
  <?php foreach ($data as $value) { ?>
    <div class="formation-container">
      <div class="image-container">
      <img src="<?php  echo $value['image'] ?>" alt="formation image">
      </div>
      <div class="info-formation-container">
        <div class="formation-title">   <?php  echo $value['title'] ?></div>
        <div class="new-formation">
          <div class="new-button">NEW</div>
          <div class="formation-type"><?php  echo $value['type'] ?></div>
        </div>
        <div class="formation-description">
        <?php  echo $value['description'] ?><?php  echo $value['description'] ?><?php  echo $value['description'] ?>
        </div>
        <a href="inscription?type=<?php echo $value['type'] ?>" class="inscription-button"> Inscription </a>
      </div>
    </div>
    <div class="line-formation"></div>
    <?php  } ?>
</div>
  </body>
</html>
