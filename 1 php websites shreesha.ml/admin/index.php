<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
  header("location:login.php");
  exit;
}
?> 
<link rel="icon" href="../logo.jpg" type="image/icon type">
<link rel="stylesheet" type="text/css" href="./css/styles1.css">
  <?php include('header.php'); ?>
<!-- <div class="header">
  <a href="./index.php" class="logo"><img src="../logo.jpg" alt="shreesha"></a>
  <div class="header-right">
    <a href="../index.php">Home</a>
    <a href="./accounts.php">accounts</a>
    <a href="./profile.php">profile</a>
    <a href="./profilecopy/index.php">profile copy</a>
    <a href="https://vcetputturacin-my.sharepoint.com/:f:/g/personal/fya07_vcetputtur_ac_in/ElXGiKlD8QNMmr-bA53jJL8BHzYgNU-YArbfj4Zep7vK9Q?e=JqE3He">full pc</a>
    <a href="./implinks.php">imp links</a>
    <a href="https://pb82-my.sharepoint.com/:f:/g/personal/3rdsemester_t_5tb_in/EkVM7q7KD-FClJ_B7Xm0vYEBmjm_KtLz10bbCS_MDMK6pw?e=hhba96">onedrive share</a>
    <a href="https://www.shreesha.tk/">shreesha.tk</a>

    <a class="active" href="logout.php">LOGOUT</a>
  </div>
</div> -->

<div style="padding-left:45px">
  
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<ol>
<h3>
<li><a href="#fulllinks">Full links for all</a></li>
<li><a href="#fullpc">Full PC Onedrive</a></li>
<li><a href="#others">others upload songs websites mine ...FULL all others...</a></li>
</h3>
</ol>
<h2 id="fulllinks">Full links <button onclick="sortList('id01')">Sort</button></h2>
<ol id="id01">
<li><a href="./alllinks.php">alllinks</a></li>
<li><a href="https://vccode.pythonanywhere.com/">save note and accounts (python)</a></li>
<li><a href="../manylinks.php">all links for web development</a></li>
<li><a href="https://newtextdocument.com/79b5e58490">saved from browser -1</a></li>
<li><a href="https://newtextdocument.com/18c33621b3">saved from browser -2</a></li>
<li><a href="https://newtextdocument.com/9fe5893698">saved from browser -3</a></li>
</ol>
<br>
<h2 id="fullpc">Full PC <button onclick="sortList('id02')">Sort</button></h2>
<ol id="id02">
<li><a href="https://vcetputturacin-my.sharepoint.com/:f:/g/personal/fya07_vcetputtur_ac_in/ElXGiKlD8QNMmr-bA53jJL8BHzYgNU-YArbfj4Zep7vK9Q?e=JqE3He">full pc</a></li>
<li><a href="https://pb82-my.sharepoint.com/:f:/g/personal/3rdsemester_t_5tb_in/EtEdfYRgVEFMuRbCUMWoCFUBOKLPZAfAo3vRc2Zwhu5t0g?e=fhD3X2">old share fast (onedrive)</a></li>
<li><a href="https://pb82-my.sharepoint.com/:f:/g/personal/3rdsemester_t_5tb_in/EkVM7q7KD-FClJ_B7Xm0vYEBmjm_KtLz10bbCS_MDMK6pw?e=hhba96">large onedrive shares new ondrive</a></li>
<li><a href="https://vcetputturacin-my.sharepoint.com/:f:/g/personal/4vp20ai027_vcetputtur_ac_in/Ek5c0EiUmPJAl7TzLPmEVeABiuYqAlj-fxpliMqZK4z-ig?e=8VeRxM">Profile onedrive</a></li>
</ol>
<br>


