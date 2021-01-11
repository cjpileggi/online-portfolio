<?php
$title = "Chris Pileggi - Projects";
include "../header.php";


// PDO
$pdo = new PDO("mysql:host=localhost;dbname=portfolio_main", 'root', '');

$params = array(':slug' => $_GET['slug']);

$sth = $pdo->prepare('
    SELECT * FROM project_entry
    WHERE slug = :slug
    ');

$sth->execute($params);

$result = $sth->fetchAll();


?>

<div class="contain">
  <div class="head-contain"><h1><?php echo $result[0]['name'] ?></h1></div>

  <p class="blurb"><?php echo $result[0]['blurb'] ?></p>
    <img src="../img/<?php echo $result[0]['img'] ?>" alt="" />
    <div class="body-contain">
      <?php echo $result[0]['body'] ?>
</div>
    </div>
</div>


<?php include "../footer.php";?>
