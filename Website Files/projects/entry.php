<?php
/*
* Project Entry Details
*
*
*/
require_once("../config.php");

require_once("../dbConfig.php");
$result = $db->queryRes("SELECT * FROM project_entry WHERE slug = :slug", array(':slug' => $_GET['slug']));

$title = $result[0]['name'] . " | Projects | " . NAME_TITLE;
require_once("../header.php");
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
        <div id="proj-git-ico"><a href="<?= SOCIAL_GITHUB . $result[0]['github'] ?>" target="_blank"><i class="fab fa-github"></i></a></div>
        <a href="<?= SOCIAL_GITHUB . $result[0]['github'] ?>" target="_blank"><span><?= SOCIAL_GITHUB_USER ?>/<?= $result[0]['github'] ?></span></a>
      </div>
    <?php } ?>
    <?php echo $result[0]['body'] ?>
  </div>
</div><!--end project entry-->

<?php include "../footer.php";?>