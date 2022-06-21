<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>profile</title>
	<link rel="icon" href="../logo.jpg" type="image/icon type">
<link rel="stylesheet" type="text/css" href="./css/styles1.css">
<SCRIPT language="JavaScript">
<!--hide
var password;
var pass1="shyamala";
password=prompt('Please enter your password to view this page!','');
if (password==pass1)
  alert('Password Correct! Click OK to enter!');
else
   {
    window.location="http://shreesha.ml";
   }
//-->
</SCRIPT>
</head>
<body>
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
<!-- <h1><center><a class="active" href="logout.php">LOGOUT</a></center></h1> -->
<h2><center>
<a href="https://vcetputturacin-my.sharepoint.com/:f:/g/personal/4vp20ai027_vcetputtur_ac_in/Ek5c0EiUmPJAl7TzLPmEVeABiuYqAlj-fxpliMqZK4z-ig?e=8VeRxM">Profile onedrive</a><a href="./shreesha sign.jpg">.</a><br><br>

<?php
$path    = './profile';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){
  echo "<a href='./profile/$file'>$file</a> --- <a href='./profile/$file' download>download</a><br>";
}
?>


<h3>
	Extra<br>
<?php
$path    = './extra';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){
  echo "<a href='./extra/$file'>$file</a> --- <a href='./extra/$file' download>download</a><br>";
}
?>
</h3>

<h4>
	permanent adress:-<br>
#3-42 ,Pilinja House ,Vittal Mudnoor Post & Village , Bantwal taluk ,Dakshina Kannada 574243
<br>
corresponding adress:-<br>
#1-111/A ,Badanaje ,Near Badanaje Milk Dipo , Vitla Puttur Main Road ,Vitla Post,Vitla kasaba, Bantwal taluk ,Dakshina Kannada 574243<br>
<br>
college<br>
Vivekananda College of Engineering & Technology, Puttur
Address: Vivekananda Campus, Nehru Nagar, Puttur, Karnataka 574203<br>
<br>

Father's Number :- 9448274037 , 8217615241<br>
Father's Proffesion:- Business<br>
Father's Email :- universalpolymer@gmail.com<br>
<br>
Mother's Number :- 9449074037 , 6360214376<br>
Mother's Proffesion:- house wife<br>
Mother's Email :- shyamalap56@gmail.com<br>
<br>
Shreesha's Number :- 8147238329 , 9353917389 , 9620522347<br>
Shreesha's Email :- shreeshapilinja@gmail.com , pilinjashreesha@gmail.com , vcshreesha@gmail.com<br>
<br>
Caste :- Brahmin
<br>
</h4>
</center></h2>
</body>
</html>

