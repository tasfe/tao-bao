<?
$imgHeight = $_MODULE['imgHeight'];
$imgShadowHeight = $_MODULE['imgHeight']+27;
?>


<div style="height:<? echo $imgShadowHeight;?>px;" class="ad_920 box J_TBox" <?php echo $_MODULE_TOOLBAR ?>>
  <div style="position: relative;height:<? echo $imgHeight;?>px;" class="ec_slide_ad920 J_TWidget"  data-widget-type="Slide"  data-widget-config="{
          'effect': '<?=$_MODULE['showMode'];?>',
          'duration': 1.2,
          'autoplay': true
    }">
    <ul style="position: absolute;height:<? echo $imgHeight;?>px;" class="ks-switchable-content">
      <? 
    for ($i = 1; $i<$_MODULE['imgNumb']+1; $i++) {
        echo '<li><a href="'.$_MODULE['imglink_' . $i].'" target="_blank"><img  src="'.$_MODULE['imgurl_' . $i].'" style="height:'. $imgHeight.'px;" /></a></li>';
    }
    ?>
    </ul>
    <ul class="ks-switchable-nav" style=" <? if($_MODULE['isNav']==0){	
		echo 'display:none;';
	}else{
		echo 'display:block;';
	}?> ">
      <?
      for ($i=1;$i<$_MODULE['imgNumb']+1;$i++){
          echo'			
    <li>
      <div class="ks-switchable-trigger-mask"></div>
      <div class="ks-switchable-trigger-content">'.$i.'</div>
    </li>';
      }
    ?>
    </ul>
  </div>
</div>
<div class="clear10"></div>
