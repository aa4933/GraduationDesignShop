 <script language="javascript">
function checklog()
{
	if(document.userlog.username.value=="" || document.userlog.pwd1.value=="" || document.userlog.yzm.value=="")
	{
		alert("����������");
		return false;
	}
}
</script><div class="topnav">

            <div class="topnavCont">

                <div class="topMenu">

                    <a href="index.php">��װ������վ</a>

                 <!--  <a href="#">�ҵĹ��ﳵ</a>

                    <a href="#">�û�ע��</a>

                    <a href="#">�ҵ��ղؼ�</a>-->
					
				
				
                    
					 

              </div>
			    <div class="topMenu">
<?php 
					if ($_SESSION['cx']=="" )
					{
				?>
				
                    <table height="30" border="0" cellpadding="0" cellspacing="0">
                      <form name="userlog" method="post" action="userlog_post.php">
                        <tr>
                          <td  height="30" align="left" >�û���
                            <input name="username" type="text" id="username" size="10" style=" height:19px; border:solid 1px #000000; color:#666666">
                            ����
                            <input name="pwd1" type="password" id="pwd1" size="10" style=" height:19px; border:solid 1px #000000; color:#666666">
                            <!--Ȩ�� 
                            <select name="cx" id="cx" style="width:100px; height:20px; border:solid 1px #000000; color:#666666" >
                              <option value="ע���û�">ע���û�</option>
                            </select> -->
                            ��֤��
                          <input name="yzm" type="text" id="yzm" style=" height:20px; border:solid 1px #000000; color:#666666; width:50px" /></td>
                          <td align="left" style="padding-top:10px; padding-left:3px; padding-right:3px;"><img alt="ˢ����֤��" onclick="this.src='code.php?time='+new Date().getTime();" src="code.php?time='+new Date().getTime();" style="cursor:pointer;" /></td>
                          <td align="left"><input type="submit" name="Submit3" value="��½" style=" border:solid 1px #000000; color:#666666; width:60px; height:20px;" onclick="return checklog();" />
                            <input type="button" name="Submit3" value="�һ�����" onclick="javascript:location.href='zmm.php';" style=" border:solid 1px #000000; color:#666666;width:60px; height:20px; display:none" /></td>
                        </tr>
                      </form>
                  </table>
					 <?php 
							}
				  else
				  {
				 ?>
				 <table height="30" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="30" align="left" valign="middle">�û���:<?php echo $_SESSION['username']?>������Ȩ��:
                          <?php echo $_SESSION['cx']?>
                            <input type="button" name="Submit" value="�˳�" onClick="location.href='logout.php';"  style=" border:solid 1px #000000; color:#666666; width:60px; height:20px;">
                            <input type="button" name="Submit2" value="���˺�̨" onClick="location.href='main.php';"  style=" border:solid 1px #000000; color:#666666; width:60px; height:20px;"></td>
                      </tr>
                  </table>
				 <?php
				 }
				 ?>
			  </div>
					
                <div class="language">

                    <a href="index.php">EN</a>

                </div>



            </div>



        </div>
