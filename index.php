<div class="layout grid-m">
  <div class="col-main">
    <div class="main-wrap J_TRegion">
      <?php
		$main_modules = array(
			array('id'=>'SlideW920',domId=>'ec_0'),
			array('id'=>'HotSale',domId=>'ec_1'),
			array('id'=>'Action',domId=>'ec_2'),
			array('id'=>'Carousel',domId=>'ec_3'),
			array('id'=>'HotSale',domId=>'ec_4'),
			array('id'=>'Carousel',domId=>'ec_5'),
			array('shortname' => 'shop.autoSpread', 'version' => '1.0-wangpu', domId => "index_01"),
			array('shortname' => 'shop.manualSpread', 'version' => '1.0-wangpu', domId => "index-02"),
			array('shortname' => 'shop.itemRecommend', 'version' => '1.0-wangpu', domId => "index-03"),
		);
		echo include_modules('main-modules', $main_modules);
      ?>
    </div>
  </div>
</div>
