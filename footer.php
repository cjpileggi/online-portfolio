  <footer id="footer">
    <div id="footer__inner"><!--begin footer-->
      <div id="cpy-rt">
        &#169; Copyright <?= date("Y"); ?> - Chris Pileggi
      </div>
      <div>
        <ul id="footer__social-links">
          <li><a href="https://github.com/cjpileggi" target="_blank"><i class="fab fa-github"></i></a></li>
          <li><a href="https://www.linkedin.com/in/pileggichristopher/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
          <li><a href="https://twitter.com/pileggiChris" target="_blank"><i class="fab fa-twitter"></i></a></li>
          <li><a href="https://instagram.com/cpileggi314" target="_blank"><i class="fab fa-instagram"></i></a></li>
        </ul>
      </div>
    </div><!--end footer-->
  </footer>
</body>
<script>
<?php
/* Make header transparent when scrolled to the top of page */
if ($headOpac) { ?>
  //document.getElementById("header").classList.add("opac");
  //window.onload = function() {myFunction()};
  window.addEventListener("load", headScroll, true);
  window.onscroll = function() {headScroll()};

  // add transparent classname when scrolled on top
  function headScroll() {
    if (document.documentElement.scrollTop === 0) {
      document.getElementById("header").className = "opac";
    } else {
      document.getElementById("header").className = "";
    }
  }
<?php } else { ?>
      document.getElementById("header").className = "";
<?php } ?>

// remove preload
document.getElementsByTagName("body")[0].className = "";

/* Handle closing collapsible navigation */
document.getElementById("col-close").onclick = function() {collapse()};

function collapse() {
  var x = document.getElementById("header-collapse");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

/* Handle opening collapsible navigation */
document.getElementById("c-menu").onclick = function() {expand()};

function expand() {
  var x = document.getElementById("header-collapse");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
//document.getElementById("header-collapse").setAttribute("hidden", "hidden");
</script>
