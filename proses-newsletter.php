<?php

include("koneksi.php");

if (isset($_POST['kirim'])) {
	
	$email = $_POST['email'];


	$sql = "INSERT INTO newsletter (email) VALUE ('$email')";
	
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
	
