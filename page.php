<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri() .'/images/pc/Exclude.png') ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
    <div class="wrapper">
    <!-- page-confirm.php -->
    <?php if(is_page('contact-confirm')): ?>
        <header>
            <section id="contact">
                <h3>Confirm</h3>
                <?php echo do_shortcode('[contact-form-7 id="1992" title="お問い合わせ確認"]'); ?>
            </section>
        </header>
        <div class="push"></div>
    <!-- page-thanks.php -->
    <?php elseif(is_page('contact-thanks')): ?>
        <header>
            <section id="contact">
                <h3>Thanks!!</h3>
                <div class="thanks">
                    <p>お問い合わせありがとうございました。</p>
                    <p>内容を確認の上、回答させていただきます。</p>
                </div>
                <div class="p-btnArea">
                    <button class="btn-submit">
                        <a href="<?php echo esc_url(home_url('/')); ?>">トップページへ</a>
                    </button>
                </div>
            </section>
        </header>
        <div class="push"></div>
    <?php endif; ?>
    <?php get_footer() ?>
    </div>
    <?php wp_footer(); ?>
</body>
</html>