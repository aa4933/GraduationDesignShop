<link rel="stylesheet" type="text/css" href="css/stylebht.css">

<script type="text/javascript" src="js/koala.min.1.5.js"></script>
<script type="text/javascript">
Qfast.add('widgets', { path: "js/terminator2.2.min.js", type: "js", requires: ['fx'] });  
Qfast(false, 'widgets', function () {
	K.tabs({
		id: 'decoroll2',//����ͼ����id  
		conId: "decoimg_a2",//��ͼ�����id  
		tabId:"deconum2",//СԲ��������ʾid
		tabTn:"a",
		conCn: '.decoimg_b2',//��ͼ������class       
		auto: 1,//�Զ����� 1��0
		effect: 'fade',//Ч������
		eType: 'mouseover',// ����¼�
		pageBt:true,//�Ƿ��а�ť�л�ҳ��
		bns: ['.prev', '.next'],//ǰ��ť����class                          
		interval: 3000// ͣ��ʱ��  
	}) 
}) 
</script>
<div id="decoroll2" class="imgfocus">

	<div id="decoimg_a2" class="imgbox">
	 <?php
$sql="select id,biaoti,shouyetupian,id from xinwentongzhi where shouyetupian<>'' order by id desc limit 0,5";
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
for($i=0;$i<5;$i++)
{
		?>

		<div class="decoimg_b2"><a href="gg_detail.php?id=<?php echo mysql_result($query,$i,"id")?>"><img src="<?php echo mysql_result($query,$i,"shouyetupian")?>" title="<?php echo mysql_result($query,$i,"biaoti")?>" ></a></div>
<?php
}
?>
	</div>
	
	<ul id="deconum2" class="num_a2">
		 <?php
$sql="select id,biaoti,shouyetupian,id from xinwentongzhi where shouyetupian<>'' order by id desc limit 0,5";
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
for($i=0;$i<5;$i++)
{
		?>

		<li><a href="javascript:void(0)" hidefocus="true" target="_self"></a></li>
		<?php
}
?>

	</ul>
	
</div>