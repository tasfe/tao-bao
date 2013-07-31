<?php 
//��ȡID           
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

//����HTML��ǩ
function html_filter($str) {
	$search = array ("'<script[^>]*?>.*?</script>'si", // ȥ�� javascript 
	"'<style[^>]*?>.*?</style>'si", // ȥ�� css 
	"'<[/!]*?[^<>]*?>'si", // ȥ�� HTML ��� 
	"'<!--[/!]*?[^<>]*?>'si", // ȥ�� ע�ͱ�� 
	"'([rn])[s]+'", // ȥ���հ��ַ� 
	"'&(quot|#34);'i", // �滻 HTML ʵ�� 
	"'&(amp|#38);'i", 
	"'&(lt|#60);'i", 
	"'&(gt|#62);'i", 
	"'&(nbsp|#160);'i", 
	"'&(iexcl|#161);'i", 
	"'&(cent|#162);'i", 
	"'&(pound|#163);'i", 
	"'&(copy|#169);'i", 
	"'&#(d+);'e"); // ��Ϊ PHP ��������	
	$replace = array ("", 
	"", 
	"", 
	"", 
	"\1", 
	"\"", 
	"&", 
	"<", 
	">", 
	" ", 
	chr(161), 
	chr(162), 
	chr(163), 
	chr(169), 
	"chr(\1)"); 	
	//$str Ϊ��Ҫ�����ַ����������ԴΪ�ļ����� $str = file_get_contents($filename); 
	return preg_replace($search, $replace, $str); 
}

?>
<div class="box J_TBox" <?php echo $_MODULE_TOOLBAR ?>>
<div class="onsale_4" >
    <div class="J_TWidget scrollable"  data-widget-type="Carousel"  data-widget-config="{
			'effect': 'scrollx',
            'easing': 'easeBoth',
            'steps': 4,
            'viewSize': [920],
            'autoplay':true,     
            'circular': true,
            'prevBtnCls': 'prev',
            'nextBtnCls': 'next'
  }">
      <div class="hd">
        <h3><span><? echo $_MODULE['title'];?></span> &nbsp; <? echo $_MODULE['brand'];?></h3>
      </div>
      <div class="bd">
      <div class="ec_grid">
        <div style="position: relative;" class="scroller">
          <ul style="position: absolute; width: 2040px;" class="ks-switchable-content">
            <?		  
//��ȡɸѡ��ʽ
switch ($_MODULE['byWhat'])							  
{
case 1:
  $byWhat = 'hotsell';
  break;
case 2:
  $byWhat = 'ceofp';
  break;
case 3:
  $byWhat = 'newOn';
  break;
case 4:
  $byWhat = 'price';
  break;
case 5:
  $byWhat = '_price';
  break;
default:
  $byWhat = 'hotsell';
}

//�ؼ���
if ($_MODULE['Mode']==1){	
	$ItmeKeyWord=$_MODULE['keyword']; 
	$items  = $itemManager-> queryByKeyword ($ItmeKeyWord,$byWhat,12);
	if (!$items==null)
	{	
		foreach($items as $item )
		{			 
			$tb_title = html_filter($item->title);
			$tb_price = $item->price;
			$tb_imgUrl= $item->getPicUrl(220);
			$tb_itemLink  = $uriManager-> detailURI($item); 
			echo '<li>';
			echo '<a href="'.$tb_itemLink.'" target="_blank"><img style="display: block; float: left;" src="'.$tb_imgUrl.'" />';
			echo '<p class="name">'.$tb_title.'</p><p class="price"><span>RMB</span> <strong>'.$tb_price.'</strong></p></a>';
			echo '</li>';
		}
	}
	else
	{
		for ($i=1;$i<13;$i++) {			
				echo '<li><a href="#" class="product" target="_blank"><img src="assets/images/blank.gif" width="220" height="220" /><p class="desc">δ��ȡ������,����ؼ���.��ȷ���ؼ�����ȷ,��ȴ��Ա�������ͬ������...</p><p class="price"><span>RMB</span>&nbsp;<strong>000.00</strong></p></a></li>';
		}
	}
		

}
//ID
else{	
	for ($i=1;$i<13;$i++)
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
			echo '<li><a href="#" class="product" target="_blank"><img src="assets/images/blank.gif" width="220" height="220" /><p class="desc">δ��ȡ������,����ID.��ȷ��ID��ȷ,��ȴ��Ա�������ͬ������...</p><p class="price"><span>RMB</span>&nbsp;<strong>000.00</strong></p></a></li>';
		}
	}
}

?>
          </ul>
       <span class="prev"><a href="#"><img name="spacer" src="assets/images/blank.gif" width="34" height="34" alt="Prev" /></a></span> <span class="next"><a href="#"><img name="spacer" src="assets/images/blank.gif" width="34" height="34" alt="next" /></a></span>
        <ul class="ks-switchable-nav">
          <li class="ks-active">1</li>
          <li>2</li>
          <li>3</li>
        </ul>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="clear10"></div>