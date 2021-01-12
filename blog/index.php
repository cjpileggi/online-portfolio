<?php
$title = "Chris Pileggi - Blog";
include "../header.php";
$headOpac = true;

// PDO
$pdo = new PDO("mysql:host=localhost;dbname=portfolio_main", 'root', '');
$sth = $pdo->prepare('
    SELECT * FROM blog_entry ORDER BY date
    ');

$sth->execute();

$result = $sth->fetchAll();

$rCnt = count($result);
?>
<div id="headBG" class="headBG-sub">
  <div class="center">
    <h1>Blog</h1>
  </div>
</div>

<div class="sect">
  <div class="container">
    <div class="item-row item-row-last">
    <?php for ($i = 0; $i < $rCnt; $i++)
    { ?>

      <div class="item-item">
        <a href="entry.php?slug=<?php echo $result[$i]['slug']; ?>">
        <div class="item-img"><img src="../img/<?php echo $result[$i]['img']; ?>" alt="" /></div>
        <h3><?php echo $result[$i]['title']; ?></h3>
        <p><?php echo $result[$i]['blurb']; ?></p>
          </a>
      </div>

      <?php } ?>
      </div>

</div>
</div>

<?php include "../footer.php";?>
