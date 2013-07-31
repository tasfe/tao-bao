<div class="box J_TBox" <?php echo $_MODULE_TOOLBAR ?>>
<?
	for ($i=1;$i<5;$i++)
	{
		if(!$_MODULE['item_'.$i.'_title']=='0') 
		{
			echo '<div class="hd"><h3><span>'.$_MODULE['item_'.$i.'_title'].'</span></h3></div>
		 	      <div class="bd"><img src="'.$_MODULE['item_'.$i.'_img'].'" /><br/>'.$_MODULE['item_'.$i.'_cont'].'</div><div class="clear h_10"></div>';
		 }
    }
?>
</div>