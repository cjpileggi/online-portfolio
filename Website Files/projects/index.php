<?php
/*
* Project Entries
*
*
*/
require_once("../config.php");

require_once("../dbConfig.php");
$result = $db->queryRes("SELECT * FROM project_entry WHERE disabled <> 1 ORDER BY create_date DESC");
$rCnt = count($result);

$title = "Projects | " . NAME_TITLE;
require_once("../header.php");

$headOpac = true;
?>
<div id="page-head" class="page-head--sub">
  <div class="center">
    <h1>Projects</h1>
  </div>
</div>

<div class="sect"><!--begin project entries-->
  <div class="container">
    <div id="pEuler">
      <img src="https://projecteuler.net/profile/cpileggi.png" alt="Project Euler Progress" />
    </div>

    <div class="entry__row entry__row--last">
      <?php for ($i = 0; $i < $rCnt; $i++)
      { ?>
        <div class="entry__item">
          <a href="<?php echo $result[$i]['slug']; ?>">
            <div class="entry__img"><img src="<?= IMAGES_PATH . $result[$i]['img']; ?>" alt="" /></div>
            <h3><?php echo $result[$i]['name']; ?></h3>
            <p><?php echo $result[$i]['blurb']; ?></p>
          </a>
        </div>
      <?php } ?>
    </div>
  </div>
</div><!--end project entries-->

<?php include "../footer.php";?>
