<?php
$title = "Chris Pileggi - Projects";
include "../header.php";
include_once "../dbConfig.php";

$result = $db->queryRes("SELECT * FROM project_entry
WHERE slug = :slug", array(':slug' => $_GET['slug']));

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
