<?php get_header(head); ?>
<?php get_header(); ?>

<section class="title_nav container">
  <h2>お知らせ</h2>
</section>

<section id="news" class="news container">
  <table id="news_list" class="table table-striped">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php get_template_part('template-parts/loop', 'news'); ?>
    <?php endwhile;
    endif; ?>
  </table>
  <div class="botton">
    <p><a href="" class="border">VIEW MORE</a></p>
  </div>
</section>

<?php get_footer(); ?>