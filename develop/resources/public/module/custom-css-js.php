<?php if(!empty(get_option('custom_css_pc'))): ?>
<style>
  <?php echo get_option('custom_css_pc'); ?>
</style>
<?php endif; ?>

<?php if(!empty(get_field('カスタムCSS_PC'))): ?>
<style>
  <?php echo get_field('カスタムCSS_PC'); ?>
</style>
<?php endif; ?>

<?php if(!empty(get_option('custom_css_sp'))): ?>
<style>
  @media screen and (max-width: 767px), print {
    <?php echo get_option('custom_css_sp'); ?>
  }
</style>
<?php endif; ?>

<?php if(!empty(get_field('カスタムCSS_SP'))): ?>
<style>
  @media screen and (max-width: 767px), print {
    <?php echo get_field('カスタムCSS_SP'); ?>
  }
</style>
<?php endif; ?>

<?php if(!empty(get_option('custom_js'))): ?>
<script>
  <?php echo get_option('custom_js'); ?>
</script>
<?php endif; ?>

<?php if(!empty(get_field('カスタムJS'))): ?>
<script>
  <?php echo get_field('カスタムJS'); ?>
</script>
<?php endif; ?>