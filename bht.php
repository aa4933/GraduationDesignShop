<link rel="stylesheet" type="text/css" href="css/stylebht.css">

<script type="text/javascript" src="js/koala.min.1.5.js"></script>
<script type="text/javascript">
Qfast.add('widgets', { path: "js/terminator2.2.min.js", type: "js", requires: ['fx'] });  
Qfast(false, 'widgets', function () {
	K.tabs({
		id: 'decoroll2',//焦点图包裹id  
		conId: "decoimg_a2",//大图域包裹id  
		tabId:"deconum2",//小圆点数字提示id
		tabTn:"a",
		conCn: '.decoimg_b2',//大图域配置class       
		auto: 1,//自动播放 1或0
		effect: 'fade',//效果配置
		eType: 'mouseover',// 鼠标事件
		pageBt:true,//是否有按钮切换页码
		bns: ['.prev', '.next'],//前后按钮配置class                          
		interval: 3000// 停顿时间  
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