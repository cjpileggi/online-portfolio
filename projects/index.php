<?php
$title = "Chris Pileggi - Projects";
include "../header.php";
$headOpac = true;

// PDO
$pdo = new PDO("mysql:host=localhost;dbname=portfolio_main", 'root', '');
$sth = $pdo->prepare('
    SELECT * FROM project_entry ORDER BY create_date
    ');

$sth->execute();

$result = $sth->fetchAll();

$rCnt = count($result);
?>
<div id="headBG" class="headBG-sub">
  <div class="center">
    <h1>Projects</h1>
  </div>
</div>

<div class="sect">
  <div class="container">
  <?php
  $rNum = 0;
  for ($i = 1; $i <= floor($rCnt/3); $i++)
  {?>
  <div class="item-row">
  <?php for ($j = 1; $j <= 3; $j++)
  {?>

    <div class="item-item">
      <a href="entry.php?slug=<?php echo $result[$rNum]['slug']; ?>">
      <div class="item-img"><img src="../img/<?php echo $result[$rNum]['img']; ?>" alt="" /></div>
      <h3><?php echo $result[$rNum]['name']; ?></h3>
      <p><?php echo $result[$rNum]['blurb']; ?></p>
        </a>
    </div>

<?php $rNum++; } }?>
</div>
<?php if ($rCnt % 3 > 0) { ?>
<div class="item-row item-row-last">
<?php for ($i = $rCnt - ($rCnt % 3); $i < $rCnt; $i++) { ?>
  <div class="item-item">
    <a href="entry.php?slug=<?php echo $result[$rNum]['slug']; ?>">
    <div class="item-img"><img src="../img/<?php echo $result[$rNum]['img']; ?>" alt="" /></div>
    <h3><?php echo $result[$rNum]['name']; ?></h3>
    <p><?php echo $result[$rNum]['blurb']; ?></p>
      </a>
  </div>
<?php $rNum++; } ?>
</div>
<?php } ?>
</div>
</div>

<?php include "../footer.php";?>
