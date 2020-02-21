<?php

$username = $_POST['user'];
$password = $_POST['pass'];

mysql_connect("localhost","root","");
mysql_select_db("bigboss");

$result = mysql_query("select * from login where username = '$username' and password = '$password'");
$row = mysql_fetch_array($result);
if ($row['username'] == $username && $row['password'] == $password){
	echo '<a href="../index - Copy.html">selamat datang siswa Bigboss</a>.'; 
} else {
	echo '<a href="../daftar.html">daftar dulu gaes</a>.';
}
?>