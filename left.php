<?php
session_start();

?>

<HTML>
	<HEAD>
		<title>无标题文档</title>
	
		<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
		<link href="css.css" type="text/css" rel="stylesheet">
	</HEAD>
	<body>
		
            <table width="182" height="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#5e85b1">
				<tr>
					<td width="179" valign="top" bgcolor="#e8f3fd" height="100%" >
						<table width="95%" border="0" align="center" cellpadding="0" cellspacing="2" height="100%">
							<tr>
								<td><img src="images/left_top.gif" width="170" height="21"></td>
							</tr>
							<tr>
								<td height="100%">								
                                    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#006699" height="100%">
										<tr>
											<td valign="top" bgcolor="#ffffff" height="100%">
											
<SCRIPT LANGUAGE="JavaScript" SRC="js/treemenu.js"></SCRIPT>
<SCRIPT LANGUAGE="JavaScript" SRC="js/Common.js"></SCRIPT>


<link rel="stylesheet" href="css.css" type="text/css">
<SCRIPT LANGUAGE='JavaScript'>
foldersTree = gFldr('<DIV CLASS=fldrroot><b>系统功能列表</b></DIV>','');

Class1 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>管理员帐号管理</DIV>', ''));
insDoc(Class1, gLnk(1, '<a href=yhzhgl.php target=main>管理员帐号管理</a>', '', 'images/editinfo.gif'));
insDoc(Class1, gLnk(1, '<a href=yonghuzhuce_list.php target=main>注册用户管理</a>', '', 'images/editinfo.gif'));
Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>站内新闻管理</DIV>', ''));
insDoc(Class2, gLnk(1, '<a href=xinwentongzhi_add.php?lb=站内新闻 target=main>添加站内新闻</a>', '', 'images/editinfo.gif'));
insDoc(Class2, gLnk(1, '<a href=xinwentongzhi_list.php?lb=站内新闻 target=main>管理站内新闻</a>', '', 'images/editinfo.gif'));

Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>商品类别管理</DIV>', ''));
insDoc(Class2, gLnk(1, '<a href=shangpinleibie_add.php target=main>添加商品类别</a>', '', 'images/editinfo.gif'));
insDoc(Class2, gLnk(1, '<a href=shangpinleibie_list.php target=main>管理商品类别</a>', '', 'images/editinfo.gif'));

Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>商品信息管理</DIV>', ''));
insDoc(Class2, gLnk(1, '<a href=shangpinxinxi_add.php target=main>添加商品信息</a>', '', 'images/editinfo.gif'));
insDoc(Class2, gLnk(1, '<a href=shangpinxinxi_list.php target=main>修改商品信息</a>', '', 'images/editinfo.gif'));

insDoc(Class2, gLnk(1, '<a href=shangpinxinxi_kucun.php target=main>库存查询</a>', '', 'images/editinfo.gif'));


Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>订单查看</DIV>', ''));
insDoc(Class2, gLnk(1, '<a href=goumaijilu_list.php target=main>订单查看</a>', '', 'images/editinfo.gif'));

Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>系统管理</DIV>', ''));
insDoc(Class2, gLnk(1, '<a href=liuyanban_list.php target=main>留言管理</a>', '', 'images/editinfo.gif'));
insDoc(Class2, gLnk(1, '<a href=dx.php?lb=联系我们 target=main>联系我们</a>', '', 'images/editinfo.gif'));
insDoc(foldersTree, gLnk(1, '<a href=mod.php target=main>修改密码</a>', '', 'images/pwd.GIF'));
insDoc(foldersTree, gLnk(1, '退出', 'logout.php', 'images/exit.GIF'));
initializeDocument(0);</SCRIPT>

					
											</td>
										</tr>										
									</table>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		
	</body>
</HTML>
