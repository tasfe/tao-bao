<div class="J_TRegion">
<?php
$sub_modules = array(
	array('id'=>'LeftBookmark',domId=>'detail-left-0'),
	array('shortname' => 'shop.searchInShop', 'version' => '1.0-common', domId => "detail-left-1"),
	array('shortname' => 'shop.itemCategory', 'version' => '1.0-common', domId => "detail-left-2"),
	array('shortname' => 'shop.topList', 'version' => '1.0-common', domId => "detail-left-3")
);
echo include_modules('sub-modules', $sub_modules);
?>
</div>
