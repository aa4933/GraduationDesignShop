<?php
session_start();
include_once 'conn.php';
$lb=$_GET["lb"];
if($lb=="")
{
	$lb=$_POST["lb"];
}
$biaoti=$_POST["biaoti"];
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>


<title>服装购物网站</title>



<link rel="stylesheet" href="css/common.css"/>


</head>

<body>

<div class="header">

    <div class="headerBox">

        <?php include_once 'qttop2.php';?>

        <div class="headerCont iscrollAnchor">

            <div class="headerC">

                 <?php include_once 'qttop.php';?>

               

                        <div class="nav_col">

                            <ul class="sub-menu">

                                <li><span class="submenu_tit">无人机行业解决方案</span>

                                    <hr class="submenu_line">

                                    <ul class="sub-menu">





                                    </ul>

                                </li>

                            </ul>

                        </div>

                        

                        <div class="nav_col">

                            <ul class="sub-menu">

                                <li><span class="submenu_tit">其他</span>

                                    <hr class="submenu_line">

                                    <ul class="sub-menu">

					

                                        <!--

                                        <li><a href="other_osd.html">OSD</a></li>

                                        <li><a href="other_propeller.html">螺旋浆</a></li>

                                        <li><a href="other_Retractable_tripod.html">收放脚架</a></li>

                                        <li><a href="other_Radio_station.html">电台</a></li>

                                        <li><a href="other_parachute.html">安全伞</a></li>

                                        <li><a href="other_s-bus.html">万能S-BUS模块</a></li>

                                        <li><a href="other_av_wire.html">高清AV线</a></li>

                                        <li><a href="other_Accessories.html">配件包</a></li>

                                        <li><a href="#">专用工具</a></li>

                                        <li><a href="#">下压减震</a></li>

                                                    -->  

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

      <ul>

        <li><a class="current" href='news.php?lb=<?php echo $lb?>'><?php echo $lb?></a></li>

      

      </ul>

    </div>

  </div>

</div>

<div class="content">

  <div class="newsPage">

    <div class="newsLeft">

      <div class="news">
	  
	   <?php 
    $sql="select * from xinwentongzhi where 1=1";
  
if ($biaoti!=""){$sql=$sql." and biaoti like '%$biaoti%'";}
if($lb!=""){$sql=$sql." and leibie='$lb'";}
  $sql=$sql." order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
  $pagelarge=5;//每页行数；
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
	   <div class="newsItem">

          <div class="newsItem_pic"> <a href="gg_detail.php" class="a-img" ><?php if( mysql_result($query,$i,shouyetupian)==null)
	{
	?>
	
	<img src='images/nopic.jpg' width='220' height='145' border='0'>
	<?php
	}
	else
	{
	?>
	<a href="<?php echo mysql_result($query,$i,shouyetupian) ?>" target='_blank'>
	<img src='<?php echo mysql_result($query,$i,shouyetupian) ?>'width='220' height='145' border='0'></a>
	<?php
	}
	?></a> </div>

          <div class="newsItem_txt">

            <h4 class="_tit"> <a href="gg_detail.php?id=<?php echo mysql_result($query,$i,id) ?>" ><?php echo mysql_result($query,$i,biaoti) ?></a> </h4>

            <div class="_time">

              <time><?php echo mysql_result($query,$i,"addtime");?></time>

            </div>

            <div class="_intro"> <?php echo mysql_result($query,$i,zhaiyao) ?> </div>

          </div>

        </div>
		 <?php
						}
					  }
					  ?>
					   </div>

      <div class="pages">
	  

<?php
	for ($p=1;$p<=$pagecount;$p++)
	{
		if ($pagecurrent==$p)
		{
			?>
			<li class="thisclass"><span class="page"><?php echo $p;?></span></li>
			<?php
		}
		else
		{
		?>
		<li><a href='news.php?pagecurrent=<?php echo $p;?>&lb=<?php echo $lb;?>'><?php echo $p;?></a></li>

		<?php
		}
	}
?>

<a href='news.php?pagecurrent=<?php echo $pagecurrent+1;?>&lb=<?php echo $lb;?>'>></a>

</div>

			

    </div>

    <div class="newsRight">  </div>

  </div>

</div>

<div class="footer">

  <?php include_once 'qtdown.php';?>

</div>





<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>

<script type="text/javascript" src="js/common.js"></script>


<script type="text/javascript" src="js/banner.js"></script>

<style type="text/css">

.pages li{display:inline}

</style>

</body>

</html>

