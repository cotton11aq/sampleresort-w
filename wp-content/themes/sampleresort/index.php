<?php get_header(head);?>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <header class="para1">
    <div class="logo">
      <p>SampleResort</p>
    </div>
    <ul>
      <li><a href="<?php echo get_permalink(6); ?>" class="btn">お部屋</a></li>
      <li><a href="<?php echo get_permalink(30); ?>" class="btn">体験</a></li>
      <li><a href="<?php echo get_permalink(46); ?>" class="btn">お食事</a></li>
      <li><a href="<?php echo get_permalink(60); ?>" class="btn">ご予約・お問い合わせ</a></li>
      <li><a href="<?php echo get_permalink(70); ?>" class="btn">アクセス</a></li>
      <li><a href="<?php echo home_url(); ?>/category/news/" class="btn">お知らせ</a></li>
    </ul>
  </header>

  <section class="about-wrap">
    <div class="about">
    <h2>特別な、ひとときを。</h2>
      <p>本土からフェリーで10分のところにある、小さな島の、小さなリゾートホテル。</br>目の前には広大な海が広がり、涼しい風が吹き、ヤシの木が気持ちよさそうに揺れています。</br>一歩足を踏み入れた瞬間からいつもの日常とは違う、特別なひとときをお過ごしください。</p>
    </div>
    <div class="fram">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/paolo-nicolello-2gOxKj594nM-unsplash.jpg" alt="">
    </div>
  </section>

  <section class="news container">
    <div class="news_title">
      <h3>NEWS</h3>
      <p>お知らせ</p>
    </div>
    <table id="news_list" class="table table-borderless">
    
    <?php if(have_posts()): while(have_posts()): the_post();?> 
  
<?php get_template_part('template-parts/loop','news'); ?>

<?php endwhile; endif; ?>
    </table>
      
<div class="botton">
      <p><a href="<?php echo home_url(); ?>/category/news/" class="border">VIEW MORE</a></p>
    </div>
  </section>

  <div class="picture"></div>

<?php get_footer(); ?>