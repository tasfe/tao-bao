<div class="layout grid-m" style="text-align:left; border-bottom:#d8d8d8 1px solid;">
  <div class="box J_TBox" <?php echo $_MODULE_TOOLBAR ?>>
    <div class="onsale_4">
      <div class="hd">
        <h3><span><?php echo $_MODULE['title'];?></span>
          &nbsp;
          <?php echo $_MODULE['brand'];?></h3>
      </div>
      <div class="bd notice">
        <!-- 右 -->
        <div class="notice_right">
          <h2><?php echo $_MODULE['Introduction_Title'];?></h2>
          <div class="intro_cont"><?php echo $_MODULE['Introduction'];?></div>
          <div class="add_fav">
            <div class="siteurl"><?php echo 'shop'.$_shop->id.'.taobao.com'  ?></div>
            <div class="btn">
              <a href="<?php echo $uriManager->favoriteLink(); ?>" target="_blank">加入收藏</a>
            </div>
          </div>
        </div>
        <!-- 中 -->
        <div class="notice_mid">
          <div class="orange_box">
            <h2><?php echo $_MODULE['Notice_Title'];?></h2>
            <p><?php echo $_MODULE['Notice'];?></p>
          </div>
          <div class="orange_triangle"></div>
        </div>
        
        <!-- 左 -->
        <div class="notice_left">
          <h2><?php echo $_MODULE['ACT_Title_1'];?></h2>
          <div class="cont">
            <p><?php echo $_MODULE['ACT_Cont_1'];?></p>
          </div>
          <span class="fr more">
          <a href="<?php echo $_MODULE['ACT_Link_1'];?>" target="_blank">&raquo;&nbsp;More</a>
          </span>
          <div class="clear10" style="border-bottom:#d8d8d8 1px dotted; margin-bottom:10px;"></div>
          <h2><?php echo $_MODULE['ACT_Title_2'];?></h2>
          <div class="cont">
            <p><?php echo $_MODULE['ACT_Cont_2'];?></p>
          </div>
          <span class="fr more">
          <a href="<?php echo $_MODULE['ACT_Link_2'];?>" target="_blank">&raquo;&nbsp;More</a>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>