<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search">
<br>
<h2 id="others" id="table">FULL all others<button onclick="sortList('id03')">Sort</button></h2>
<ol id="id03">
<h3  id="myUL">
<li><a href="../index.php">Home</a></li>
<li><a href="./watsapnos.php">watsap nos</a></li>
<li><a href="./accounts.php">accounts</a></li>
<li><a href="./profile.php">profile</a></li>
<li><a href="./profilecopy/index.php">profile copy</a></li>
<li><a href="../uploaddown.php">upload & down</a></li>
<li><a href="../learn code/install python and anaconda/index.html">install python and anaconda</a></li>
<li><a href="../learn code/html/index.html">learn html</a></li>
<li><a href="../learn code/css/index.html">learn css</a></li>
<li><a href="../learn code/python/index.html">learn python</a></li>
<li><a href="https://py3.codeskulptor.org/">python online best compiler</a></li>
<li><a href="../cprograms.php">C programs (3rd sem)</a></li>
<li><a href="https://vcfyalab.wordpress.com/">1st year lab programs</a></li>
<li><a href="../assets/songs.html">songs website links</a></li>
<li><a href="../3rdsem.php">3rd semester all videos</a></li>
<li><a href="../gallary/index.php">Gallary</a></li>
<li><a href="../Online_feedback/index.php">Contact & feedback</a></li>
<li><a href="../uploaddown.php">upload && download</a></li>
<li><a href="../photoeditor/index.html">photo editor</a></li>
<li><a href="../all year videos.php">all year engineering videos </a></li>
<li><a href="../code and learn.php">coding online and learning website links</a></li>
<li><a href="https://sites.google.com/view/other-1">other old website link</a></li>
<li><a href="./alllinks.php">alllinks</a></li>
<li><a href="https://vccode.pythonanywhere.com/">save note and accounts (python)</a></li>
<li><a href="../manylinks.php">all links for web development</a></li>
<li><a href="https://newtextdocument.com/79b5e58490">saved from browser -1</a></li>
<li><a href="https://newtextdocument.com/18c33621b3">saved from browser -2</a></li>
<li><a href="https://newtextdocument.com/9fe5893698">saved from browser -3</a></li>
<li><a href="https://vcetputturacin-my.sharepoint.com/:f:/g/personal/fya07_vcetputtur_ac_in/ElXGiKlD8QNMmr-bA53jJL8BHzYgNU-YArbfj4Zep7vK9Q?e=JqE3He">full pc</a></li>
<li><a href="https://pb82-my.sharepoint.com/:f:/g/personal/3rdsemester_t_5tb_in/EtEdfYRgVEFMuRbCUMWoCFUBOKLPZAfAo3vRc2Zwhu5t0g?e=fhD3X2">old share fast (onedrive)</a></li>
<li><a href="https://pb82-my.sharepoint.com/:f:/g/personal/3rdsemester_t_5tb_in/EkVM7q7KD-FClJ_B7Xm0vYEBmjm_KtLz10bbCS_MDMK6pw?e=hhba96">large onedrive shares new ondrive</a></li>
<li><a href="https://vcetputturacin-my.sharepoint.com/:f:/g/personal/4vp20ai027_vcetputtur_ac_in/Ek5c0EiUmPJAl7TzLPmEVeABiuYqAlj-fxpliMqZK4z-ig?e=8VeRxM">Profile onedrive</a></li>
<li><a href="../other/ball not fall down game/index.html">ball not fall down game</a></li>
<li><a href="../other/memory-cards/index.html">memory-cards</a></li>
<li><a href="../other/typing-game/index.html">typing-game</a></li>
<li><a href="../other/new-year-countdown/index.html">new-year-countdown</a></li>
<li><a href="../other/speech-text-reader/index.html">speech-text-reader</a></li>
</ol>
</h3>
<br>
<!-- <h2 id="fullpc">Full PC <button onclick="sortList('id01')">Sort</button></h2>
<pre><ol id="id01">
<li></li>
<li></li>
</ol></pre>
<br>
<br><br> -->
</div>

<script>
function sortList(clicked_id) {
  var list, i, switching, b, shouldSwitch;
  list = document.getElementById(clicked_id);
  switching = true;
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // start by saying: no switching is done:
    switching = false;
    b = list.getElementsByTagName("LI");
    // Loop through all list-items:
    for (i = 0; i < (b.length - 1); i++) {
      // start by saying there should be no switching:
      shouldSwitch = false;
      /* check if the next item should
      switch place with the current item: */
      if (b[i].innerHTML.toLowerCase() > b[i + 1].innerHTML.toLowerCase()) {
        /* if next item is alphabetically
        lower than current item, mark as a switch
        and break the loop: */
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark the switch as done: */
      b[i].parentNode.insertBefore(b[i + 1], b[i]);
      switching = true;
    }
  }
}

//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

</script>
<script>
function myFunction() {
  // Declare variables
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById('myInput');
  filter = input.value.toUpperCase();
  ul = document.getElementById("myUL");
  li = ul.getElementsByTagName('li');

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>
<style>
/*body {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
}*/

#myBtn {
  display: none;
  position: fixed;
  bottom: 10px;
  right: 20px;
  z-index: 99;
  font-size: 10px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 10px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
h1{
padding-left: 60px;
}
h2{
padding-left: 60px;
}

#myInput {
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 100%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}

#myUL {
  /* Remove default list styling */
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd; /* Add a border to all links */
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6; /* Grey background color */
  padding: 8px; /* Add some padding */
  text-decoration: none; /* Remove default text underline */
  font-size: 18px; /* Increase the font-size */
  color: black; /* Add a black text color */
  display: block; /* Make it into a block element to fill the whole list */
}

