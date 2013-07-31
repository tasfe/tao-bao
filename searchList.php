<div class="layout grid-m">
  <div class="col-main">
    <div class="main-wrap J_TRegion">
      <?php
		$main_modules = array(
			array('id'=>'Carousel',domId=>'search_1'),
			array('shortname' => 'shop.searchList', 'version' => '1.0-wangpu', domId => "search_2")
			//array('shortname' => 'shop.manualSpread', 'version' => '1.0-wangpu', domId => "index-02"),
			//array('shortname' => 'shop.itemRecommend', 'version' => '1.0-wangpu', domId => "index-03")
		);
		echo include_modules('main-modules', $main_modules);
      ?>
    </div>
  </div>
</div>