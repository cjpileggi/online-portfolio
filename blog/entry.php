<?php
/*
* Blog Entry Details
*
*
*/
$title = "Blog | " . NAME_TITLE;
include "../header.php";
include_once "../dbConfig.php";

$result = $db->queryRes("SELECT * FROM blog_entry WHERE slug = :slug", array(':slug' => $_GET['slug']));
?>

<div class="entry-detail"><!--begin blog entry detail-->
  <div class="entry-detail__head">
    <h1>
      <?php echo $result[0]['title'] ?>
    </h1>
  </div>
  <div class="date-time-cont" >
    <time datetime="<?php echo date_create($result[0]["date"])->format('Y-m-d H:i:s') ?>">
      <span class="date-time"><?php echo date_create($result[0]["date"])->format('F d, Y'); ?></span>
    </time>
  </div>
  <p class="blurb"><?= $result[0]['blurb'] ?></p>
  <img src=<?= IMAGES_PATH . $result[0]['img'] ?>" alt="" />
  <div class="entry-detail__body">
    <?php echo $result[0]['body'] ?>
  </div>
</div><!--end blog entry detail-->

<?php include "../footer.php";?>