<div style="top:<? echo $_MODULE['TopHeight']?>%;right:5px;" class="ww">
	<div class="float_bd  J_TBox" style="right:0px;" <?php echo $_MODULE_TOOLBAR ?>>
    	<h2 class="bg_fdcf71_ff8400">在线客服</h2>
        <ul>
<?
for ($i=1;$i<5;$i++) {	
	if (!$_MODULE['Group_'.$i.'_Title']==0){
		$Title = $_MODULE['Group_'.$i.'_Title'];
		echo'<h3>'.$Title.'</h3>';
		$Ids = explode(",",$_MODULE['Group_'.$i.'_Ids']);
		$Names = explode(",",$_MODULE['Group_'.$i.'_Names']);
		for ($n=0;$n<count($Ids);$n++) {
			if ($_MODULE['Mode']==1) 
			{
				echo '<li><span class="J_WangWang"  data-nick="'.$Ids[$n].'" data-icon="large" data-display="inline"></span></li>';
			}else
			{			
				echo '<li><span class="J_WangWang"  data-nick="'.$Ids[$n].'" data-icon="small" data-display="inline">'.$Names[$n].'</span></li>';
			}
		}
	}
}
?>
        </ul>
        <div class="addfav">
          <a href="<? echo $uriManager->favoriteLink();?>" target="_blank">加入收藏</a>
        </div>
        <div class="top">
          <a href="#">回到顶部</a>
        </div>
    </div>
</div>