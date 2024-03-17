<?php get_header(); ?>
<main>
    <section class="main_header">
        <ul class="sns_aria">
            <li class="sstw">
                <a href="https://twitter.com/share?url=<?php echo get_permalink(); ?>&text=<?php echo get_the_title(); ?>"
                target="_blank" rel="nofollow noopener">
                    <i class="fa-brands fa-x-twitter fa-xl"></i>
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
    <section class="top_section" id="training">
        <h3>Training</h3>
        <?php 
            $args = array(
                'post_type' => 'production',
                'posts_per_page' => '-1'
            );
            $counter = 0;

            $pro = new WP_Query($args);
            if($pro->have_posts()): while($pro->have_posts()): $pro->the_post(); $counter++;
                $header_img = get_field('header_img');
        ?>
        <div class="one_post">
            <article>
                <?php if ($counter <= 1): ?>
                    <p class="new_tag">NEW</p>
                <?php endif; ?>
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
    <section class="top_section" id="about">
        <div class="about_top">
            <div class="top_mountain">
            </div>
        </div>
        <div class="about_wrap">
            <h3>About</h3>
            <p class="a_overview">
                このサイトは、私カリストの砂のポートフォリオ集となります。
                主に、これまでのサイト制作を発信し、また今後も新しい練習素材を更新していくものとなります。
            </p>
            <article>
                <div class="about_img"></div>
                <div class="ab_basic">
                    <dl>
                        <div class="d_line">
                            <dt>サイト</dt><dd>うきぐも-X</dd>
                        </div>
                        <div class="d_line">
                            <dt>所在地</dt><dd>東京都中野区</dd>
                        </div>
                        <div class="d_line">
                            <dt>お問い合わせ</dt><dd>jyakarisuto@gmail.com</dd>
                        </div>
                        <div class="d_line">
                            <dt>制作事例</dt><dd>webデザイン、コーディング、CMS導入</dd>
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
                <p class="profile">個人的なサイト運営からプログラミングやホームページ作成に興味を持ち、4年の月日を経て今に至ります。
                現在は都内の介護施設に勤務。その傍ら専業のフリーランスを目指し
                10年20年を見据えて質の良い開発のために日々精進しております。</p>
            </div>
        </div>
        <div class="about_bottom">
            <div class="bottom_mountain">
            </div>
        </div>
    </section>
    <section class="top_section" id="contact">
        <h3>Contact</h3>
        <?php echo do_shortcode('[contact-form-7 id="50" title="お問い合わせ"]'); ?>
    </section>
</main>
<?php get_footer(); ?>