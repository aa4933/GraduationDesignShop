<?php
session_start();
include_once 'conn.php';
$zh=$_GET["zh"];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>修改用户注册</title><link rel="stylesheet" href="css.css" type="text/css"><script language="javascript" src="js/Calendar.js"></script>
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
<p>用户详细： 当前日期： <?php echo $ndate; ?></p>
<?php
$sql="select * from yonghuzhuce where zhanghao='".$zh."'";
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
$i=0;
?>
<form id="form1" name="form1" method="post" action="">
  <table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">
    <tr>
      <td width="11%">账号：</td>
      <td width="58%"><?php echo mysql_result($query,$i,zhanghao);?></td>
      <td colspan="2" rowspan="6"><img src="<?php echo mysql_result($query,$i,zhaopian);?>" width="186" height="138" /></td>
    </tr>
    <tr>
      <td>姓名：</td>
      <td><?php echo mysql_result($query,$i,xingming);?></td>
    </tr>
    <tr>
      <td>性别：</td>
      <td><?php echo mysql_result($query,$i,xingbie);?> </td>
    </tr>
    <tr>
      <td>地区：</td>
      <td><?php echo mysql_result($query,$i,diqu);?></td>
    </tr>
    <tr>
      <td>手机：</td>
      <td><?php echo mysql_result($query,$i,shouji);?></td>
    </tr>
    <tr>
      <td>Email：</td>
      <td><?php echo mysql_result($query,$i,Email);?></td>
    </tr>
    
    <tr>
      <td colspan="4" align="center"><input type="button" name="Submit2" value="打印" onclick="javascript:window.print();" /></td>
    </tr>
  </table>
</form>
<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>

