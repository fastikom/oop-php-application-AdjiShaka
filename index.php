<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/w3-theme-teal.css">
<link href='../../fonts.googleapis.com/css7a64.css?family=RobotoDraft' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"><style>
html,body,h1,h2,h3,h4,h5 {font-family: "RobotoDraft","Roboto",sans-serif;}
.w3-sidenav a {padding:16px;font-weight:bold}
</style>
<body>

<nav class="w3-sidenav w3-collapse w3-white w3-animate-left w3-card-2" style="z-index:3;width:250px;">
<a href="#" class="w3-border-bottom w3-large w3-text-teal"> Lihat Data</a>
  <a href="javascript:void(0)" onclick="w3_close()" 
  class="w3-text-teal w3-hide-large w3-closenav w3-large">Close <i class="fa fa-remove"></i></a>
  <a href="#" class="w3-light-grey w3-medium">Beranda</a>		
  <a href="lap_mahasiswa.php">Mahasiswa</a>
  <a href="lap_prodi.php">Program Studi</a>
</nav>

<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer"></div>

<div class="w3-main" style="margin-left:250px;">

<div id="myTop" class="w3-top w3-container w3-padding-hor-16 w3-theme w3-large">
  <i class="fa fa-bars w3-opennav w3-hide-large w3-xlarge w3-margin-left w3-margin-right" onclick="w3_open()"></i>
  <span id="myIntro" class="w3-hide">W3.CSS: Introduction</span>
</div>

<header class="w3-container w3-theme w3-padding-hor-64 w3-padding-ver-64">
  <h1 class="w3-xxxlarge w3-padding-hor-16">Sistem Akademik</h1>
</header>

<div class="w3-container w3-padding-hor-32 w3-padding-ver-64">
  <div class="w3-container w3-padding-hor-64 w3-text-teal ">
    <h3><p>Selamat Datang Di Sistem Akademik</p> </h3><h4><p>Silahkan pilih menu disamping untuk melihat data </p></h4></div>
</div>


     
</div>

<script>
// Open and close the sidenav on medium and small screens
function w3_open() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
    document.getElementsByClassName("w3-overlay")[0].style.display = "block";
}
function w3_close() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
    document.getElementsByClassName("w3-overlay")[0].style.display = "none";
}

// Change style of top container on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("myTop").classList.add("w3-card-4");
        document.getElementById("myIntro").classList.add("w3-show-inline-block");
    } else {
        document.getElementById("myIntro").classList.remove("w3-show-inline-block");
        document.getElementById("myTop").classList.remove("w3-card-4");
    }
}

// Accordions
function myAccordion(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme";
    } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme", "");
    }
}
</script>
     
</body>
</html> 
