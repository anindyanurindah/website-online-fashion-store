<?php
include"config.php";
$username = $_POST['username'];
$password = $_POST['password'];
$ceklogin = mysqli_query($con,"select * from admin where username='$username' && password='$password'");
$cekloginsel = mysqli_query($con,"select * from seller where username='$username' && password='$password'");
$ceklogin_cus = mysqli_query($con,"SELECT * from customer where username='$username' && password='$password'");
$datacus = mysqli_fetch_array($ceklogin_cus);
$datasel = mysqli_fetch_array($cekloginsel);
$data = mysqli_fetch_array($ceklogin);
$cekuser = $data['username'];
$cekuser_cus = $datacus['username'];
$cekuser_sel = $datasel['username'];
$nama_cus = $datacus['nama'];
$nama_sel = $datasel['nama'];
$nama = $data['nama'];
$id = $datacus['id_pembeli'];
if($cekuser==$username)
{
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['nama'] = $nama;
	header("location:page/admin");
}
else if ($cekuser_sel==$username) 
{
    session_start();
	$_SESSION['username'] = $username;
	$_SESSION['nama'] = $nama_sel;
	header("location:page/seller");	
}
else if ($cekuser_cus==$username) 
{
    session_start();
	$_SESSION['username'] = $username;
	$_SESSION['nama'] = $nama_cus;
	$_SESSION['id_pembeli'] = $id;
	header("location:page/customer");	
}
else
{
	echo "Anda gagal melakukan login!!!";
	header("location:login.php?pesan=gagal");
}
?>