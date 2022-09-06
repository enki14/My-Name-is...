<?php get_header(); ?>
<main>
    <div class="cloudy_wrap">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/pc/Group 147.png'); ?>" 
        class="cloud" alt="雲その１">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/pc/Group 147.png'); ?>" 
        class="cloud" alt="雲その２">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/pc/Group 147.png'); ?>" 
        class="cloud" alt="雲その３">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/pc/Group 147.png'); ?>" 
        class="cloud" alt="雲その４">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/pc/Group 147.png'); ?>" 
        class="cloud" alt="雲その５">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/pc/Group 147.png'); ?>" 
        class="cloud" alt="雲その６">
    </div>
    <?php 
        $YesNo = get_field('YorN');
        if($YesNo == 1):
    ?>
        <?php get_template_part('single', 'copy'); ?>
    <?php else: ?>
        <?php get_template_part('single', 'original'); ?>
    <?php endif; ?>
</main>
<?php get_footer(); ?>
