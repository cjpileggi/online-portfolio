<footer>
  <div id="footer-items">
<div id="cpy-rt">
  &#169; Copyright <?= date("Y"); ?> - Chris Pileggi
</div>
<div>
  <ul id="footer-social-links">
  <li><a href="https://github.com/cjpileggi" target="_blank"><i class="fab fa-github"></i></a></li>
  <li><a href="https://www.linkedin.com/in/pileggichristopher/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
  <li><a href="https://twitter.com/pileggiChris" target="_blank"><i class="fab fa-twitter"></i></a></li>
  <li><a href="https://instagram.com/chrispileggi314" target="_blank"><i class="fab fa-instagram"></i></a></li>
</ul>
</div>
</div>
</footer>
<script>
<?php if ($headOpac) { ?>
  //document.getElementById("site-head").classList.add("opac");
  //window.onload = function() {myFunction()};
  window.addEventListener("load", headScroll, true);
  window.onscroll = function() {headScroll()};

  function headScroll() {
    if (document.documentElement.scrollTop === 0) {
      document.getElementById("site-head").className = "opac";
    } else {
      document.getElementById("site-head").className = "";
    }
  }
<?php } else { ?>
      document.getElementById("site-head").className = "";
<?php } ?>
document.getElementsByTagName("body")[0].className = "";

document.getElementById("col-close").onclick = function() {collapse()};

function collapse() {
  var x = document.getElementById("site-head-col");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

document.getElementById("c-menu").onclick = function() {expand()};

function expand() {
  var x = document.getElementById("site-head-col");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

//document.getElementById("site-head-col").setAttribute("hidden", "hidden");
</script>
