<?php
/*
* Blog Entries
*
*
*
*/
include_once "../dbConfig.php";
$title = "Blog | " . NAME_TITLE;
include "../header.php";
$headOpac = true;

$result = $db->queryRes("SELECT * FROM blog_entry ORDER BY date DESC");

$rCnt = count($result);
?>
<div id="page-head" class="page-head--sub">
  <div class="center">
    <h1>Blog</h1>
  </div>
</div>

<div class="sect"><!--begin blog entries-->
  <div class="container">
    <div class="entry__row entry__row--last">
      <?php for ($i = 0; $i < $rCnt; $i++)
      { ?>
        <div class="entry__item">
          <a href="entry.php?slug=<?php echo $result[$i]['slug']; ?>">
            <div class="entry__img"><img src=<?= IMAGES_PATH .  $result[$i]['img']; ?>" alt="" /></div>
            <h3><?php echo $result[$i]['title']; ?></h3>
            <p><?php echo $result[$i]['blurb']; ?></p>
          </a>
        </div>
      <?php } ?>
    </div>
  </div>
</div><!--end blog entries-->

<?php include "../footer.php";?>
