<section class="menu">
  <div class="container">
    <ul class="row">
      <a href="<?php the_permalink(6); ?>" class="col-12 col-md-6 col-lg-3">
        <li>
          <div class="menu_title">
            <h4>ROOM</h4>
            <p>お部屋</p>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/room.jpg" alt="#">
          <div class="botton border">
            <p>MORE INFOMATION</p>
          </div>
        </li>
      </a>
      <a href="<?php the_permalink(30); ?>" class="col-12 col-md-6 col-lg-3">
        <li>
          <div class="menu_title">
            <h4>ACTIVITY</h4>
            <p>体験</p>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/スキューバダイビング.jpeg" alt="#">
          <div class="botton border">
            <p>MORE INFOMATION</p>
          </div>
        </li>
      </a>
      <a href="<?php the_permalink(46); ?>" class="col-12 col-md-6 col-lg-3">
        <li>
          <div class="menu_title">
            <h4>RESTAURANT</h4>
            <p>お食事</p>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/food.jpg" alt="#">
          <div class="botton border">
            <p>MORE INFOMATION</p>
          </div>
        </li>
      </a>
      <a href="<?php echo get_permalink(60); ?>" class="col-12 col-md-6 col-lg-3">
        <li>
          <div class="menu_title">
            <h4>RESERVE</h4>
            <p>ご予約・お問い合わせ</p>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/レストラン.jpeg" alt="#">
          <div class="botton border">
            <p>MORE INFOMATION</p>
          </div>
        </li>
      </a>
      <a href="<?php echo get_permalink(70); ?>" class="col-12">
        <li class="access">
          <div class="menu_title">
            <h4>ACCESS</h4>
            <p>アクセス</p>
          </div>
          <div class="address row">
            <div class="col-12 col-md-4">
              <p>〒000−000</br>
                XX県XX市YYY AAA-ZZ
              </p>
              <p>OO島には空港はありません。 </br>
                まずUU本島から主島であるJJ島に飛行機で渡り、JJ港離島ターミナルから高速船、フェリーで移動します。 所要時間は高速船で約10分。 観光フェリーは1日５便を運航しています。
              </p>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d251242.69998547516!2d123.84426667994393!3d10.28837692785239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a99a061bc9db91%3A0xe15c27a22fde07e8!2z44Oe44Kv44K_44Oz5bO2!5e0!3m2!1sja!2sjp!4v1589918630945!5m2!1sja!2sjp" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="col-12 col-md-8"></iframe>
          </div>
          <div class="botton border">
            <p>MORE INFOMATION</p>
          </div>
        </li>
      </a>
    </ul>
  </div>
</section>

<section class="footer_sub">
  <div class="footer_sub_title">
    <p>これはサンプルサイトです</p>
    <h3>SAMPLE RESORT</h3>
  </div>
  <ul>
    <li>Tel 12-3456-7890</li>
    <li>Fax 00-0000-0000</li>
    <li>Time 9:00〜21:00</li>
  </ul>
</section>

<section class="sns container">
  <ul class="sns container">
    <li class="twitter">
      <a href="">
        <span class="fa-stack fa-lg">
          <i class="fas fa-circle fa-stack-2x"></i>
          <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
        </span>
      </a>
    </li>
    <li class="facebook">
      <a href="">
        <span class="fa-stack fa-lg">
          <i class="fas fa-circle fa-stack-2x"></i>
          <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
        </span>
      </a>
    </li>
    <li class="instagram">
      <a href="">
        <span class="fa-stack fa-lg">
          <i class="fas fa-circle fa-stack-2x"></i>
          <i class="fab fa-instagram fa-lg fa-stack-1x fa-inverse"></i>
        </span>
      </a>
    </li>
  </ul>
</section>

<div id="page_top">
  <i class="fas fa-chevron-up"></i>
</div>

<footer>
  <div class="copyright">
    <p>&copy; 2020 株式会社SAMPLE. right reserved.</p>
  </div>
</footer>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js" type="text/javascript"></script>

<?php wp_footer(); ?>
</body>

</html>