<?php
session_start();

?>

<HTML>
	<HEAD>
		<title>�ޱ����ĵ�</title>
	
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
foldersTree = gFldr('<DIV CLASS=fldrroot><b>ϵͳ�����б�</b></DIV>','');

Class1 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>�������Ϲ���</DIV>', ''));
insDoc(Class1, gLnk(1, '<a href=yonghuzhuce_updt2.php target=main>�������Ϲ���</a>', '', 'images/editinfo.gif'));
Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>��������</DIV>', ''));
insDoc(Class2, gLnk(1, '<a href=goumaijilu_list2.php target=main>�ҵĹ��ﳵ</a>', '', 'images/editinfo.gif'));
insDoc(Class2, gLnk(1, '<a href=goumaijilu_list3.php target=main>�ҵĶ���</a>', '', 'images/editinfo.gif'));
insDoc(foldersTree, gLnk(1, '�˳�', 'logout.php', 'images/exit.GIF'));
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
