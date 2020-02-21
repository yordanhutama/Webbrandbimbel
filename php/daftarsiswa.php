<?php

	mysql_connect("localhost","root","");
	mysql_select_db("bigboss");

    $sql = $conn->prepare("select * from login where username = '$username' and password = '$password'") ; 
    
    $sql->execute() ;
?>