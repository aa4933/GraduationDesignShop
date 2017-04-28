<?php
session_start();
include_once 'conn.php';
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>



<title>服装购物网站</title>


<link rel="stylesheet" href="css/common.css"/>


<meta http-equiv="Content-Type" content="text/html; charset=gb2312"></head>

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

                                        <li><a href="index.php"></a></li>

                                    </ul>

                                </li>

                            </ul>

                        </div>

                        

                        <div class="nav_col">

                            <ul class="sub-menu">

                                <li><span class="submenu_tit"></span>

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

  <div id="indexVideos" class="videos" style="width:1170px; margin:0px auto;">

    <h1 class="videotit"> <strong>招牌推荐</strong> <a href="shangpinxinxilisttp.php">更多></a> </h1>

    <ul class="plist3">
	
		<?php 
			$sql="select * from shangpinxinxi where issh='是' limit 0,4";
			$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
	for($i=0;$i<$rowscount;$i++)
	{
		?>

      <li>

        <div class="pic"> <a class="fancybox-media" href="shangpinxinxidetail.php?id=<?php echo mysql_result($query,$i,id) ?>"></a> <img src="<?php echo mysql_result($query,$i,tupian) ?>" alt="<?php echo mysql_result($query,$i,shangpinmingcheng) ?>"/> </div>

        <div class="tit"> <a href="shangpinxinxidetail.php?id=<?php echo mysql_result($query,$i,id) ?>"><?php echo mysql_result($query,$i,shangpinmingcheng) ?></a> </div>

        <div class="info"> <span class="_name"></span> <span class="_title"><?php echo mysql_result($query,$i,shangpinmingcheng) ?></span> </div>

      </li>
	  <?php
	  }
	 }
	  ?>


    </ul>

  </div>

<div class="content w100" style="background: #fff;">

  <div id="indexNews">

    <div class="newsList">

      <div class="newsbox">

        <h1>本站推荐<a class="more" href="shangpinxinxilisttp.php">更多</a></h1>

	<?php 
			$sql="select * from shangpinxinxi where issh='是' order by id desc  limit 0,3";
			$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
	for($i=0;$i<$rowscount;$i++)
	{
		?>
        <dl><dt style="width:100px;height:61px"> <a href="shangpinxinxidetail.php?id=<?php echo mysql_result($query,$i,id) ?>"><img width="100px" height="61px" src="<?php echo mysql_result($query,$i,tupian) ?>" alt="shangpinxinxidetail.php?id=<?php echo mysql_result($query,$i,id) ?>"/></a> </dt>

            <dd> <strong><a href="shangpinxinxidetail.php?id=<?php echo mysql_result($query,$i,id) ?>"><?php echo mysql_result($query,$i,shangpinmingcheng) ?> （￥:<?php echo mysql_result($query,$i,jiage) ?>元 ）</a></strong> <span><?php echo date("Y-m-d",strtotime(mysql_result($query,$i,"addtime")));?></span> </dd></dl>
	 <?php
	  }
	 }
	  ?>


      </div>

      <div class="newsbox">

        <h1>热销排行<a class="more" href="shangpinxinxilisttp.php">更多</a></h1>

       <?php 
			$sql="select * from shangpinxinxi order by xiaoliang desc limit 0,3";
			$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
	for($i=0;$i<$rowscount;$i++)
	{
		?>
        <dl><dt style="width:100px;height:61px"> <a href="shangpinxinxidetail.php?id=<?php echo mysql_result($query,$i,id) ?>"><img width="100px" height="61px" src="<?php echo mysql_result($query,$i,tupian) ?>" alt="shangpinxinxidetail.php?id=<?php echo mysql_result($query,$i,id) ?>"/></a> </dt>

            <dd> <strong><a href="shangpinxinxidetail.php?id=<?php echo mysql_result($query,$i,id) ?>"><?php echo mysql_result($query,$i,shangpinmingcheng) ?> （￥:<?php echo mysql_result($query,$i,jiage) ?>元 ）</a></strong> <span><?php echo date("Y-m-d",strtotime(mysql_result($query,$i,"addtime")));?></span> </dd></dl>
	 <?php
	  }
	 }
	  ?>

      </div>

      <div class="newsbox">

        <h1>新品上市<a class="more" href="shangpinxinxilist.php">更多</a></h1>

         <?php 
			$sql="select * from shangpinxinxi order by id desc limit 0,3";
			$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
	for($i=0;$i<$rowscount;$i++)
	{
		?>
        <dl><dt style="width:100px;height:61px"> <a href="shangpinxinxidetail.php?id=<?php echo mysql_result($query,$i,id) ?>"><img width="100px" height="61px" src="<?php echo mysql_result($query,$i,tupian) ?>" alt="shangpinxinxidetail.php?id=<?php echo mysql_result($query,$i,id) ?>"/></a> </dt>

            <dd> <strong><a href="shangpinxinxidetail.php?id=<?php echo mysql_result($query,$i,id) ?>"><?php echo mysql_result($query,$i,shangpinmingcheng) ?> （￥:<?php echo mysql_result($query,$i,jiage) ?>元 ）</a></strong> <span><?php echo date("Y-m-d",strtotime(mysql_result($query,$i,"addtime")));?></span> </dd></dl>
	 <?php
	  }
	 }
	  ?>

      </div>

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