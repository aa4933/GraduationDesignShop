<?php 
session_start();
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>购买记录</title><script language="javascript" src="js/hsgrili.js"></script><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>已有购买记录列表：</p>
<form id="form1" name="form1" method="post" action="">
  搜索: 商品编号：<input name="shangpinbianhao" type="text" id="shangpinbianhao" size=12 style='border:solid 1px #000000; color:#666666;' /> 商品名称：<input name="shangpinmingcheng" type="text" id="shangpinmingcheng" size=12 style='border:solid 1px #000000; color:#666666;' /> 类别：<input name="leibie" type="text" id="leibie" size=12 style='border:solid 1px #000000; color:#666666;' />
  <input type="submit" name="Submit" value="查找" style='border:solid 1px #000000; color:#666666' />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">序号</td>
    <td bgcolor='#CCFFFF'>商品编号</td>
    <td bgcolor='#CCFFFF'>商品名称</td>
    <td bgcolor='#CCFFFF'>类别</td>
    <td bgcolor='#CCFFFF'>价格</td>
    <td bgcolor='#CCFFFF'>库存</td>
    <td bgcolor='#CCFFFF'>购买数量</td>
    <td bgcolor='#CCFFFF'>购买人</td>
    <td bgcolor='#CCFFFF'>备注</td>
    <td bgcolor='#CCFFFF' width='80' align='center'>是否审核</td>
    <td width="120" align="center" bgcolor="#CCFFFF">添加时间</td>
    <td width="70" align="center" bgcolor="#CCFFFF">操作</td>
  </tr>
  <?php 
    $sql="select * from goumaijilu where goumairen='".$_SESSION['username']."'";
  
if ($_POST["shangpinbianhao"]!=""){$nreqshangpinbianhao=$_POST["shangpinbianhao"];$sql=$sql." and shangpinbianhao like '%$nreqshangpinbianhao%'";}
if ($_POST["shangpinmingcheng"]!=""){$nreqshangpinmingcheng=$_POST["shangpinmingcheng"];$sql=$sql." and shangpinmingcheng like '%$nreqshangpinmingcheng%'";}
if ($_POST["leibie"]!=""){$nreqleibie=$_POST["leibie"];$sql=$sql." and leibie like '%$nreqleibie%'";}
  $sql=$sql." order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
  $pagelarge=10;//每页行数；
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
$goumaishuliangz=$goumaishuliangz+floatval(mysql_result($query,$i,goumaishuliang));

  ?>
  <tr>
    <td width="25"><?php echo $i+1;?></td>
    <td><?php echo mysql_result($query,$i,shangpinbianhao);?></td>
    <td><?php echo mysql_result($query,$i,shangpinmingcheng);?></td>
    <td><?php echo mysql_result($query,$i,leibie);?></td>
    <td><?php echo mysql_result($query,$i,jiage);?></td>
    <td><?php echo mysql_result($query,$i,kucun);?></td>
    <td><?php echo mysql_result($query,$i,goumaishuliang);?></td>
    <td><?php echo mysql_result($query,$i,goumairen);?></td>
    <td><?php echo mysql_result($query,$i,beizhu);?></td>
    <td width='80' align='center'><?php echo mysql_result($query,$i,"issh")?></td>
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    <td width="90" align="center"><a href="del.php?id=<?php echo mysql_result($query,$i,"id");?>&tablename=goumaijilu" onclick="return confirm('真的要删除？')">删除</a> <a href="goumaijilu_updt.php?id=<?php echo mysql_result($query,$i,"id");?>">修改</a> <a href="goumaijilu_detail.php?id=<?php echo mysql_result($query,$i,"id");?>">详细</a></td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>数据统计：共计购买数量:<?php echo $goumaishuliangz?>；</p>
<p>以上数据共<?php
		echo $rowscount;
	?>条,
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="打印本页"  style='border:solid 1px #000000; color:#666666' />
  <input type="button" name="Submit22" onclick="javascript:location.href='scdd.php';" value="确认订单" style='border:solid 1px #000000; color:#666666' />
</p>
<p align="center"><a href="goumaijilu_list2.php?pagecurrent=1">首页</a>, <a href="goumaijilu_list2.php?pagecurrent=<?php echo $pagecurrent-1;?>">前一页</a> ,<a href="goumaijilu_list2.php?pagecurrent=<?php echo $pagecurrent+1;?>">后一页</a>, <a href="goumaijilu_list2.php?pagecurrent=<?php echo $pagecount;?>">末页</a>, 当前第<?php echo $pagecurrent;?>页,共<?php echo $pagecount;?>页 </p>

<p>&nbsp; </p>

</body>
</html>

