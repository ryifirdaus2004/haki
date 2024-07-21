<?php 

if ($_GET['module']=='') {
	include 'component/home.php';
}elseif ($_GET['module'] == 'pegawai') {
	if ($_SESSION['leveluser']=='admin'){
	include 'component/com_pegawai/pegawai.php';
	}else{
		echo '<meta http-equiv="refresh" content="0; url=index.php">';
	}
}elseif ($_GET['module'] == 'kelas') {
	include 'component/com_kelas/kelas.php';
}elseif ($_GET['module'] == 'nasabah') {
	include 'component/com_nasabah/nasabah.php';
}elseif ($_GET['module'] == 'transaksi') {
	include 'component/com_transaksi/transaksi.php';
}elseif ($_GET['module'] == 'laporan-transaksi') {
	include 'component/com_laporan/laporan-transaksi.php';
}elseif ($_GET['module'] == 'cetak-rekening') {
	include 'component/com_rekening/rekening.php';
}elseif ($_GET['module'] == 'pengaturan') {
	 if ($_SESSION['leveluser']=='admin'){
	include 'component/com_pengaturan/pengaturan.php';
	}else{
		echo '<meta http-equiv="refresh" content="0; url=index.php">';
	}
}else{
	echo '<meta http-equiv="refresh" content="0; url=?module=beranda">';
}


?>