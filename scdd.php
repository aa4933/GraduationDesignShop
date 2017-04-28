<?php
session_start();
include_once 'conn.php';
	$nddh=makefilename2();
	
	$sql="update goumaijilu set issh='是', ddh='".$nddh."' where goumairen='".$_SESSION['username']."' and ddh='无'";
	 	mysql_query($sql);
		$comewhere=$_SERVER['HTTP_REFERER'];
		echo "<script language='javascript'>alert('操作成功,您的订单号为:".$nddh."！');location.href='$comewhere';</script>";
	
?>