<?php

$satu = $_POST['rb'];
$dua = $_POST['1rb'];
$tiga = $_POST['3rb'];
$empat = $_POST['4rb'];
$lima = $_POST['5rb'];

if (isset($_POST['login'])){
	if (isset($_POST['rb']))
	{
		echo '<a>nilai kamu : </a>.';
	}
	
	if (isset($_POST['login'])){
	if (isset($_POST['rb']))
	{
		echo '<a>nilai kamu : </a>.'.$satu + $dua + $tiga +$empat+$lima;
	}
	
	if (isset($_POST['login'])){
	if (isset($_POST['rb']))
	{
		echo '<a href="../index - Copy.html"><br>BACK</a>.';
	}
}
}}
	?>