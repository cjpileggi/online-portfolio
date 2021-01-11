
<?php
$title = "Chris Pileggi";
include "header.php";
$headOpac = true;


// PDO
$pdo = new PDO("mysql:host=localhost;dbname=portfolio_main", 'root', '');
$sth = $pdo->prepare('
    SELECT * FROM project_entry ORDER BY create_date LIMIT 3
    ');

$sth->execute();

$result = $sth->fetchAll();

$sth = $pdo->prepare('
    SELECT * FROM blog_entry ORDER BY date LIMIT 3
    ');

$sth->execute();

$result2 = $sth->fetchAll();



?>
<div id="headBG">
  <div id="overlay"></div>
  <div class="center">
    <h1>Christopher Pileggi</h1>
    <p><span>Full Stack Developer</span><span>Data Scientist</span></p>
    <ul id="social-links">
    <li><a href="https://github.com/cjpileggi" target="_blank"><i class="fab fa-github"></i></a></li>
    <li><a href="https://www.linkedin.com/in/pileggichristopher/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
    <li><a href="https://twitter.com/pileggiChris" target="_blank"><i class="fab fa-twitter"></i></a></li>
    <li><a href="https://instagram.com/chrispileggi314" target="_blank"><i class="fab fa-instagram"></i></a></li>
  </ul>
  </div>
</div>

  <div class="sect">
    <div class="container">
    <h2 class="land-sec">
      Projects
    </h2>
    <div class="item-row">
      <?php for ($i = 0; $i < count($result); $i++)
      {?>

        <div class="item-item">
          <a href="entry.php?slug=<?php echo $result[$i]['slug']; ?>">
          <div class="item-img"><img src="../img/<?php echo $result[$i]['img']; ?>" alt="" /></div>
          <h3><?php echo $result[$i]['name']; ?></h3>
          <p><?php echo $result[$i]['blurb']; ?></p>
            </a>
        </div>

    <?php } ?>
    </div>
  <div class="item-row item-row-last">
    <div class="item-item">
      <h3>Heylpk</h3>
    </div>
    <div class="item-item">
      <h3>Heylpk</h3>
    </div>
  </div>
</div>
</div>


<div class="sect  grey-bg">
  <div class="container">
  <h2 class="land-sec">
    Blog
  </h2>
  <div class="item-row">
    <?php for ($i = 0; $i < count($result2); $i++)
    {?>

      <div class="item-item">
        <a href="entry.php?slug=<?php echo $result2[$i]['slug']; ?>">
        <div class="item-img"><img src="../img/<?php echo $result2[$i]['img']; ?>" alt="" /></div>
        <h3><?php echo $result2[$i]['title']; ?></h3>
        <p><?php echo $result2[$i]['blurb']; ?></p>
          </a>
      </div>

  <?php } ?>
  </div>
</div>
  </div>



<?php include "footer.php";
/*	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/dashboard/');
	exit;*/
?>
