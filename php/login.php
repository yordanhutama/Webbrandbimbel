<?php

$username = $_POST['user'];
$password = $_POST['pass'];

if ($username == 'yordan'){
	echo '<a>selamat datang >.<)/ </a>.'; 
} else {
	echo '<a href="../login.html">daftar dulu gaes</a>.';
}
?>