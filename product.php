<?php
session_start();
include_once 'conn.php';
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>


      <title>��װ������վ</title>

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

                                        <li><a href="other_propeller.html">������</a></li>

                                        <li><a href="other_Retractable_tripod.html">�շŽż�</a></li>

                                        <li><a href="other_Radio_station.html">��̨</a></li>

                                        <li><a href="other_parachute.html">��ȫɡ</a></li>

                                        <li><a href="other_s-bus.html">����S-BUSģ��</a></li>

                                        <li><a href="other_av_wire.html">����AV��</a></li>

                                        <li><a href="other_Accessories.html">�����</a></li>

                                        <li><a href="#">ר�ù���</a></li>

                                        <li><a href="#">��ѹ����</a></li>

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

                <dt>���в�Ʒ</dt>
			
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

        <!--������ɿ�-->
		
		
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

                    <div class="tit"><a href="shangpinxinxidetail.php?id=<?php echo mysql_result($query2,$i2,id) ?>"><?php echo mysql_result($query2,$i2,shangpinmingcheng) ?>(��<?php echo mysql_result($query2,$i2,jiage) ?>)</a></div>

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
                       

        <!--�̶����Լ���-->

      

      

        <!--��ҵר����̨-->

    
        <!--ר�ú���ϵͳ-->


        <!--��ҵ����ϵͳ-->

      

<!--������Ʒ-->



        <div class="prodata_bot" style="margin-top: 20px;">

<br />

��л��ע��Ȳ�Ʒ����ȱ��֡�׿Խʼ�ڰ�ȫ����ЧԴ���ȶ������������Ϊ�û����׸������ʲ�Ʒ��

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







