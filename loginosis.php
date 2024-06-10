<?php 
  include 'koneksi.php';
$nisn = $_POST["nisn"];
  $login = mysqli_query($koneksi, "SELECT * FROM pemilih WHERE nisn='$nisn'");
	$cek = mysqli_num_rows($login);
	if($cek > 0){
		session_start();
		$data = mysqli_fetch_assoc($login);
		$_SESSION['nisn'] = $data['nisn'];
    $_SESSION['nama_pemilih'] = $data['nama_pemilih'];
		$_SESSION['status'] = "siswa";
		echo "<script>alert('SILAHKAN PILIH OSIS ANDA!');window.location.href='osis.php'</script>";
	}else{
    echo "<script>alert('Data belum terdaftar');window.location.href='index.php'</script>";
	}
?>