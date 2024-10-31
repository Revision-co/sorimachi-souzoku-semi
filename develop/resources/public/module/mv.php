<?php
  $pattern = get_option('mv_l');
  $ja = !empty(get_field('日本語')) ? get_field('日本語') : get_the_title();
  $en = get_field('英語');
  $text = get_field('テキスト');
  $center = get_option('mv_center');
  
  $thumb = "";
  if(is_archive() || is_single()) {
    $ja = $post_name;
    $en = $post_enTtl;
    $thumb = !empty($post_img) ? $post_img : get_option('mv_img');
  } elseif(is_404()) {
    $page = get_page_by_path('notfound');

    $args = array(
      'post_type' => 'page',
      'post__in' => [$page->ID],
    );

    $the_query = new WP_Query($args); if($the_query->have_posts()):
      while ($the_query->have_posts()): $the_query->the_post();
        $ja = get_field('日本語');
        $en = get_field('英語');
        $thumb = !empty(wp_get_attachment_url( get_post_thumbnail_id() )) ? wp_get_attachment_url( get_post_thumbnail_id() ) : get_option('mv_img');
      endwhile;
    endif;
    wp_reset_postdata();
  } else {
    $thumb = !empty(wp_get_attachment_url( get_post_thumbnail_id() )) ? wp_get_attachment_url( get_post_thumbnail_id() ) : get_option('mv_img');
  }

?>

<?php if($pattern === 'patternA'): ?>

<section class="c-mv-patternA c-mv c-inner" style="background: <?php echo get_option( 'mv_l_bgc_a' ); ?>">
  <div class="c-mv-patternA__box c-mv__box fEn">
    <?php if(!empty($en)): ?>
    <h1 class="c-mv-patternA__ttl c-mv__ttl" style="color: <?php echo get_option( 'mv_l_fc_a' ); ?>"><?php echo $en ?></h1>
    <?php endif; ?>
    <?php if(!empty($ja)): ?>
    <h5 class="c-mv-patternA__sub c-mv__sub" style="color: <?php echo get_option( 'mv_l_fc_a' ); ?>"><?php echo $ja; ?></small>
    <?php endif; ?>
  </div>
  <figure class="c-mv-patternA__thumb c-mv__thumb">
    <img src="<?php echo $thumb; ?>" alt="" class="">
  </figure>
</section>

<?php elseif($pattern === 'patternB'): ?>

<section class="c-mv-patternB c-mv c-inner" style="background: <?php echo get_option( 'mv_l_bgc_b' ); ?>">
  <div class="c-mv-patternB__box c-mv__box fEn">
    <?php if(!empty($en)): ?>
    <h5 class="c-mv-patternB__sub c-mv__sub" style="color: <?php echo get_option( 'mv_l_fc_b' ); ?>"><?php echo $en ?></small>
    <?php endif; ?>
    <?php if(!empty($ja)): ?>
    <h1 class="c-mv-patternB__ttl c-mv__ttl" style="color: <?php echo get_option( 'mv_l_fc_b' ); ?>"><?php echo $ja; ?></h1>
    <?php endif; ?>
  </div>
  <figure class="c-mv-patternB__thumb c-mv__thumb">
    <img src="<?php echo $thumb; ?>" alt="" class="">
  </figure>
</section>

<?php elseif($pattern === 'patternC'): ?>

<section class="c-mv-patternC c-mv <?php echo $mv_center = !empty($center) ? 'center' : ''; ?>">
  <div class="c-mv-patternC__box c-mv__box fEn c-inner">
    <?php if(!empty($en)): ?>
    <h1 class="c-mv-patternC__ttl c-mv__ttl"><?php echo $en ?></h1>
    <?php endif; ?>
    <?php if(!empty($ja)): ?>
    <h5 class="c-mv-patternC__sub c-mv__sub"><?php echo $ja; ?></small>
    <?php endif; ?>
  </div>
  <figure class="c-mv-patternC__thumb c-mv__thumb">
    <img src="<?php echo $thumb; ?>" alt="" class="">
  </figure>
</section>

<?php elseif($pattern === 'patternD'): ?>

<section class="c-mv-patternD c-mv <?php echo $mv_center = !empty($center) ? 'center' : ''; ?>">
  <div class="c-mv-patternD__box c-mv__box fEn c-inner">
    <?php if(!empty($en)): ?>
    <h5 class="c-mv-patternD__sub c-mv__sub"><?php echo $en ?></small>
    <?php endif; ?>
    <?php if(!empty($ja)): ?>
    <h1 class="c-mv-patternD__ttl c-mv__ttl"><?php echo $ja; ?></h1>
    <?php endif; ?>
  </div>
  <figure class="c-mv-patternD__thumb c-mv__thumb">
    <img src="<?php echo $thumb; ?>" alt="" class="">
  </figure>
</section>

<?php elseif($pattern === 'patternE'): ?>

<section class="c-mv-patternE c-mv" style="background: linear-gradient(to right, <?php echo get_option('mv_c_l_e'); ?>, <?php echo get_option('mv_c_r_e'); ?>);">
  <div class="c-mv-patternE__box c-mv__box fEn c-inner">
    <?php if(!empty($en)): ?>
    <h5 class="c-mv-patternE__sub c-mv__sub"><?php echo $en; ?></small>
    <?php endif; ?>
    <?php if(!empty($ja)): ?>
    <h1 class="c-mv-patternE__ttl c-mv__ttl"><?php echo $ja; ?></h1>
    <?php endif; ?>
  </div>
</section>

<?php elseif($pattern === 'patternF'): ?>

<section class="c-mv-patternF c-mv" style="background: linear-gradient(to right, <?php echo get_option('mv_c_l_f'); ?>, <?php echo get_option('mv_c_r_f'); ?>);">
  <div class="c-mv-patternF__box c-mv__box fEn c-inner">
    <?php if(!empty($en)): ?>
    <h5 class="c-mv-patternD__sub c-mv__sub"><?php echo $en ?></small>
    <?php endif; ?>
    <?php if(!empty($ja)): ?>
    <h1 class="c-mv-patternD__ttl c-mv__ttl"><?php echo $ja; ?></h1>
    <?php endif; ?>
  </div>
</section>

<?php elseif($pattern === 'patternG'): ?>

<section class="c-mv-patternG c-mv">
  <div class="c-mv-patternG__inner c-inner">
    <div class="c-mv-patternG__content">
      <div class="c-mv-patternG__header">
        <h1 class="c-mv-patternG__title"><?php echo $en; ?></h1>
        <h5 class="c-mv-patternG__subtitle"><?php echo $ja; ?></h5>
      </div>
      <?php if(!empty($text)): ?>
      <hr class="c-mv-patternG__separator">
      <div class="c-mv-patternG__text">
        <?php echo $text; ?>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php elseif($pattern === 'patternH'): ?>

<section class="c-mv-patternH c-mv">
  <div class="c-mv-patternH__inner c-inner">
    <div class="c-mv-patternH__content">
      <div class="c-mv-patternH__header">
        <h5 class="c-mv-patternH__subtitle"><?php echo $en; ?></h5>
        <h1 class="c-mv-patternH__title"><?php echo $ja; ?></h1>
      </div>
      <?php if(!empty($text)): ?>
      <hr class="c-mv-patternH__separator">
      <div class="c-mv-patternH__text">
        <?php echo $text; ?>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php endif; ?>