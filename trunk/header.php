<?
$pageLinks =$shopManager->getShopPageLinks();
?>
<div class="ec_header">
<div class="position_fixed">
  <!--<div class="home"><a href="<?=$pageLinks[0]->href;?>">HOME</a></div>-->
  <? 
    $HeaderModules = array(
      array('shortname' => 'shop.searchInShopHead', 'version' => '1.0-common', domId => "header_01"),
      array('shortname' => 'shop.pageBanner', 'version' => '1.0-common', domId => "header_02")
      );
     echo include_modules('HeaderModules', $HeaderModules);
  ?>
  </div>
</div>