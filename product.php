<?php
session_start();
include_once 'conn.php';
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

<a name="fk" id="fk"></a>

<div class="subNav iscrollAnchor">

    <div class="subNavbox">

        <div class="subNavcont">

            <dl>

                <dt>所有产品</dt>
			
					<?php
						$sql="select leibie,id from shangpinleibie order by id desc limit 0,4";
									$query=mysql_query($sql);
					  $rowscount=mysql_num_rows($query);
					  if($rowscount==0)
					  {}
					  else
					  {
						for($i=0;$i<$rowscount;$i++)
						{
							?>
                <dd ><a href="#miaodian<?php echo mysql_result($query,$i,id)?>"><?php echo mysql_result($query,$i,leibie) ?></a></dd>
 <?php
						  }
						 }
						  ?>
               

                

            </dl>

        </div>

    </div>

</div>

<div class="content">



    <div class="solution w1140">

        <!--多旋翼飞控-->
		
		
					<?php
						$sql="select leibie,id from shangpinleibie order by id desc limit 0,4";
									$query=mysql_query($sql);
					  $rowscount=mysql_num_rows($query);
					  if($rowscount==0)
					  {}
					  else
					  {
						for($i=0;$i<$rowscount;$i++)
						{
							?>
		<a name="miaodian<?php echo mysql_result($query,$i,id)?>" id="miaodian<?php echo mysql_result($query,$i,id)?>"></a>
        <div class="prodata_box">

            <div class="comTit2">

                <h4 class="comTit2_name"><?php echo mysql_result($query,$i,leibie) ?> </h4>

          </div>



            <div class="prodata3_list col3">

<?php
											$sql2="select shangpinmingcheng,id,tupian,jianjie,jiage from shangpinxinxi where leibie='".mysql_result($query,$i,leibie)."' order by id desc limit 0,5";
											$query2=mysql_query($sql2);
					  $rowscount2=mysql_num_rows($query2);
					  if($rowscount2==0)
					  {}
					  else
					  {
						for($i2=0;$i2<$rowscount2;$i2++)
						{
										?>
										
										
		<div class="prodata3_item">		

                    <div class="pic"><a href="shangpinxinxidetail.php?id=<?php echo mysql_result($query2,$i2,id) ?>"><img src="<?php echo mysql_result($query2,$i2,tupian) ?>" alt="" border="0"/></a></div>

                    <div class="tit"><a href="shangpinxinxidetail.php?id=<?php echo mysql_result($query2,$i2,id) ?>"><?php echo mysql_result($query2,$i2,shangpinmingcheng) ?>(￥<?php echo mysql_result($query2,$i2,jiage) ?>)</a></div>

                    <div class="intro"> <?php echo mysql_result($query2,$i2,jianjie) ?></div>		

                    <div class="links">

                

                    </div>

                </div>
				 <?php
						 
						 }
						 }
						  ?>
				

         </div>

           </div>

 <?php
						  }
						 }
						  ?>
                       

        <!--固定翼自驾仪-->

      

      

        <!--行业专用云台-->

    
        <!--专用航拍系统-->


        <!--行业整机系统-->

      

<!--其它产品-->



        <div class="prodata_bot" style="margin-top: 20px;">

<br />

感谢关注零度产品！零度秉持“卓越始于安全，高效源于稳定”的理念，持续为用户奉献更多优质产品。

        </div>



    </div>

</div>



<div class="footer">

  <?php include_once 'qtdown.php';?>

</div>





<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>

<script type="text/javascript" src="js/common.js"></script>



</body>

</html>







