<?php
if($_POST['kirim']){
	$admin = 'qadafimuamar74@gmail.com';
	
	$name	    = htmlentities($_POST['name']);
	$email	  = htmlentities($_POST['email']);
	$phone	  = htmlentities($_POST['phone']);
	$message	= htmlentities($_POST['message']);
	
	$pengirim	= 'Dari: '.$name.' <'.$email.'>';
	
	if(mail($admin, $phone, $message, $pengirim)){
		echo 'SUCCESS: Pesan anda berhasil di kirim. <a href="index.html"></a>';
	}else{
		echo 'ERROR: Pesan anda gagal di kirim silahkan coba lagi. <a href="index.html"></a>';
	}
}else{
	header("Location: index.html");
}
?>
