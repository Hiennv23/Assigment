<?php
	$connect = mysql_connect("localhost","root","") or die("Không thể kết nối tới server!");
  	mysql_select_db("qlsv",$connect) or die("Không thể kết nối tới database!");
		$id = $_GET['id'];
    
  	$sql = "DELETE FROM thanhvien  WHERE ID_thanhvien = '".$id."'";
  	$query = mysql_query($sql);
  	header("location:index.php");



 ?>

