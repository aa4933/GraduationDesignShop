<?php
session_start();
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�����¼</title><script language="javascript" src="js/Calendar.js"></script><link rel="stylesheet" href="css.css" type="text/css">
<style type="text/css">
<!--
.STYLE1 {
	font-size: 16px;
	font-weight: bold;
}
-->
</style>
</head>

<body>

<p>�ҵĶ�����</p>
<?php
$sql="select ddh,goumairen  from goumaijilu where goumairen='".$_SESSION["username"]."' order by id desc limit 0,1";
$query=mysql_query($sql);
$nddh=mysql_result($query,0,ddh);
$ngmr=mysql_result($query,0,goumairen);
if($nddh=="��")
{
			echo "<script language='javascript'>alert('�����ι�����δ���ɶ���,����ȷ�϶���!');history.back();</script>";
			exit;

}
?>
<table width="81%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td colspan="6" bgcolor="#CCFFFF"><div align="center">
      <p class="STYLE1">����СƱ</p>
      <p class="STYLE1">������:<?php echo $nddh;?> ������: <?php echo $ngmr;?> </p>
    </div></td>
  </tr>
  <tr>
    <td width="25" bgcolor="#CCFFFF">���</td>
    <td bgcolor='#CCFFFF'>���</td><td bgcolor='#CCFFFF'>����</td><td bgcolor='#CCFFFF'>���</td><td bgcolor='#CCFFFF'>�۸�</td><td bgcolor='#CCFFFF'>��������</td>
  </tr>
  <?php 
    $sql="select * from goumaijilu where ddh='".$nddh."' and issh='��'";
  
if ($_POST["bianhao"]!=""){$nreqbianhao=$_POST["bianhao"];$sql=$sql." and ddh like '%$nreqbianhao%'";}
  $sql=$sql." order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
  $pagelarge=10;//ÿҳ������
  $pagecurrent=$_GET["pagecurrent"];
  if($rowscount%$pagelarge==0)
  {
		$pagecount=$rowscount/$pagelarge;
  }
  else
  {
   		$pagecount=intval($rowscount/$pagelarge)+1;
  }
  if($pagecurrent=="" || $pagecurrent<=0)
{
	$pagecurrent=1;
}
 
if($pagecurrent>$pagecount)
{
	$pagecurrent=$pagecount;
}
		$ddddd=$pagecurrent*$pagelarge;
	if($pagecurrent==$pagecount)
	{
		if($rowscount%$pagelarge==0)
		{
		$ddddd=$pagecurrent*$pagelarge;
		}
		else
		{
		$ddddd=$pagecurrent*$pagelarge-$pagelarge+$rowscount%$pagelarge;
		}
	}

	for($i=$pagecurrent*$pagelarge-$pagelarge;$i<$ddddd;$i++)
{
$goumaishuliangz=$goumaishuliangz+floatval(mysql_result($query,$i,goumaishuliang))*floatval(mysql_result($query,$i,jiage));

  ?>
  <tr>
    <td width="25"><?php
	echo $i+1;
?></td>
    <td><?php echo mysql_result($query,$i,shangpinbianhao);?></td><td><?php echo mysql_result($query,$i,shangpinmingcheng);?></td><td><?php echo mysql_result($query,$i,leibie);?></td><td><?php echo mysql_result($query,$i,jiage);?></td><td><?php echo mysql_result($query,$i,goumaishuliang);?></td>
  </tr>
  	<?php
	}
	
}
?>
<tr>
    <td colspan="6"><div align="center">����ͳ�ƣ����ƹ����ܶ�:<?php echo $goumaishuliangz?>��</div></td>
  </tr>
</table>
<p align="center">
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="��ӡ��ҳ" style='border:solid 1px #000000; color:#666666' />
   <input type="button" name="Submit22" onclick="javascript:window.open('http://www.alipay.com')" value="ǰ��֧��--&gt;&gt;" style='border:solid 1px #000000; color:#666666' />
</p>
<p>&nbsp;</p>
<p>&nbsp; </p>

</body>
</html>

