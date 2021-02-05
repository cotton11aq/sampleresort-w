<?php get_header(head); ?>
<?php get_header(); ?>


<section class="title_nav container">
  <h2><?php the_title(); ?></h2>
  <?php
  if (is_page('room')) : ?>
    <p>SAMPLEリゾートの広々とした快適な客室をぜひご利用ください。</p>

    <div class="title_name d-flex justify-content-around border-top">
      <a class="btn">ホテル</a>
      <a class="btn">ヴィラ</a>
      <a class="btn">お部屋A</a>
      <a class="btn">お部屋B</a>
    </div>
</section>

<?php elseif (is_page('activity')) : ?>

  <p>SAMPLEリゾートの素敵な体験をぜひご利用ください。</p>

  <div class="title_name d-flex justify-content-around border-top">
    <a class="btn">スキューバダイビング</a>
    <a class="btn">キャニオニング</a>
    <a class="btn">体験A</a>
    <a class="btn">体験B</a>
  </div>
  </section>

  <section class="activity_top">
    <video playsinline autoplay muted loop>
      <source src="<?php echo get_template_directory_uri(); ?>/assets/movie/activity.mp4" type="video/mp4">
    </video>
  </section>

<?php elseif (is_page('restaurant')) : ?>

  <section class="title_nav container">
    <p>SAMPLEリゾートの素敵なお食事をぜひご利用ください。</p>

    <div class="title_name d-flex justify-content-around border-top">
      <a class="btn">ご朝食</a>
      <a class="btn">ご夕食</a>
      <a class="btn">カフェ</a>
      <a class="btn">お食事A</a>
    </div>
  </section>
  <section class="food_list">
    <div class="top_img">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/restaurant/restaurant_top.jpg" alt="">
    </div>

  <?php elseif (is_page('contact')) : ?>

    <section class="contact container">
      <form class="contact_form row">
        <div class="form_field col-12 col-md-6">
          <input id="name" class="input_text js_input" type="text">
          <label class="label" for="name">お名前</label>
        </div>
        <div class="form_field col-12 col-md-6">
          <input id="hurigana" class="input_text js_input" type="text">
          <label class="label" for="hurigana">ふりがな</label>
        </div>
        <div class="form_field col-12 col-md-6">
          <input id="email" class="input_text js_input" type="text">
          <label class="label" for="email">メールアドレス</label>
        </div>
        <div class="form_field col-12 col-md-6">
          <input id="number" class="input_text js_input" type="text">
          <label class="label" for="number">電話番号</label>
        </div>
        <div class="form_field col-12 col-md-6">
          <input id="content" class="input_text js_input" type="text">
          <label class="label" for="content">内容</label>
        </div>
        <div class="form_field col-12 col-md-6">
          <input id="category" class="input_text js_input" type="text">
          <label class="label" for="category">カテゴリー</label>
        </div>
        <div class="form_field col-12">
          <textarea name="message" id="message" class="js_input" placeholder="メッセージ"></textarea>
        </div>
        <div class="botton">
          <p><a href="" class="border">送信する</a></p>
        </div>
      </form>
    </section>



  <?php else : ?>



  <?php endif; ?>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


      <?php the_content(); ?>


  <?php endwhile;
  endif; ?>
  <?php get_footer(); ?>