<?php
session_start();
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$shangpinbianhao=$_POST["shangpinbianhao"];    $shangpinmingcheng=$_POST["shangpinmingcheng"];    $leibie=$_POST["leibie"];    $jiage=$_POST["jiage"];    $faburen=$_POST["faburen"];    $tupian=$_POST["tupian"];    $kucun=$_POST["kucun"];    $xiaoliang=$_POST["xiaoliang"];    $jianjie=$_POST["jianjie"];    
	ischongfu("select id from shangpinxinxi where shangpinbianhao='".$shangpinbianhao."'");
	$sql="insert into shangpinxinxi(shangpinbianhao,shangpinmingcheng,leibie,jiage,faburen,tupian,kucun,xiaoliang,jianjie) values('$shangpinbianhao','$shangpinmingcheng','$leibie','$jiage','$faburen','$tupian','$kucun','$xiaoliang','$jianjie') ";
	mysql_query($sql);
	echo "<script>javascript:alert('��ӳɹ�!');location.href='shangpinxinxi_add.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title><script language="javascript" src="js/hsgrili.js"></script><link rel="stylesheet" href="css.css" type="text/css">
</head>
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
<body>
<p>�����Ʒ��Ϣ�� ��ǰ���ڣ� <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.shangpinbianhao.value==""){alert("��������Ʒ���");document.form1.shangpinbianhao.focus();return false;}    if(document.form1.shangpinmingcheng.value==""){alert("��������Ʒ����");document.form1.shangpinmingcheng.focus();return false;}    if(document.form1.jiage.value==""){alert("������۸�");document.form1.jiage.focus();return false;}    if((/^(\+|-)?(0|[1-9]\d*)(\.\d*[1-9])?$/.test(document.form1.jiage.value))){}else{alert("�۸����������");document.form1.jiage.focus();return false;}    if((/^(\+|-)?(0|[1-9]\d*)(\.\d*[1-9])?$/.test(document.form1.kucun.value))){}else{alert("������������");document.form1.kucun.focus();return false;}    if((/^(\+|-)?(0|[1-9]\d*)(\.\d*[1-9])?$/.test(document.form1.xiaoliang.value))){}else{alert("��������������");document.form1.xiaoliang.focus();return false;}    
}
	function gow()
	{
		location.href='peixunccccailiao_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value;
	}
</script>
 <?php
//islbdq $sql="select * from melieibaoduqubiaoiguo where id=".$_GET["id"];
//islbdq $query=mysql_query($sql);
//islbdq $rowscount=mysql_num_rows($query);
//islbdq if($rowscount>0)
//islbdq {
//islbdq 	lelelelelele
//islbdq }
?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">    
	<tr><td>��Ʒ��ţ�</td><td><input name='shangpinbianhao' type='text' id='shangpinbianhao' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr>    <tr><td>��Ʒ���ƣ�</td><td><input name='shangpinmingcheng' type='text' id='shangpinmingcheng' value='' size='50' style='border:solid 1px #000000; color:#666666'  />&nbsp;*</td></tr>    <tr><td>���</td><td><select name='leibie' id='leibie'><?php getoption("shangpinleibie","leibie")?></select></td></tr>    <tr><td>�۸�</td><td><input name='jiage' type='text' id='jiage' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*&nbsp;����������</td></tr>    <tr><td>�����ˣ�</td><td><input name='faburen' type='text' id='faburen' value='' style='border:solid 1px #000000; color:#666666' /></td></tr>    <tr><td>ͼƬ��</td><td><input name='tupian' type='text' id='tupian' value='' size='50' style='border:solid 1px #000000; color:#666666'  />&nbsp;<a href="javaScript:OpenScript('upfile.php?Result=tupian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a></td></tr>    <tr><td>��棺</td><td><input name='kucun' type='text' id='kucun' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;����������</td></tr>    <tr><td>������</td><td><input name='xiaoliang' type='text' id='xiaoliang' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;����������</td></tr>    <tr><td>��飺</td><td><textarea name='jianjie' cols='50' rows='8' id='jianjie' style='border:solid 1px #000000; color:#666666'></textarea></td></tr>    

    <tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="addnew" value="1" />
        <input type="submit" name="Submit" value="���" onclick="return check();"  style='border:solid 1px #000000; color:#666666' />
      <input type="reset" name="Submit2" value="����" style='border:solid 1px #000000; color:#666666' /></td>
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
			echo "<script>javascript:alert('�Բ��𣬸���Ʒ����Ѿ����ڣ��뻻������Ʒ���!');history.back();</script>";
			exit;
		}
		
	}
?>
</body>
</html>

