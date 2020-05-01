<?php
if($_POST['kirim']){
	$admin = 'muamarqadafi35@gmail.com';
	
	$name	= htmlentities($_POST['name']);
	$email	= htmlentities($_POST['email']);
	$phone	= htmlentities($_POST['phone']);
	$message	= htmlentities($_POST['message']);
	
	$pengirim	= 'Dari: '.$name.' <'.$email.'>';
	
	if(mail($admin, $phone, $message, $pengirim)){
		echo 'SUCCESS: Thanks! Muamarqadafi Dev! <a href="index.html">Kembali</a>';
	}else{
		echo 'ERROR: Pesan anda gagal di kirim silahkan coba lagi. <a href="index.html">Kembali</a>';
	}
}else{
	header("Location: index.html");
}
?>
