<?php
/*
* Project Entry Details
*
*
*/
$title = "Projects | " . NAME_TITLE;
include "../header.php";
include_once "../dbConfig.php";

$result = $db->queryRes("SELECT * FROM project_entry WHERE slug = :slug", array(':slug' => $_GET['slug']));
?>

<div class="entry-detail"><!--begin project entry-->
  <div class="entry-detail__head">
    <h1>
      <?php echo $result[0]['name'] ?>
    </h1>
  </div>
  <p class="blurb"><?php echo $result[0]['blurb'] ?></p>
  <img src="<?= IMAGES_PATH . $result[0]['img'] ?>" alt="" />
  <div class="entry-detail__body">
    <?php if($result[0]['github'] != "") { ?>
      <div id="proj-git">
        <div id="proj-git-ico"><a href="https://github.com/cjpileggi/<?= $result[0]['github'] ?>" target="_blank"><i class="fab fa-github"></i></a></div>
        <a href="https://github.com/cjpileggi/<?= $result[0]['github'] ?>" target="_blank"><span>cjpileggi/<?= $result[0]['github'] ?></span></a>
      </div>
    <?php } ?>
    <?php echo $result[0]['body'] ?>
  </div>
</div><!--end project entry-->

<?php include "../footer.php";?>