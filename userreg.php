<?php 
include_once 'conn.php';
session_start();

$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	
	$zhanghao=$_POST["zhanghao"];$mima=$_POST["mima"];$xingming=$_POST["xingming"];$xingbie=$_POST["xingbie"];$diqu=$_POST["diqu"];$Email=$_POST["Email"];$zhaopian=$_POST["zhaopian"];$shouji=$_POST["shouji"];
	$sql="select id from yonghuzhuce where zhanghao='".$zhanghao."'";
	$query=mysql_query($sql);
	$rowscount=mysql_num_rows($query);
	if($rowscount>0)
	{
		echo "<script>javascript:alert('�Բ��𣬸��˺��Ѿ����ڣ��뻻�����˺����ԣ���');history.back();</script>";
	}
	else
	{
		$sql="insert into yonghuzhuce(zhanghao,mima,xingming,xingbie,diqu,Email,zhaopian,shouji) values('$zhanghao','$mima','$xingming','$xingbie','$diqu','$Email','$zhaopian','$shouji') ";
		mysql_query($sql);
		
		echo "<script>javascript:alert('ע��ɹ�!�������Ա��˺󷽿�������½��');location.href='index.php';</script>";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>


    <title>�û�ע��</title>

    <link rel="stylesheet" href="/css/common.css"/>
<script language="javascript">
	function check()
{
	if(document.form1.zhanghao.value==""){alert("�������˺�");document.form1.zhanghao.focus();return false;}
	if(document.form1.mima.value==""){alert("����������");document.form1.mima.focus();return false;}
	if(document.form1.mima.value!=document.form1.mima2.value){alert("�Բ����������벻һ�£�������");document.form1.mima.focus();return false;}
	if(document.form1.xingming.value==""){alert("����������");document.form1.xingming.focus();return false;}
	if(document.form1.Email.value==""){alert("������Email");document.form1.Email.focus();return false;}
	if(document.form1.zhaopian.value==""){alert("��������Ƭ");document.form1.zhaopian.focus();return false;}
	var strEmail = document.getElementById("Email").value;  
  var reg = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
  var email_Flag = reg.test(strEmail);
  if(email_Flag){
  
  }
  else{
   alert("�Բ���������������ַ��ʽ����");
   return false;
  }

}
	
</script>
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

                <dt>�û�ע��</dt>

                <dd class="current"></dd>

            </dl>

        </div>

    </div>

</div>



<div class="content">

    <div class="about">

        <table width="100%" height="274" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#ADCEEF" style="border-collapse:collapse" >
                          <form name="form1" method="post" action="">
                            <tr>
                              <td>�˺ţ�</td>
                              <td><input name='zhanghao' type='text' id='zhanghao' value='' />
                                &nbsp;*</td>
                            </tr>
                            <tr>
                              <td>���룺</td>
                              <td><input name='mima' type='password' id='mima' value='' />
                                &nbsp;* ȷ�����룺
                                <input name='mima2' type='password' id='mima2' value='' /></td>
                            </tr>
                            <tr>
                              <td>������</td>
                              <td><input name='xingming' type='text' id='xingming' value='' />
                                &nbsp;*</td>
                            </tr>
							<tr>
                              <td>�ֻ���</td>
                              <td><input name='shouji' type='text' id='shouji' value='' />
                                &nbsp;*</td>
                            </tr>
                            <tr>
                              <td>�Ա�</td>
                              <td><select name='xingbie' id='xingbie'>
                                  <option value="��">��</option>
                                  <option value="Ů">Ů</option>
                              </select></td>
                            </tr>
                            <tr>
                              <td>������</td>
                              <td><select name='diqu' id='diqu'>
                                  <option value="�㽭">�㽭</option>
                                  <option value="����">����</option>
                                  <option value="����">����</option>
                                  <option value="����">����</option>
                              </select></td>
                            </tr>
                            <tr>
                              <td>Email��</td>
                              <td><input name='Email' type='text' id='Email' value='' />
                                &nbsp;*</td>
                            </tr>
                            <tr>
                              <td>��Ƭ��</td>
                              <td><input name='zhaopian' type='text' id='zhaopian' value='' size='50'  />
                                &nbsp;* <a href="javaScript:OpenScript('upfile.php?Result=zhaopian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td><input type="hidden" name="addnew" value="1" />
                                  <input name="Submit" type="submit" class="hsgbutton" onClick="return check();" value="ע��" />
                                  <input name="Submit2" type="reset" class="hsgbutton" value="����" /></td>
                            </tr>
                          </form>
      </table>



        



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









