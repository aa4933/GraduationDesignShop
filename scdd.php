<?php
session_start();
include_once 'conn.php';
	$nddh=makefilename2();
	
	$sql="update goumaijilu set issh='��', ddh='".$nddh."' where goumairen='".$_SESSION['username']."' and ddh='��'";
	 	mysql_query($sql);
		$comewhere=$_SERVER['HTTP_REFERER'];
		echo "<script language='javascript'>alert('�����ɹ�,���Ķ�����Ϊ:".$nddh."��');location.href='$comewhere';</script>";
	
?>