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

Class1 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>����Ա�ʺŹ���</DIV>', ''));
insDoc(Class1, gLnk(1, '<a href=yhzhgl.php target=main>����Ա�ʺŹ���</a>', '', 'images/editinfo.gif'));
insDoc(Class1, gLnk(1, '<a href=yonghuzhuce_list.php target=main>ע���û�����</a>', '', 'images/editinfo.gif'));
Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>վ�����Ź���</DIV>', ''));
insDoc(Class2, gLnk(1, '<a href=xinwentongzhi_add.php?lb=վ������ target=main>���վ������</a>', '', 'images/editinfo.gif'));
insDoc(Class2, gLnk(1, '<a href=xinwentongzhi_list.php?lb=վ������ target=main>����վ������</a>', '', 'images/editinfo.gif'));

Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>��Ʒ������</DIV>', ''));
insDoc(Class2, gLnk(1, '<a href=shangpinleibie_add.php target=main>�����Ʒ���</a>', '', 'images/editinfo.gif'));
insDoc(Class2, gLnk(1, '<a href=shangpinleibie_list.php target=main>������Ʒ���</a>', '', 'images/editinfo.gif'));

Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>��Ʒ��Ϣ����</DIV>', ''));
insDoc(Class2, gLnk(1, '<a href=shangpinxinxi_add.php target=main>�����Ʒ��Ϣ</a>', '', 'images/editinfo.gif'));
insDoc(Class2, gLnk(1, '<a href=shangpinxinxi_list.php target=main>�޸���Ʒ��Ϣ</a>', '', 'images/editinfo.gif'));

insDoc(Class2, gLnk(1, '<a href=shangpinxinxi_kucun.php target=main>����ѯ</a>', '', 'images/editinfo.gif'));


Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>�����鿴</DIV>', ''));
insDoc(Class2, gLnk(1, '<a href=goumaijilu_list.php target=main>�����鿴</a>', '', 'images/editinfo.gif'));

Class2 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>ϵͳ����</DIV>', ''));
insDoc(Class2, gLnk(1, '<a href=liuyanban_list.php target=main>���Թ���</a>', '', 'images/editinfo.gif'));
insDoc(Class2, gLnk(1, '<a href=dx.php?lb=��ϵ���� target=main>��ϵ����</a>', '', 'images/editinfo.gif'));
insDoc(foldersTree, gLnk(1, '<a href=mod.php target=main>�޸�����</a>', '', 'images/pwd.GIF'));
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
