<?php
session_start();

?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=gb2312">
<title></title>
<STYLE>.hand{cursor: pointer;}</STYLE>
<script language=javascript>
function changeWin(){
	if(window.parent.forum.cols!="12,*")
	{
		window.parent.forum.cols="12,*";
		document.all.menuSwitch.innerHTML="<img src=images/handmove2.gif class=hand alt=点此处展开菜单！>";
	}
	else
	{
		window.parent.forum.cols="210,*";
		document.all.menuSwitch.innerHTML="<img src=images/handmove.gif class=hand alt=点此处隐藏菜单！>";
	}

}

	  
</script>
</head>
<body topmargin="0" marginheight="0" leftmargin="0" marginwidth="0">
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr> 
    <td width="100%"> <iframe style="height:100%; width:100%; visibility:inherit;" marginwidth=0 marginheight=0 framespacing=0 frameborder=0 scrolling=yes src=mygo.php> 
      </iframe></td>
    <td bgcolor="#FFFFFF"><table border="0" cellpadding="0" cellspacing="0">
        <tr> 
          <td height="1" onClick="changeWin()"><img src="pic/admin/share/shim.gif" width="10" height="1"></td>
        </tr>
        <tr> 
          <td onClick="changeWin()" height="100%" id="menuSwitch"><img src="images/handmove.gif" class="point" alt="点此处隐藏菜单！" style="cursor: pointer;"></td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>
