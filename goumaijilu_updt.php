<?php 
session_start();
include_once 'conn.php';
$id=$_GET["id"];
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{

	$shangpinbianhao=$_POST["shangpinbianhao"];    $shangpinmingcheng=$_POST["shangpinmingcheng"];    $leibie=$_POST["leibie"];    $jiage=$_POST["jiage"];    $kucun=$_POST["kucun"];    $goumaishuliang=$_POST["goumaishuliang"];    $goumairen=$_POST["goumairen"];    $beizhu=$_POST["beizhu"];    
	$sql="update goumaijilu set shangpinbianhao='$shangpinbianhao',shangpinmingcheng='$shangpinmingcheng',leibie='$leibie',jiage='$jiage',kucun='$kucun',goumaishuliang='$goumaishuliang',goumairen='$goumairen',beizhu='$beizhu' where id= ".$id;
	mysql_query($sql);
	echo "<script>javascript:alert('修改成功!');location.href='goumaijilu_list.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>修改购买记录</title><link rel="stylesheet" href="css.css" type="text/css"><script language="javascript" src="js/hsgrili.js"></script>
</head>
<script language="javascript">
	
	
	function OpenScript(url,width,height)
{
  var win = window.open(url,"SelectToSort",'width=' + width + ',height=' + height + ',resizable=1,scrollbars=yes,menubar=no,status=yes' );
}
	function OpenDialog(sURL, iWidth, iHeight)
{
   var oDialog = window.open(sURL, "_EditorDialog", "width=" + iWidth.toString() + ",height=" + iHeight.toString() + ",resizable=no,left=0,top=0,scrollbars=no,status=no,titlebar=no,toolbar=no,menubar=no,location=no");
   oDialog.focus();
}
</script>
<body>
<p>修改购买记录： 当前日期： <?php echo $ndate; ?></p>
<?php
$sql="select * from goumaijilu where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 

      <tr><td>商品编号：</td><td><input name='shangpinbianhao' type='text' id='shangpinbianhao' value='<?php echo mysql_result($query,$i,shangpinbianhao);?>' /></td></tr>    <tr><td>商品名称：</td><td><input name='shangpinmingcheng' type='text' id='shangpinmingcheng' size='50' value='<?php echo mysql_result($query,$i,shangpinmingcheng);?>' /></td></tr>    <tr><td>类别：</td><td><input name='leibie' type='text' id='leibie' value='<?php echo mysql_result($query,$i,leibie);?>' /></td></tr>    <tr><td>价格：</td><td><input name='jiage' type='text' id='jiage' value='<?php echo mysql_result($query,$i,jiage);?>' /></td></tr>    <tr><td>库存：</td><td><input name='kucun' type='text' id='kucun' value='<?php echo mysql_result($query,$i,kucun);?>' /></td></tr>    <tr><td>购买数量：</td><td><input name='goumaishuliang' type='text' id='goumaishuliang' value='<?php echo mysql_result($query,$i,goumaishuliang);?>' /></td></tr>    <tr><td>购买人：</td><td><input name='goumairen' type='text' id='goumairen' value='<?php echo mysql_result($query,$i,goumairen);?>' /></td></tr>    <tr><td>备注：</td><td><textarea name='beizhu' cols='50' rows='8' id='beizhu'><?php echo mysql_result($query,$i,beizhu);?></textarea></td></tr>    
   
   
    <tr>
      <td>&nbsp;</td>
      <td><input name="addnew" type="hidden" id="addnew" value="1" />
      <input type="submit" name="Submit" value="修改" style='border:solid 1px #000000; color:#666666' />
      <input type="reset" name="Submit2" value="重置" style='border:solid 1px #000000; color:#666666' /></td>
    </tr>
  </table>
</form>
<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>

