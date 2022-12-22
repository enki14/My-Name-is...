<?php get_header(); ?>
<main>
    <section class="main_header">
        <ul class="sns_aria">
            <li class="sstw">
                <a href="https://twitter.com/share?url=<?php echo get_permalink(); ?>&text=<?php echo get_the_title(); ?>"
                target="_blank" rel="nofollow noopener">
                    <i class="fa-brands fa-twitter fa-xl"></i>
                </a>
            </li>
            <li class="ssfb">
                <a href="http://www.facebook.com/share.php?u=<?php echo get_permalink(); ?>"
                target="_blank" rel="nofollow noopener">
                    <i class="fa-brands fa-facebook-square fa-xl"></i>
                </a>
            </li>
            <li class="ssins">
                <a href="https://www.instagram.com/jyakarisuto?ref=badge" title="<?php echo get_the_title(); ?>"
                target="_blank" rel="nofollow noopener">
                    <i class="fa-brands fa-instagram fa-xl"></i>
                </a>
            </li>
        </ul>
    </section>
    <section id="training">
        <h3>
            <img src="<?php echo esc_url(get_template_directory_uri() .'/images/34/Training.png'); ?>" alt="トレーニング">
        </h3>
        <?php 
            $args = array(
                'post_type' => 'production',
                'posts_per_page' => '-1'
            );

            $pro = new WP_Query($args);
            if($pro->have_posts()): while($pro->have_posts()): $pro->the_post();
                $header_img = get_field('header_img');
        ?>
        <div class="one_post">
            <article>
                <img src="<?php echo esc_url($header_img['url']) ?>" alt="<?php echo esc_attr($header_img['alt']) ?>">
                <div class="post_side">
                    <h4><?php the_title() ?></h4>
                    <p><?php the_field('excerpt') ?></p>
                    <a href="<?php the_permalink() ?>">詳しく確認する<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    <div class="updown"></div>
                </div>
            </article>
        </div>
        <?php        
            endwhile; endif;
            wp_reset_postdata();
        ?>
    </section>
    <section id="about">
        <div class="about_top">
            <div class="top_mountain">
            </div>
        </div>
        <div class="about_wrap">
            <h3>
                <img src="<?php echo esc_url(get_template_directory_uri() .'/images/34/About.png'); ?>" alt="about">
            </h3>
            <p class="a_overview">
                このサイトは、私カリストの砂のポートフォリオ集となります。
                主に、これまでのサイト制作を発信し、また今後も新しい練習素材を更新していくものとなります。
            </p>
            <article>
                <div class="about_img"></div>
                <div class="ab_basic">
                    <dl>
                        <div class="d_line">
                            <dt>サイト</dt><dd>UKIGUMO-X</dd>
                        </div>
                        <div class="d_line">
                            <dt>所在地</dt><dd>東京都中野区</dd>
                        </div>
                        <div class="d_line">
                            <dt>お問い合わせ</dt><dd>jyakarisuto@gmail.com</dd>
                        </div>
                        <div class="d_line">
                            <dt>事業内容</dt><dd>コーディング、CMS導入等</dd>
                        </div>
                    </dl>
                    <dl>
                        <div class="d_line">
                            <dt>カリストの砂</dt><dd></dd>
                        </div>
                        <div class="d_line">
                            <dt>Twitter</dt><dd>@RBtIpvNr6OkIKiX</dd>
                        </div>
                        <div class="d_line">
                            <dt>Facebook</dt><dd>https://www.facebook.com/jyakarisuto</dd>
                        </div>
                    </dl>
                </div>
            </article>
            <div class="profile_aria">
                <h4>自己紹介</h4>
                <p class="profile">個人的なサイト運営からプログラミングやホームページ作成に興味を持ち、3年の月日を経て今に至ります。
                現在は都内の介護施設に勤務。その傍ら専業のフリーランスを目指し
                10年20年を見据えて質の良い開発のために日々精進しております。</p>
            </div>
        </div>
        <div class="about_bottom">
            <div class="bottom_mountain">
            </div>
        </div>
    </section>
    <section id="contact">
        <h3>
            <img src="<?php echo esc_url(get_template_directory_uri() .'/images/34/Contact.png'); ?>" alt="contact">
        </h3>
        <?php echo do_shortcode('[contact-form-7 id="50" title="お問い合わせ"]'); ?>
    </section>
    <div class="modal">
        <div class="modal_bg js-modal_close">
            <div class="modal_content">
                <span></span>
                <button class="btn_close">OK</button>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>