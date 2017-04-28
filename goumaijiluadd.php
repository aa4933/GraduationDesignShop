<?php
session_start();
 if($_SESSION["username"]=="")
 {
	echo "<script>javascript:alert('对不起，请您先登陆！');location.href='index.php';</script>";
	exit;
 }
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$shangpinbianhao=$_POST["shangpinbianhao"];
    $shangpinmingcheng=$_POST["shangpinmingcheng"];
    $leibie=$_POST["leibie"];
    $jiage=$_POST["jiage"];
    $kucun=$_POST["kucun"];
    $goumaishuliang=$_POST["goumaishuliang"];
    $goumairen=$_POST["goumairen"];
    $beizhu=$_POST["beizhu"];
    if($kucun<$goumaishuliang)
	{
		echo "<script>javascript:alert('对不起，库存不足，操作失败!');history.back();</script>";
		die;
	}
	//ischongfu("select id from goumaijilu where goumairen='".$goumairen."'");
	$sql="insert into goumaijilu(shangpinbianhao,shangpinmingcheng,leibie,jiage,kucun,goumaishuliang,goumairen,beizhu) values('$shangpinbianhao','$shangpinmingcheng','$leibie','$jiage','$kucun','$goumaishuliang','$goumairen','$beizhu') ";
	mysql_query($sql);
	$sql="update shangpinxinxi set xiaoliang=xiaoliang+$goumaishuliang, kucun=kucun-$goumaishuliang where shangpinbianhao='$shangpinbianhao'";
	mysql_query($sql);
	echo "<script>javascript:alert('操作成功!');location.href='index.php';</script>";
}
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>


<title>购买记录</title><script language="javascript" src="qtimages/qkjs.js"></script><script language="javascript" src="js/hsgrili.js"></script>

    <link rel="stylesheet" href="css/common.css"/>

<meta http-equiv="Content-Type" content="text/html; charset=gb2312" /></head>
<script language="javascript">
	
	
	function OpenScript(url,width,height)
{
  var win = window.open(url,"SelectToSort",'width=' + width + ',height=' + height + ',resizable=1,scrollbars=yes,menubar=no,status=yes' );
}
	function OpenDialog(sURL, iWidth, iHeight)
{
   var oDialog = window.open(sURL, "_EditorDialog", "width=" + iWidth.toString() + ",height=" + iHeight.toString() + ",resizable=no,left=0,top=0,scrollbars=no,status=no,titlebar=no,toolbar=no,menubar=no,location=no");
   oDialog.focus();
}
</script>
<script language="javascript">
	function check()
{
	if(document.form1.shangpinbianhao.value==""){alert("请输入商品编号");document.form1.shangpinbianhao.focus();return false;}
    if(document.form1.shangpinmingcheng.value==""){alert("请输入商品名称");document.form1.shangpinmingcheng.focus();return false;}
    if(document.form1.goumaishuliang.value==""){alert("请输入购买数量");document.form1.goumaishuliang.focus();return false;}
    if((/^(\+|-)?(0|[1-9]\d*)(\.\d*[1-9])?$/.test(document.form1.goumaishuliang.value))){}else{alert("购买数量必需数字型");document.form1.goumaishuliang.focus();return false;}
    if(document.form1.goumairen.value==""){alert("请输入购买人");document.form1.goumairen.focus();return false;}
    
}
	function gow()
	{
		location.href='peixunccccailiao_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value;
	}
</script>
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

                <dt>购买记录</dt>

                <dd class="current"></dd>

            </dl>

        </div>

    </div>

</div>



<div class="content">

    <div class="about">

        <div class="about_txt">

<?php
 $sql="select * from shangpinxinxi where id=".$_GET["id"];
 $query=mysql_query($sql);
 $rowscount=mysql_num_rows($query);
 if($rowscount>0)
 {
 	$shangpinbianhao=mysql_result($query,0,shangpinbianhao);
$shangpinmingcheng=mysql_result($query,0,shangpinmingcheng);
$leibie=mysql_result($query,0,leibie);
$jiage=mysql_result($query,0,jiage);
$kucun=mysql_result($query,0,kucun);

 }
?>
<form id="form1" name="form1" method="post" action="">
<table width="98%" border="0"  align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse" class="newsline">    
	<tr><td>商品编号：</td><td><input name='shangpinbianhao' type='text' id='shangpinbianhao' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr><script language="javascript">document.form1.shangpinbianhao.value='<?php echo $shangpinbianhao?>';</script>
    <tr><td>商品名称：</td><td><input name='shangpinmingcheng' type='text' id='shangpinmingcheng' value='' size='50' style='border:solid 1px #000000; color:#666666'  />&nbsp;*</td></tr><script language="javascript">document.form1.shangpinmingcheng.value='<?php echo $shangpinmingcheng?>';</script>
    <tr><td>类别：</td><td><input name='leibie' type='text' id='leibie' value='' style='border:solid 1px #000000; color:#666666' /></td></tr><script language="javascript">document.form1.leibie.value='<?php echo $leibie?>';</script>
    <tr><td>价格：</td><td><input name='jiage' type='text' id='jiage' value='' style='border:solid 1px #000000; color:#666666' /></td></tr><script language="javascript">document.form1.jiage.value='<?php echo $jiage?>';</script>
    <tr><td>库存：</td><td><input name='kucun' type='text' id='kucun' value='' style='border:solid 1px #000000; color:#666666' /></td></tr><script language="javascript">document.form1.kucun.value='<?php echo $kucun?>';</script>
    <tr><td>购买数量：</td><td><input name='goumaishuliang' type='text' id='goumaishuliang' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*&nbsp;必需数字型</td></tr>
    <tr><td>购买人：</td><td><input name='goumairen' type='text' id='goumairen' value='<?php echo $_SESSION['username'];?>' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr>
    <tr><td>备注：</td><td><textarea name='beizhu' cols='50' rows='8' id='beizhu' style='border:solid 1px #000000; color:#666666'></textarea></td></tr>
    

    <tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="addnew" value="1" />
        <input type="submit" name="Submit" value="确定" onClick="return check();"  style='border:solid 1px #000000; color:#666666;width:50px;' />
      <input type="reset" name="Submit2" value="重置" style='border:solid 1px #000000; color:#666666;width:50px;' /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
<?php
	function ischongfu($sql)
	{
		$query=mysql_query($sql);
 		$rowscount=mysql_num_rows($query);
		if($rowscount>0)
		{
			echo "<script>javascript:alert('对不起，该购买人已经存在，请换其他购买人!');history.back();</script>";
			exit;
		}
		
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










