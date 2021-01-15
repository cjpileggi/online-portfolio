<?php
$title = "Chris Pileggi - Blog";
include "../header.php";


// PDO
$pdo = new PDO("mysql:host=localhost;dbname=portfolio_main", 'root', '');

$params = array(':slug' => $_GET['slug']);

$sth = $pdo->prepare('
    SELECT * FROM blog_entry
    WHERE slug = :slug
    ');

$sth->execute($params);

$result = $sth->fetchAll();


?>

<div class="contain">
  <div class="head-contain"><h1><?php echo $result[0]['title'] ?></h1></div>

    <div class="date-time-cont" ><time datetime="<?php echo date_create($result[0]["date"])->format('Y-m-d H:i:s') ?>"><span class="date-time"><?php echo date_create($result[0]["date"])->format('F d, Y'); ?></span></time></div>
    <p class="blurb"><?= $result[0]['blurb'] ?></p>
    <img src="../img/<?= $result[0]['img'] ?>" alt="" />
    <div class="body-contain">
      <?php echo $result[0]['body'] ?>
</div>
    </div>
</div>


<?php include "../footer.php";?>
