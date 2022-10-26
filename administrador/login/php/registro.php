<?php

if(!empty($_POST)){
	if(isset($_POST["username"]) &&isset($_POST["password"]) &&isset($_POST["confirm_password"])){
		if($_POST["username"]!=""&&$_POST["password"]!=""&&$_POST["password"]==$_POST["confirm_password"]){
			include "conexion.php";
			
			$found=false;
			$sql1= "select * from users where username=\"$_POST[username]\"";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$found=true;
				break;
			}
			if($found){
				print "<script>alert(\"El email ya esta registrado.\");window.location='../registro.php';</script>";
			}
			$sql = "insert into users(username,password,created_at) value (\"$_POST[username]\",\"$_POST[password]\",NOW())";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Registro exitoso. Proceda a logearse\");window.location='../login.php';</script>";
			}
		}
	}
}



?>