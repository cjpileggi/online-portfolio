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
    <?php if($result[0]['github'] != "") { ?>
      <div id="proj-git">
        <div id="proj-git-ico"><a href="https://github.com/cjpileggi/<?= $result[0]['github'] ?>" target="_blank"><i class="fab fa-github"></i></a></div>
        <a href="https://github.com/cjpileggi/<?= $result[0]['github'] ?>" target="_blank"><span>cjpileggi/<?= $result[0]['github'] ?></span></a>
      </div>
    <?php } ?>
      <?php echo $result[0]['body'] ?>
</div>
    </div>
</div>


<?php include "../footer.php";?>
