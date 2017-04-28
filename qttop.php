 <div class="headerCb">

                    <h1 class="logo"><a href="index.php"><img src="http://www.zerouav.com/images/logo.png" alt="" border="0"/></a></h1>

                    <div class="nav">

                        <ul>

<li><a href='index.php'></a></li>

<li><a class="nav_product" href='product.php'>所有商品</a></li>



<li><a href='userreg.php'>用户注册</a></li>

<li><a href='news.php?lb=站内新闻'>站内新闻</a></li>

<li><a href='lyblist.php'>在线留言</a></li>



<li><a href='dx_detail.php?lb=联系我们'>联系我们</a></li>

<li><a href='login.html'>后台管理</a></li>

                        </ul>

                    </div>

                </div>
 <div id="nav_products" class="nav_products">

                    <div class="row">
					
					
					<?php
						$sql="select leibie from shangpinleibie order by id desc limit 0,4";
									$query=mysql_query($sql);
					  $rowscount=mysql_num_rows($query);
					  if($rowscount==0)
					  {}
					  else
					  {
						for($i=0;$i<$rowscount;$i++)
						{
							?>

                        <div class="nav_col">
                            <ul class="sub-menu">
                                <li><span class="submenu_tit"><?php echo mysql_result($query,$i,leibie) ?></span>
                                    <hr class="submenu_line">
                                    <ul class="sub-menu">
										<?php
											$sql2="select shangpinmingcheng,id from shangpinxinxi where leibie='".mysql_result($query,$i,leibie)."' order by id desc limit 0,5";
											$query2=mysql_query($sql2);
					  $rowscount2=mysql_num_rows($query2);
					  if($rowscount2==0)
					  {}
					  else
					  {
						for($i2=0;$i2<$rowscount2;$i2++)
						{
										?>
                                        <li><a href="shangpinxinxidetail.php?id=<?php echo mysql_result($query2,$i2,id) ?>"><?php echo mysql_result($query2,$i2,shangpinmingcheng) ?></a></li>
                                       <?php
						 
						 }
						 }
						  ?>
                                    </ul>
                                </li>
                            </ul>
                        </div>
					 <?php
						  }
						 }
						  ?>
                       