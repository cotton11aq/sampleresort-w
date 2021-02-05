

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <header>
      <div class="header_wrapper">
        <div class="header_title">
          <h2><a href="<?php echo home_url() ?>" class="btn">Sample Resort</a></h2>
        </div>
        <div class="header_menu">

          <?php
         $args = array(
          'menu' => 'global-navigation',//管理画面で作成したメニューの名前
          'menu_class' => 'row',//メニューを構成するulタグの名前
          'container' => false,//<ul>タグを囲んでいる<div>タグを削除
        );
        wp_nav_menu($args);
        ?>

        </div>
      </div>
      <div id="menu_icon">
        <div>
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div id="gloval_nav">
          <?php
         $args = array(
          'menu' => 'global-navigation',//管理画面で作成したメニューの名前
          'menu_class' => 'row',//メニューを構成するulタグの名前
          'container' => false,//<ul>タグを囲んでいる<div>タグを削除
        );
        wp_nav_menu($args);
        ?>
      </div>
    </header>