<?php

include("koneksi.php");

if (isset($_POST['kirim'])) {
	
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];


	$sql = "INSERT INTO contact (nama, email, subject, message) VALUE ('$nama', '$email', '$subject', '$message')";
	
	$query = mysqli_query($koneksi, $sql);

	if ( $query ) {
		header('Location: index.php?status=sukses');
	} else{
		header('Location: index.php?status=gagal');
	}
}else{
	die("Akses dilarang...");
}

?>
	
