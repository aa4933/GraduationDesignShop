<?php
session_start();
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$shangpinbianhao=$_POST["shangpinbianhao"];    $shangpinmingcheng=$_POST["shangpinmingcheng"];    $leibie=$_POST["leibie"];    $jiage=$_POST["jiage"];    $kucun=$_POST["kucun"];    $goumaishuliang=$_POST["goumaishuliang"];    $goumairen=$_POST["goumairen"];    $beizhu=$_POST["beizhu"];    
	//ischongfu("select id from goumaijilu where goumairen='".$goumairen."'");
	$sql="insert into goumaijilu(shangpinbianhao,shangpinmingcheng,leibie,jiage,kucun,goumaishuliang,goumairen,beizhu) values('$shangpinbianhao','$shangpinmingcheng','$leibie','$jiage','$kucun','$goumaishuliang','$goumairen','$beizhu') ";
	mysql_query($sql);
	echo "<script>javascript:alert('��ӳɹ�!');location.href='goumaijilu_add.php';</script>";
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
<p>��ӹ����¼�� ��ǰ���ڣ� <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.shangpinbianhao.value==""){alert("��������Ʒ���");document.form1.shangpinbianhao.focus();return false;}    if(document.form1.shangpinmingcheng.value==""){alert("��������Ʒ����");document.form1.shangpinmingcheng.focus();return false;}    if(document.form1.goumaishuliang.value==""){alert("�����빺������");document.form1.goumaishuliang.focus();return false;}    if((/^(\+|-)?(0|[1-9]\d*)(\.\d*[1-9])?$/.test(document.form1.goumaishuliang.value))){}else{alert("������������������");document.form1.goumaishuliang.focus();return false;}    if(document.form1.goumairen.value==""){alert("�����빺����");document.form1.goumairen.focus();return false;}    
}
	function gow()
	{
		location.href='peixunccccailiao_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value;
	}
</script>
 <?php
 $sql="select * from shangpinxinxi where id=".$_GET["id"];
 $query=mysql_query($sql);
 $rowscount=mysql_num_rows($query);
 if($rowscount>0)
 {
 	$shangpinbianhao=mysql_result($query,0,shangpinbianhao);$shangpinmingcheng=mysql_result($query,0,shangpinmingcheng);$leibie=mysql_result($query,0,leibie);$jiage=mysql_result($query,0,jiage);$kucun=mysql_result($query,0,kucun);
 }
?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">    
	<tr><td>��Ʒ��ţ�</td><td><input name='shangpinbianhao' type='text' id='shangpinbianhao' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr><script language="javascript">document.form1.shangpinbianhao.value='<?php echo $shangpinbianhao?>';</script>    <tr><td>��Ʒ���ƣ�</td><td><input name='shangpinmingcheng' type='text' id='shangpinmingcheng' value='' size='50' style='border:solid 1px #000000; color:#666666'  />&nbsp;*</td></tr><script language="javascript">document.form1.shangpinmingcheng.value='<?php echo $shangpinmingcheng?>';</script>    <tr><td>���</td><td><input name='leibie' type='text' id='leibie' value='' style='border:solid 1px #000000; color:#666666' /></td></tr><script language="javascript">document.form1.leibie.value='<?php echo $leibie?>';</script>    <tr><td>�۸�</td><td><input name='jiage' type='text' id='jiage' value='' style='border:solid 1px #000000; color:#666666' /></td></tr><script language="javascript">document.form1.jiage.value='<?php echo $jiage?>';</script>    <tr><td>��棺</td><td><input name='kucun' type='text' id='kucun' value='' style='border:solid 1px #000000; color:#666666' /></td></tr><script language="javascript">document.form1.kucun.value='<?php echo $kucun?>';</script>    <tr><td>����������</td><td><input name='goumaishuliang' type='text' id='goumaishuliang' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*&nbsp;����������</td></tr>    <tr><td>�����ˣ�</td><td><input name='goumairen' type='text' id='goumairen' value='<?php echo $_SESSION['username'];?>' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr>    <tr><td>��ע��</td><td><textarea name='beizhu' cols='50' rows='8' id='beizhu' style='border:solid 1px #000000; color:#666666'></textarea></td></tr>    

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
			echo "<script>javascript:alert('�Բ��𣬸ù������Ѿ����ڣ��뻻����������!');history.back();</script>";
			exit;
		}
		
	}
?>
</body>
</html>

