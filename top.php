<?php
session_start();

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>无标题文档</TITLE>

<META http-equiv=Content-Type content="text/html; charset=gb2312">
<link href="css.css" type="text/css" rel="stylesheet"/>
		<style type="text/css">	
		li{
	    float:left;
	    margin-right:20px;
	    }
		.STYLE1 {color: #79BDE5}
        </style>

<META content="MSHTML 6.00.2900.6287" name=GENERATOR></HEAD>
<BODY topmargin=0 leftmargin=0 rightmargin=0>
 <table width="100%" height="59" border="0" cellpadding="0" cellspacing="0" background="images/top_bg.gif">
			<tr id="tr">
	            <td align="left" style="height: 34px"><div style=" FONT-SIZE: 23pt; WIDTH: 42%; COLOR: #79BDE5; font-family: 黑体">&nbsp;&nbsp;&nbsp;服装购物网站</div>
              </td>
	        </tr>
         </table>
		<div style="BORDER-RIGHT:#a6c1d9 1px solid; BORDER-TOP:#a6c1d9 1px solid; PADDING-LEFT:5px; BACKGROUND:#e8f3fd; MARGIN-BOTTOM:1px; BORDER-LEFT:#a6c1d9 1px solid; WIDTH:100%; BORDER-BOTTOM:#a6c1d9 1px solid">
			<img src="images/top_men.gif" width="9" height="12">&nbsp;&nbsp;当前用户：
          <span id="lbXM"><?php echo $_SESSION['username'];?></span>,您的权限：<?php echo $_SESSION['cx'];?></div>
			<table width="100%" height="26" border="0" cellpadding="0" cellspacing="0" background="images/menu_bg.gif">
				<tr>
					<td width="3%" align="center" valign=top><img src="images/menu_title.gif" width="16" height="26" border=0></td>
					<td width="87%"><marquee behavior=alternate width=100% scrollAmount=3 >
                    欢迎登陆我系统，希望能给你带来好心情，谢谢合作！此处文字您可以在top.php源码中修改
                    </MARQUEE></td>
					<td width="10%">
					    <a href="logout.php" target="_top">
					        <img src="images/menu_out.gif" id="IMG1" border="0" />
					    </a>
					</td>
				</tr>
			</table>
</BODY></HTML>
