<div class="onsale_4 box">
  <div class="J_TBox" <?php echo $_MODULE_TOOLBAR ?>>
    <div class="hd">
        <h3><span><?php echo $_MODULE['title'];?></span> &nbsp; <? echo $_MODULE['brand'];?></h3>
    </div>
    <div class="bd">
      <div class="ec_grid">
        <ul class="fixed">
        <?php
			for ($i=1;$i<5;$i++) 
			{
				echo '<li><a href="'.$_MODULE['imglink_'.$i].'" class="product" target="_blank"><img src="'.$_MODULE['imgurl_'.$i].'" width="220" height="220" />
            <p class="act_desc">'.$_MODULE['text_'.$i].'</p>
            </a></li>';
			}
		?>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="clear10"></div>
