<?php
session_start();
include_once 'conn.php';
$id=$_GET["id"];
mysql_query("update xinwentongzhi set dianjilv=dianjilv+1 where id=$id");
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>


    <title>����Ѳ�����˻��������_��ȹ���|����ǿأ����������ܿƼ����޹�˾|����ǿأ�ZEROTECH���ٷ���վ|������˻�</title>

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

                <dt>��������</dt>

                <dd ><a href="lyb.php">��Ҫ����</a></dd>

            </dl>

        </div>

    </div>

</div>



<div class="content">

    <div class="about">

        <div class="about_txt">


<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#ADCEEF" style="border-collapse:collapse">
  <?php
					$sql="select * from liuyanban where 1=1";
					$sql=$sql." order by id desc";
  					$query=mysql_query($sql);
	 				 $rowscount=mysql_num_rows($query);
					 if($rowscount==0)
  {}
  else
  {
  $pagelarge=5;//ÿҳ������
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
    <td width="11" rowspan="3" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td width="85" rowspan="3" align="center" valign="middle"><img width='70'height='70' src="<?php echo mysql_result($query,$i,"zhaopian");?>" border="0" /> </td>
    <td height="20" colspan="2" align="left" valign="middle">&nbsp; &nbsp; ������:<?php echo mysql_result($query,$i,"addtime");?> &nbsp;</td>
    <td width="12" rowspan="3" valign="top" style="width: 10px"><!--DWLayoutEmptyCell-->&nbsp;</td>
  </tr>
  <tr>
    <td height="78" align="left" valign="top">&nbsp;<?php echo mysql_result($query,$i,"liuyan");?></td>
    <td align="left" valign="top"><p>�ظ���</p>
        <p><?php echo mysql_result($query,$i,"huifu");?></p></td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="middle" style="height: 25px">&nbsp; &nbsp;�˺ţ�<?php echo mysql_result($query,$i,"zhanghao");?> &nbsp; &nbsp;������<?php echo mysql_result($query,$i,"xingming");?>&nbsp;&nbsp;</td>
  </tr>
  <?php
						  }
  	}
  ?>
</table>
<p align="center"><a href="lyblist.php?pagecurrent=1">��ҳ</a>, <a href="lyblist.php?pagecurrent=<?php echo $pagecurrent-1;?>">ǰһҳ</a> ,<a href="lyblist.php?pagecurrent=<?php echo $pagecurrent+1;?>">��һҳ</a>, <a href="lyblist.php?pagecurrent=<?php echo $pagecount;?>">ĩҳ</a>, ��ǰ��<?php echo $pagecurrent;?>ҳ,��<?php echo $pagecount;?>ҳ �������ݹ�
  <?php
		echo $rowscount;
	?>
  ��,
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="��ӡ��ҳ" style=" height:19px; border:solid 1px #000000; color:#666666" />
</p>

</div>



        



    </div>

</div>



<div class="footer">

   <?php include_once 'qtdown.php';?>

</div>




<script type="text/javascript" src="http://www.zerouav.com/js/jquery-1.11.1.min.js"></script>

<script type="text/javascript" src="http://www.zerouav.com/js/jquery.easing.1.3.js"></script>

<script type="text/javascript" src="http://www.zerouav.com/js/banner.js"></script>

<script type="text/javascript" src="http://www.zerouav.com/js/common.js"></script>

</body>

</html>









