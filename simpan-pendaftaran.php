<?php
//Include file koneksi ke database
include "config.php";

//menerima nilai dari kiriman form pendaftaran
$username=$_POST["username"];
$nama=$_POST["nama"];
$nis=$_POST["nis"];
$email=$_POST["email"];
$kelas=$_POST["kelas"];
$password=md5($_POST["password"]);


//Query input menginput data kedalam tabel anggota
  $sql="insert into anggota (username,nama,nis,email,kelas,password) values
		('$username','$nama','$nis','$email','$kelas','$password')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($kon,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo "Berhasil simpan data anggota";
	exit;
  }
else {
	echo "Gagal simpan data anggota";
	exit;
}  

?>