<?php
/*
* Blog Entries
*
*
*
*/
require_once("../config.php");

require_once("../dbConfig.php");
$result = $db->queryRes("SELECT * FROM blog_entry ORDER BY date DESC");
$rCnt = count($result);

$title = "Blog | " . NAME_TITLE;
require_once("../header.php");

$headOpac = true;
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
          <a href="<?php echo $result[$i]['slug']; ?>">
            <div class="entry__img"><img src="<?= IMAGES_PATH .  $result[$i]['img']; ?>" alt="" /></div>
            <h3><?php echo $result[$i]['title']; ?></h3>
            <p><?php echo $result[$i]['blurb']; ?></p>
          </a>
        </div>
      <?php } ?>
    </div>
  </div>
</div><!--end blog entries-->

<?php include "../footer.php";?>
