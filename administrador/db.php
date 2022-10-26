<?php

/**
* Conexion a la base de datos y funciones
**/
function con(){
	return new mysqli("localhost","root","","melipbik_melipbike");
}

function insert_img($title, $folder, $image){
	$con = con();
	$con->query("insert into slider (title, folder,src,created_at) value (\"$title\",\"$folder\",\"$image\",NOW())");
}

function get_imgs(){
	$images = array();
	$con = con();
	$query=$con->query("select * from slider order by created_at desc");
	while($r=$query->fetch_object()){
		$images[] = $r;
	}
	return $images;
}

function get_img($id){
	$image = null;
	$con = con();
	$query=$con->query("select * from slider where id=$id");
	while($r=$query->fetch_object()){
		$image = $r;
	}
	return $image;
}

function del($id){
	$con = con();
	$con->query("delete from slider where id=$id");
}

/**
* insertar imagenes galeria
**/

function galeria_img($title, $folder, $image){
	$con = con();
	$con->query("insert into galeria (title, folder,src,created_at) value (\"$title\",\"$folder\",\"$image\",NOW())");
}

function galeria_imgs(){
	$images = array();
	$con = con();
	$query=$con->query("select * from galeria order by created_at desc");
	while($r=$query->fetch_object()){
		$images[] = $r;
	}
	return $images;
}

function gal_img($id){
	$image = null;
	$con = con();
	$query=$con->query("select * from galeria where id=$id");
	while($r=$query->fetch_object()){
		$image = $r;
	}
	return $image;
}

function delete($id){
	$con = con();
	$con->query("delete from galeria where id=$id");
}



?>