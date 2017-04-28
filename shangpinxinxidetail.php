<?php
session_start();
include_once 'conn.php';
//xuyaodenglxu if($_SESSION["username"]=="")
//xuyaodenglxu {
//xuyaodenglxu	echo "<script>javascript:alert('对不起，请您先登陆！');location.href='index.php';/script>";
//xuyaodenglxu	exit;
//xuyaodenglxu }
$id=$_GET["id"];
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>


    <title>商品信息</title>

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

                <dt>商品信息详细</dt>

                <dd class="current"></dd>

            </dl>

        </div>

    </div>

</div>



<div class="content">

    <div class="about">

        <div class="about_txt">

 <?php
$sql="select * from shangpinxinxi where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>

<table width="98%" border="0"  align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse" class="newsline"> 
      <tr>
	  <td width='11%' height=44>商品编号：</td><td width='39%'><?php echo mysql_result($query,0,shangpinbianhao);?></td><td  rowspan=7 align=center><a href=<?php echo mysql_result($query,0,tupian);?> target=_blank><img src=<?php echo mysql_result($query,0,tupian);?> width=228 height=215 border=0></a></td></tr><tr>
    <td width='11%' height=44>商品名称：</td><td width='39%'><?php echo mysql_result($query,0,shangpinmingcheng);?></td></tr><tr>
    <td width='11%' height=44>类别：</td><td width='39%'><?php echo mysql_result($query,0,leibie);?></td></tr><tr>
    <td width='11%' height=44>价格：</td><td width='39%'><?php echo mysql_result($query,0,jiage);?></td></tr><tr>
    <td width='11%' height=44>发布人：</td><td width='39%'><?php echo mysql_result($query,0,faburen);?></td></tr><tr>
    
    <td width='11%' height=44>库存：</td><td width='39%'><?php echo mysql_result($query,0,kucun);?></td></tr><tr>
    <td width='11%' height=44>销量：</td><td width='39%'><?php echo mysql_result($query,0,xiaoliang);?></td></tr><tr>
    
    <td width='11%' height=100  >简介：</td><td width='39%' colspan=2 height=100 ><?php echo mysql_result($query,0,jianjie);?></td></tr><tr><td colspan=3 align=center><input type=button name=Submit5 value=返回 onClick="javascript:history.back()" style='border:solid 1px #000000; color:#666666; width:50px;'  />
        <input type=button name=Submit52 value=购买 onClick="javascript:location.href='goumaijiluadd.php?id=<?php echo $id?>';" style='border:solid 1px #000000; color:#666666; width:50px;'  /></td></tr>
    
     
  </table>

<?php
	}
?>





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










