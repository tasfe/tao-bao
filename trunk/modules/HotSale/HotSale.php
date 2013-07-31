<?php            
function get_item_id($item_url){
$mode = "/.*\/item_detail\.htm\?item_num_id\=(\d*)\D*/";
$mode2 = "/.*\/item\.htm\?id\=(\d*)\D*/";
if(preg_match_all($mode,$item_url,$arr)){
	return $arr[1][0];
	}
if(preg_match_all($mode2,$item_url,$arr)){
	return $arr[1][0];
	}	
}
?>
<div class="box J_TBox" <?php echo $_MODULE_TOOLBAR ?>>
<div class="onsale_4">
        <div class="hd"><h3><span><?php echo $_MODULE['title'];?></span> &nbsp; <?php echo $_MODULE['brand'];?></h3></div>
        <div class="bd">
            <div class="ec_grid">
                <ul>
                <?php
				for ($i=1;$i<9;$i++)
				{
					$itemID = get_item_id($_MODULE['item_url_'.$i]);
						$item  = $itemManager-> queryById ($itemID);
					if (!$item==null)
					{
						$tb_title = $item->title;
						$tb_price = $item->price;
						$tb_imgUrl= $item->getPicUrl(220);
						$tb_itemLink  = $uriManager-> detailURI($item); 
						
						if ($_MODULE['item_img_'.$i]==''){
							echo '<li><a href="'.$tb_itemLink.'" class="product" target="_blank"><img src="'.$tb_imgUrl.'" width="220" height="220" /><p class="desc">'.$tb_title.'</p><p class="price"><span>RMB</span>&nbsp;<strong>'.$tb_price.'</strong></p></a></li>';
						}else{
							echo '<li><a href="'.$tb_itemLink.'" class="product" target="_blank" style="background-image:url('.$_MODULE['item_img_'.$i].');"><img src="assets/images/blank.gif" width="220" height="220" /><p class="desc">'.$tb_title.'</p><p class="price"><span>RMB</span>&nbsp;<strong>'.$tb_price.'</strong></p></a></li>';
						}
					}
					else
					{
						echo '<li><a href="http://ecafe8.taobao.com" class="product" target="_blank"><img src="assets/images/blank.gif" width="220" height="220" /><p class="desc">Êý¾ÝÎ´¼ÓÔØ...</p><p class="price"><span>RMB</span>&nbsp;<strong>000.00</strong></p></a></li>';
					}
				}
				
				?>
<div class="clear"></div>
                </ul>
            </div>
        </div>
	</div>
</div>
<div class="clear10"></div>