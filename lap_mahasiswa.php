

<!DOCTYPE html>
<html>
<head>
	<title>Laporan Data Mahasiswa</title>
</head>
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
  <a href="index.php" >Beranda</a>		
  <a href="lap_mahasiswa.php" class="w3-light-grey w3-medium">Mahasiswa</a>
  <a href="lap_prodi.php">Program Studi</a>
  
</nav>

<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer"></div>

<div class="w3-main" style="margin-left:250px;">

<div id="myTop" class="w3-top w3-container w3-padding-hor-16 w3-theme w3-large">
  <i class="fa fa-bars w3-opennav w3-hide-large w3-xlarge w3-margin-left w3-margin-right" onclick="w3_open()"></i>
  <span id="myIntro" class="w3-hide">Sistem Akademik</span>
</div>

<header class="w3-container w3-theme w3-padding-hor-64 w3-padding-ver-64">
  <h4 class="w3-xxxlarge w3-padding-hor-16">Sistem Akademik: Data Mahasiswa</h4>
</header>

<div class="w3-container w3-padding-hor-32 w3-padding-ver-64">
  <div class="w3-container w3-padding-hor-64 w3-text-teal ">
   <a class="w3-btn-floating-large w3-teal " href="in_mahasiswa.php">+</a>
    <table width="225" border="1" class="w3-table w3-bordered w3-striped w3-border">
		
		<tr>
			<thead class="w3-teal">
			<td><strong>Urut</strong></td>
			<td ><strong>NIM</strong></td>
			<td ><strong>Nama</strong></td>
			<td><strong>Alamat</strong></td>
			<td ><strong>Jurusan</strong></td>
		  <td colspan="2"><strong>Aksi</strong></td>
			</thead>
		</tr>
		<?php
		require("fungsi.php");
			$Lib = new Mahasiswa();
      $show = $Lib->tampildata();
			$urut=0;
			while($hasil=mysql_fetch_array($show)){
				$urut++;
				?>
		<tr>
			<td><?php echo "$urut"?></td>
			<td width="100"><?php echo "$hasil[no_mhs]"?></td>
			<td width="300"><?php echo "$hasil[nama]"?></td>
			<td width="300"><?php echo "$hasil[alamat]"?></td>
			<td width="300"><?php echo "$hasil[prodi]"?></td>
      <td><a class='w3-btn w3-teal' href='lap_mahasiswa.php?delete=<?php echo "$hasil[no_mhs]"?>'>Delete</a></td>
      <td><a class='w3-btn w3-blue-grey' href='edit_mahasiswa.php?kode=<?php echo "$hasil[no_mhs]"?>'>Edit</td>
			
		</tr>
		<?php } ?>
	</table>
</div>
</div>
<?php
     if(isset($_GET['delete'])){
      $Lib = new Mahasiswa();
      $del = $Lib->hapusdata($_GET['delete']);
 
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
