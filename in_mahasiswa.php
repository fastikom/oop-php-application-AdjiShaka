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

<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer"></div>

<div class="w3-main" >


<header class="w3-container w3-theme w3-padding-hor-64 w3-padding-ver-64">
  <h2 class="w3-xlarge w3-padding-hor-16">Input Data Mahasiswa</h2>
</header>

<div class="w3-container w3-padding-hor-32 w3-padding-ver-64">
  <div class="w3-container w3-padding-hor-64 w3-text-teal w3-card-4">
    <form name="form1" method="get"  class="w3-container ">
		<?php 
			include"koneksi.php";
		?>
		<div>
		<label class="w3-label w3-text-teal"><b>No Mahasiswa</b></label>
		<input class="w3-input w3-border w3-light-grey w3-animate-input" type="text" style="width:50%" name="txt_nomhs" maxlength="10">
		</div>
		<div>
		<label class="w3-label w3-text-teal"><b>Nama</b></label>
		<input class="w3-input w3-border w3-light-grey w3-animate-input" type="text" style="width:50%" name="txt_nama" maxlength="35">
		</div>
		<div>
		<label class="w3-label w3-text-teal"><b>Alamat</b></label>
		<input class="w3-input w3-border w3-light-grey w3-animate-input" type="text" style="width:50%" name="txt_alamat" maxlength="50">
		</div>
		<div>
		<label class="w3-label w3-text-teal" style="width:30%"><b>Program Studi</b></label><br>
		<select class="w3-select" name="cbx_prodi" style="width:50%">
			<?php 
				$tampil=mysql_query("SELECT * FROM prodi ORDER BY kd_prodi");
			?>
		  <option value="Belum Milih" disabled >-Pilih Program Studi-</option>
		  <?php 
		  	while($w=mysql_fetch_array($tampil))
		  		{
		  			echo "<option value=$w[kd_prodi] selected>$w[prodi]</option>";        
				}
		  ?>
		  
		</select>
		</div>
		
		<div>&nbsp;</div>
				<div>				
			<button class="w3-btn w3-blue-grey" type="submit" name="simpan">Simpan</button>
			<a href="lap_mahasiswa.php"><button  class="w3-btn w3-teal" type="button">Batal</button></a>
		</div>
	</form>
</div>
</div>
<?php

require("fungsi.php");
if(isset($_GET['simpan'])){
$no = $_GET['txt_nomhs'];
$nama = $_GET['txt_nama'];
$alamat=$_GET['txt_alamat'];
$prodi = $_GET['cbx_prodi'];
 
$Lib = new Mahasiswa();
$add = $Lib->tambahdata($no, $nama,$alamat,$prodi );
if($add == "Success"){
header('Location: index.php');
}
}
?>
     


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



