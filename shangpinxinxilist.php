<?php
session_start();
include_once 'conn.php';
//xuyaodenglxu if($_SESSION["username"]=="")
//xuyaodenglxu {
//xuyaodenglxu	echo "<script>javascript:alert('�Բ��������ȵ�½��');location.href='index.php';/script>";
//xuyaodenglxu	exit;
//xuyaodenglxu }
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>


<title>��Ʒ��Ϣ</title><script language="javascript" src="js/hsgrili.js"></script>

    <link rel="stylesheet" href="css/common.css"/>

<meta http-equiv="Content-Type" content="text/html; charset=gb2312" /></head>

<body>

<div class="header">

    <div class="headerBox">

        <?php include_once 'qttop2.php';?>

        <div class="headerCont iscrollAnchor">

            <div class="headerC">

                 <?php include_once 'qttop.php';?>

               
                        <div class="nav_col">

                            <ul class="sub-menu">

                                <li><span class="submenu_tit"></span>

                                    <hr class="submenu_line">

                                    <ul class="sub-menu">

                                        <li><a href="/"></a></li>

                                    </ul>

                                </li>

                            </ul>

                        </div>

                        

                        <div class="nav_col">

                            <ul class="sub-menu">

                                <li><span class="submenu_tit"></span>

                                    <hr class="submenu_line">

                                    <ul class="sub-menu">

					

                                      

                                    </ul>

                                </li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>





        </div>

    </div>

</div>

<?php include_once 'bht.php';?>

<div class="subNav iscrollAnchor">

    <div class="subNavbox">

        <div class="subNavcont">

            <dl>

                <dt>��Ʒ��Ϣ</dt>

                <dd class="current"></dd>

            </dl>

        </div>

    </div>

</div>



<div class="content">

    <div class="about">

        <div class="about_txt">

<form id="form1" name="form1" method="post" action="">
  ����: ��Ʒ��ţ�<input name="shangpinbianhao" type="text" id="shangpinbianhao" style='border:solid 1px #000000; color:#666666' size="10" /> ��Ʒ���ƣ�<input name="shangpinmingcheng" type="text" id="shangpinmingcheng" style='border:solid 1px #000000; color:#666666' size="10" /> ���<select name='leibie' id='leibie'><option value="">����</option><?php getoption("shangpinleibie","leibie")?></select></select> �۸�<input name="jiage1" type="text" id="jiage1"  value='' style='border:solid 1px #000000; color:#666666;width:30px' />-<input name="jiage2" type="text" id="jiage2"  value='' style='border:solid 1px #000000; color:#666666;width:30px' />
  <input type="submit" name="Submit" value="����" style='border:solid 1px #000000; color:#666666' />&nbsp;<input type="button" name="Submit3" value="�л���ͼ" style='border:solid 1px #000000; color:#666666' onClick="location.href='shangpinxinxilisttp.php';" />
</form>
<table width="98%" border="0"  align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse" class="newsline">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">���</td>
    <td bgcolor='#CCFFFF'>��Ʒ���</td><td bgcolor='#CCFFFF'>��Ʒ����</td><td bgcolor='#CCFFFF'>���</td><td bgcolor='#CCFFFF'>�۸�</td><td bgcolor='#CCFFFF'>������</td><td bgcolor='#CCFFFF'>ͼƬ</td><td bgcolor='#CCFFFF'>���</td><td bgcolor='#CCFFFF'>����</td>
    <td width="120" align="center" bgcolor="#CCFFFF">���ʱ��</td>
    <td width="30" align="center" bgcolor="#CCFFFF">����</td>
  </tr>
  <?php 
    $sql="select * from shangpinxinxi where issh='��'";
  if ($_POST["shangpinbianhao"]!=""){$nreqshangpinbianhao=$_POST["shangpinbianhao"];$sql=$sql." and shangpinbianhao like '%$nreqshangpinbianhao%'";}if ($_POST["shangpinmingcheng"]!=""){$nreqshangpinmingcheng=$_POST["shangpinmingcheng"];$sql=$sql." and shangpinmingcheng like '%$nreqshangpinmingcheng%'";}if ($_POST["leibie"]!=""){$nreqleibie=$_POST["leibie"];$sql=$sql." and leibie like '%$nreqleibie%'";}if ($_POST["jiage1"]!=""){$nreqjiage1=$_POST["jiage1"];$sql=$sql." and jiage >= $nreqjiage1";}if ($_POST["jiage2"]!=""){$nreqjiage2=$_POST["jiage2"];$sql=$sql." and jiage <= $nreqjiage2";}
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
  ?>
  <tr>
    <td width="25"><?php echo $i+1;?></td>
    <td><?php echo mysql_result($query,$i,shangpinbianhao);?></td><td><?php echo mysql_result($query,$i,shangpinmingcheng);?></td><td><?php echo mysql_result($query,$i,leibie);?></td><td><?php echo mysql_result($query,$i,jiage);?></td><td><?php echo mysql_result($query,$i,faburen);?></td><td width='80'><a href="<?php echo mysql_result($query,$i,tupian) ?>" target='_blank'><img src='<?php echo mysql_result($query,$i,tupian) ?>' width='80' height='88' border='0'></a></td><td><?php echo mysql_result($query,$i,kucun);?></td><td><?php echo mysql_result($query,$i,xiaoliang);?></td>
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    <td width="30" align="center"><a href="shangpinxinxidetail.php?id=<?php echo mysql_result($query,$i,"id");?>">��ϸ</a></td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>�������ݹ�<?php echo $rowscount;?>��,
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="��ӡ��ҳ" style='border:solid 1px #000000; color:#666666' />
</p>
<p align="center"><a href="shangpinxinxilist.php?pagecurrent=1">��ҳ</a>, <a href="shangpinxinxilist.php?pagecurrent=<?php echo $pagecurrent-1;?>">ǰһҳ</a> ,<a href="shangpinxinxilist.php?pagecurrent=<?php echo $pagecurrent+1;?>">��һҳ</a>, <a href="shangpinxinxilist.php?pagecurrent=<?php echo $pagecount;?>">ĩҳ</a>, ��ǰ��<?php echo $pagecurrent;?>ҳ,��<?php echo $pagecount;?>ҳ </p>




        </div>



        



    </div>

</div>



<div class="footer">

   <?php include_once 'qtdown.php';?>

</div>




<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>

<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

<script type="text/javascript" src="js/banner.js"></script>

<script type="text/javascript" src="js/common.js"></script>

</body>

</html>










