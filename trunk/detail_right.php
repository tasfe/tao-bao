<div  class="insertmodules J_TRegion">
<?php
	$content_modules = array(
		array('shortname' => 'shop.autoSpread', 'version' => '1.0-wangpu', domId => "detail_01"),
		array('shortname' => 'shop.selfDefining', 'version' => '1.0-common', domId => "detail_02"),
		array('id'=>'ItemInfo',domId=>'detail_03')
	);
   echo include_modules('content', $content_modules);
?>
</div>