<?php
session_start();
include_once 'conn.php';
$id=$_GET["id"];
mysql_query("update xinwentongzhi set dianjilv=dianjilv+1 where id=$id");
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>


    <title>内容详细</title>

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

                <dt>内容详细</dt>

                <dd class="current"></dd>

            </dl>

        </div>

    </div>

</div>



<div class="content">

    <div class="about">

        <div class="about_txt">

<?php 
					$sql="select * from xinwentongzhi where id=".$id;
					$query=mysql_query($sql);
					 $rowscount=mysql_num_rows($query);
					  if($rowscount==0)
					  {}
					  else
					  {
					?>
                          <table width="97%" border="0" align="center" cellpadding="3" cellspacing="1" bordercolor="#B8D8E8" class="newsline" style="border-collapse:collapse">
                            <tr>
                              <td height="33" align="center"><span class="STYLE11"><?php echo mysql_result($query,0,"biaoti"); ?> (被点击<?php echo mysql_result($query,0,"dianjilv"); ?>次)</span></td>
                            </tr>
                            <tr>
                              <td height="104"><?php echo mysql_result($query,0,"neirong");?></td>
                            </tr>
                            <tr>
                              <td align="right"><a onClick="javascript:history.back();" style="cursor:pointer;">返回</a></td>
                            </tr>
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