#myUL li a:hover:not(.header) {
  background-color: #eee; /* Add a hover effect to all links, except for headers */
}
</style>


















<!--
<link rel="icon" href="../logo.jpg" type="image/icon type">
<link rel="stylesheet" type="text/css" href="./css/styles1.css">
  <?php// include('header.php'); ?>-->
<!-- <div class="header">
  <a href="./index.php" class="logo"><img src="../logo.jpg" alt="shreesha"></a>
  <div class="header-right">
    <a href="../index.php">Home</a>
    <a href="./accounts.php">accounts</a>
    <a href="./profile.php">profile</a>
    <a href="./profilecopy/index.php">profile copy</a>
    <a href="https://vcetputturacin-my.sharepoint.com/:f:/g/personal/fya07_vcetputtur_ac_in/ElXGiKlD8QNMmr-bA53jJL8BHzYgNU-YArbfj4Zep7vK9Q?e=JqE3He">full pc</a>
    <a href="./implinks.php">imp links</a>
    <a href="https://pb82-my.sharepoint.com/:f:/g/personal/3rdsemester_t_5tb_in/EkVM7q7KD-FClJ_B7Xm0vYEBmjm_KtLz10bbCS_MDMK6pw?e=hhba96">onedrive share</a>
    <a href="https://www.shreesha.tk/">shreesha.tk</a>

    <a class="active" href="logout.php">LOGOUT</a>
  </div>
</div>

<div style="padding-left:45px">
  <h2>
<br><a href="./alllinks.php">all links combined (advanced)</a>
<br><a href="../manylinks.php">links for web development</a>
<br><a href="https://vccode.pythonanywhere.com/">save note and accounts (python)</a>
<br><a href="https://pb82-my.sharepoint.com/:f:/g/personal/3rdsemester_t_5tb_in/EtEdfYRgVEFMuRbCUMWoCFUBOKLPZAfAo3vRc2Zwhu5t0g?e=fhD3X2">old share fast (onedrive)</a>
<br><a href="https://newtextdocument.com/79b5e58490">saved from browser</a>
<br><a href="https://newtextdocument.com/18c33621b3">for saving links</a>
<br>
  <br><a href="../index.php">Home</a>
  <br><a href="https://vcetputturacin-my.sharepoint.com/:f:/g/personal/fya07_vcetputtur_ac_in/ElXGiKlD8QNMmr-bA53jJL8BHzYgNU-YArbfj4Zep7vK9Q?e=JqE3He">full pc</a>
  <br><a href="./watsapnos.php">watsap nos</a>
  <br><a href="./accounts.php">accounts</a>
  <br><a href="./profile.php">profile</a>
  <br><a href="./profilecopy/index.php">profile copy</a>
  <br><a href="../uploaddown.php">upload & down</a>
  <br><a href="https://pb82-my.sharepoint.com/:f:/g/personal/3rdsemester_t_5tb_in/EkVM7q7KD-FClJ_B7Xm0vYEBmjm_KtLz10bbCS_MDMK6pw?e=hhba96">large onedrive shares</a>
  <br><a href="https://vcetputturacin-my.sharepoint.com/:f:/g/personal/4vp20ai027_vcetputtur_ac_in/Ek5c0EiUmPJAl7TzLPmEVeABiuYqAlj-fxpliMqZK4z-ig?e=8VeRxM">Profile onedrive</a>
  <br>
<h2>
<ul style="padding-left:80px;">
<li><a href="../learn code/install python and anaconda/index.html">install python and anaconda</a></li>
<li><a href="../learn code/html/index.html">learn html</a></li>
<li><a href="../learn code/css/index.html">learn css</a></li>
<li><a href="../learn code/python/index.html">learn python</a></li>
<li><a href="https://py3.codeskulptor.org/">python online best compiler</a></li>
<li><a href="../cprograms.php">C programs (3rd sem)</a></li>
<li><a href="https://vcfyalab.wordpress.com/">1st year lab programs</a></li>
<li><a href="../assets/songs.html">songs website links</a></li>
<li><a href="../3rdsem.php">3rd semester all videos</a></li>
<li><a href="../gallary/index.php">Gallary</a></li>
<li><a href="../Online_feedback/index.php">Contact & feedback</a></li>
<li><a href="../uploaddown.php">upload && download</a></li>
<li><a href="../photoeditor/index.html">photo editor</a></li>
<li><a href="../all year videos.php">all year engineering videos </a></li>
<li><a href="../code and learn.php">coding online and learning website links</a></li>
</ul>
</h2>
  <br>

  <a href="https://sites.google.com/view/other-1">other old website link</a>
  <br><br>
  </h2>
</div>
-->
