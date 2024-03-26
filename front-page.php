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
                <!-- <?php var_dump($header_img) ?> -->
                <img src="<?php echo esc_url($header_img['url']) ?>" alt="<?php echo esc_attr($header_img['alt']) ?>">
                <div class="post_side">
                    <h4><?php the_title() ?></h4>
                    <p><?php the_field('excerpt') ?></p>
                    <a href="<?php the_permalink() ?>">詳しく確認する<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    <div id="updown<?php $header_img["ID"] ?>" class="updown"></div>
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
                このサイトは、Masashiのポートフォリオ集となります。
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
                        <div class="d_line">
                            <dt>開発ツール</dt><dd>Laravel、WordPress、Figma、Photoshopなど</dd>
                        </div>
                    </dl>
                    <dl>
                        <div class="d_line">
                            <dt>Masashi</dt><dd></dd>
                        </div>
                        <div class="d_line">
                            <dt>Twitter</dt><dd>@Masashi87343288</dd>
                        </div>
                        <div class="d_line">
                            <dt>Facebook</dt><dd>https://www.facebook.com/jyakarisuto</dd>
                        </div>
                    </dl>
                </div>
            </article>
            <article class="profile_aria">
                <h4>自己紹介</h4>
                <div class="profile">
                    <p>
                        自身でサイトを立ち上げブログを書いていた時期があり、そこからプログラミングやホームページ作成に興味を持ちました。
                        現在はそれらの技術を仕事に生かすべく、制作した新規サイトやランディングページなどをこちらのサイトに順次アップしております。
                        作成したものはすべて架空のオリジナルであり、掲載されている企業などもすべて架空のものになります。</p>
                    <p>
                        昨今はAIの発達により、それまでの制作方法を改める必要に迫られ、それと同時に生産性に難がある私としてはAIに関連したツールを積極的に活用しながら、
                        スピーディーで質の高い成果物を展開していきたいと考えています
                    </p>
                    <p>
                        私の普段の仕事は介護施設で働く介護スタッフであり、今後もそちらの仕事は継続していくつもりですが、web制作に関する継続的なお仕事も検討しているところです。
                        今後の活動希望としては、未経験者としてweb制作の全体的な流れやクライアントへのニーズにどのように対応しているのかを知ることができるような環境でお仕事ができれば幸いです。
                        特に今はFigmaを使用したWebデザインの仕事に興味があります。Figmaは自分が使い慣れているというのもありますが、今後デザインの様々な分野で重宝するツールと認識しています。
                        <br>これを機にどうぞよろしくお願い致します
                    </p>
                </div>
            </article>
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