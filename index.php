<?php
  /*
  * Landing Page
  *
  */

  include_once "dbConfig.php";
  $title = "Chris Pileggi";
  include "header.php";
  $headOpac = true;

  $result = $db->queryRes("SELECT * FROM project_entry WHERE disabled <> 1 ORDER BY create_date DESC LIMIT 3");
  $result2 = $db->queryRes("SELECT * FROM blog_entry ORDER BY date DESC LIMIT 3");
?>

<div id="page-head"><!--beginning of landing page title-->
  <div id="page-head__overlay"></div>
  <div class="center">
    <h1>Christopher Pileggi</h1>
    <p><span>Full Stack Developer</span><span>Data Scientist</span></p>
    <ul id="page-head__social-links">
      <li><a href="https://github.com/cjpileggi" target="_blank"><i class="fab fa-github"></i></a></li>
      <li><a href="https://www.linkedin.com/in/pileggichristopher/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
      <li><a href="https://twitter.com/pileggiChris" target="_blank"><i class="fab fa-twitter"></i></a></li>
      <li><a href="https://instagram.com/cpileggi314" target="_blank"><i class="fab fa-instagram"></i></a></li>
    </ul>
  </div>
</div><!--end of landing page title-->

<div class="sect"><!--beginning of project section-->
  <div class="container">
    <h2 class="sect__header">
      Projects
    </h2>
    <div class="entry__row entry__row--last">
      <?php 
      // Project Entries
      for ($i = 0; $i < count($result); $i++)
      {?>
        <div class="entry__item">
          <a href="projects/entry.php?slug=<?php echo $result[$i]['slug']; ?>">
            <div class="entry__img"><img src="../img/<?php echo $result[$i]['img']; ?>" alt="" /></div>
            <h3><?php echo $result[$i]['name']; ?></h3>
            <p><?php echo $result[$i]['blurb']; ?></p>
          </a>
        </div>
      <?php } ?>
    </div>
  </div>
</div><!--end of project section-->


<div class="sect grey-bg"><!--beginning of blog section-->
  <div class="container">
    <h2 class="sect__header">
      Blog
    </h2>
    <div class="entry__row entry__row--last">
      <?php
        // Blog Entries
        for ($i = 0; $i < count($result2); $i++)
        {?>
        <div class="entry__item">
          <a href="blog/entry.php?slug=<?php echo $result2[$i]['slug']; ?>">
          <div class="entry__img"><img src="../img/<?php echo $result2[$i]['img']; ?>" alt="" /></div>
          <h3><?php echo $result2[$i]['title']; ?></h3>
          <p><?php echo $result2[$i]['blurb']; ?></p>
        </a>
        </div>
      <?php } ?>
    </div>
  </div>
</div><!--end of blog section-->

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
