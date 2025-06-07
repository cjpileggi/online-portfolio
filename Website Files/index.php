<?php
  /*
  * Landing Page
  *
  */
  
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
  require_once("config.php");
  
  require_once("dbConfig.php");
  $result = $db->queryRes("SELECT * FROM project_entry WHERE disabled <> 1 ORDER BY create_date DESC LIMIT 3");
  $result2 = $db->queryRes("SELECT * FROM blog_entry ORDER BY date DESC LIMIT 3");

  $title = NAME_TITLE . " | " . NAME_TITLE_2;
  $meta_descr = META_DESCR_HOME;
  require_once("header.php");

  $headOpac = true;

?>

<div id="page-head"><!--beginning of landing page title-->
  <div id="page-head__overlay"></div>
  <div class="center">
    <h1><?= NAME_LANDING ?></h1>
    <p><span>Full Stack Developer</span><span>Data Scientist</span></p>
    <ul id="page-head__social-links">
      <li><a href="<?= SOCIAL_GITHUB ?>" target="_blank"><i class="fab fa-github"></i></a></li>
      <li><a href="<?= SOCIAL_LINKEDIN ?>" target="_blank"><i class="fab fa-linkedin"></i></a></li>
      <li><a href="<?= SOCIAL_TWITTER ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
      <li><a href="<?= SOCIAL_INSTAGRAM ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
    </ul>
  </div>
</div><!--end of landing page title-->

<div class="sect grey-bg"><!--beginning of about paragraph-->
	<div class="container">
    		<!--<h2 class="sect__header">
		About
		</h2> -->
		<div id="about">
			<?php echo ABOUT_PARAGRAPH; ?>
		</div>
	</div>
</div>
<!--end of about paragraph-->

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
          <a href="projects/<?php echo $result[$i]['slug']; ?>">
            <div class="entry__img"><img src="<?= IMAGES_PATH . $result[$i]['img']; ?>" alt="" /></div>
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
          <a href="blog/<?php echo $result2[$i]['slug']; ?>">
          <div class="entry__img"><img src="<?= IMAGES_PATH . $result2[$i]['img']; ?>" alt="" /></div>
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
