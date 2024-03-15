<?php get_header(); ?>
<!-- page-confirm.php -->
<?php if(is_page('contact-confirm')): ?>
    <main>
        <section id="contact">
            <?php echo do_shortcode('[contact-form-7 id="1992" title="お問い合わせ確認"]'); ?>
        </section>
    </main>
<!-- page-thanks.php -->
<?php elseif(is_page('contact-thanks')): ?>
    <main>
        <section id="contact">
            <div class="thanks">
                <p>お問い合わせありがとうございました。</p>
                <p>内容を確認の上、回答させていただきます。</p>
            </div>
            <div class="p-btnArea">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-submit">トップページへ</a>
            </div>
        </section>
    </main>
<?php endif; ?>
<?php get_footer() ?>
