<?php
include"koneksi.php";
class Mahasiswa {
	var $no;
    var $nama;
    var $alamat;
    var $prodi;

    function tampildata() {
        $query="SELECT*from mahasiswa join  prodi on mahasiswa.kd_prodi=prodi.kd_prodi 
             order by no_mhs";
        $result = @mysql_query($query) or die(mysql_error());
        return $result;
    }
    function tambahdata($no,$nama, $alamat, $prodi) {
        $query = "INSERT INTO mahasiswa(no_mhs,nama, alamat, kd_prodi,kd_propinsi) VALUES ('$no','$nama','$alamat','$prodi','')";
        $result = @mysql_query($query) or die(mysql_error());
        if ($result) {
            header('location:lap_mahasiswa.php');
        } else {
            die("Data gagal Disimpan");
        }
    }
    function editdata($no) {
        $query = "select*from mahasiswa join prodi on mahasiswa.kd_prodi=prodi.kd_prodi where no_mhs='$no'";
        $result = @mysql_query($query) or die(mysql_error());
        return $result;
    }
    function prosesedit($no, $nama, $alamat, $prodi) {
        $query = "UPDATE mahasiswa SET nama='$nama', alamat='$alamat',kd_prodi='$prodi' WHERE no_mhs='$no'";
        $result = @mysql_query($query) or die(mysql_error());
        if ($result) {
            header('location:lap_mahasiswa.php');
        } else {
            die("Data gagal Disimpan");
        }
    }
    function hapusdata($no) {
        $query = "DELETE FROM mahasiswa WHERE no_mhs='$no'";
        $result = @mysql_query($query) or die(mysql_error());
        if ($result) {
            header('location:lap_mahasiswa.php');
        } else {
            die("data gagal dihapus");
        }
    }
    function caridata($cari) {
        $query = "select * from anggota where nama like '%$cari%' or alamat like '%$cari%' or telpon like '%$cari%'";
        $result = @mysql_query($query) or die(mysql_error());
        return $result;
    }
}
class Prodi {
    var $kode;
    var $prodi;
   

    function tampildata() {
       $query="SELECT*from prodi order by prodi ASC";
        $result = @mysql_query($query) or die(mysql_error());
        return $result;
    }
    function tambahdata($kode,$prodi) {
        $query = "INSERT INTO prodi(kd_prodi,prodi) VALUES ('$kode','$prodi')";
        $result = @mysql_query($query) or die(mysql_error());
        if ($result) {
            header('location:lap_prodi.php');
        } else {
            die("Data gagal Disimpan");
        }
    }
    function editdata($kode) {
        $query = "select * from prodi where kd_prodi='$kode'";
        $result = @mysql_query($query) or die(mysql_error());
        return $result;
    }
    function prosesedit($kode, $prodi) {
        $query = "UPDATE prodi SET prodi='$prodi' WHERE kd_prodi='$kode'";
        $result = @mysql_query($query) or die(mysql_error());
        if ($result) {
            header('location:lap_prodi.php');
        } else {
            die("Data gagal Disimpan");
        }
    }
    function hapusdata($kode) {
        $query = "DELETE FROM prodi WHERE kd_prodi='$kode'";
        $result = @mysql_query($query) or die(mysql_error());
        if ($result) {
            header('location:lap_prodi.php');
        } else {
            die("data gagal dihapus");
        }
    }
    function caridata($cari) {
        $query = "select * from anggota where nama like '%$cari%' or alamat like '%$cari%' or telpon like '%$cari%'";
        $result = @mysql_query($query) or die(mysql_error());
        return $result;
    }
}
?>