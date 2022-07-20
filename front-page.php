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
                <a href="#" title="<?php echo get_the_title(); ?>"
                target="_blank" rel="nofollow noopener">
                    <i class="fa-brands fa-instagram fa-xl"></i>
                </a>
            </li>
        </ul>
        <p>取得した認証情報から<br>画像を閲覧することができます</p>
        <button><img src="<?php echo get_template_directory_uri(); ?>/images/22/Auth.png" alt="認証"></button>
    </section>
    <section id="training">
        <h3>
            <img src="<?php echo get_template_directory_uri(); ?>/images/34/Training.png" alt="トレーニング">
        </h3>
        <div class="one_post">
            <article>
                <?php 
                    $args = array(
                        'post_type' => 'production',
                        'posts_per_page' => '-1'
                    );

                    $pro = new WP_Query($args);
                    if($pro->have_posts()): while($pro->have_posts()): $pro->the_post();
                        the_field('excerpt'). '<br>';
                    endwhile; endif;
                    wp_reset_postdata();
                ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/pc/books.png" alt="本">
                <div class="post_side">
                    <h4>プライベートポータルサイト</h4>
                    <p>スーパーマーケットのポイントカード情報を提供するための自主運営のサイトを製作しました</p>
                    <a href="">詳しく確認する<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </article>
        </div>
        <div class="one_post">
            <article>
                <img src="<?php echo get_template_directory_uri(); ?>/images/pc/books.png" alt="本">
                <div class="post_side">
                    <h4>有名ブログサイト模写</h4>
                    <p>某エンジニア系ブログサイトのトップページ、カテゴリーページ、投稿ページの模写制作です。
                    オリジナルのソースコードは基本閲覧なしで制作しています。</p>
                    <a href="">詳しく確認する<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </article>
        </div>
        <div class="one_post">
            <article>
                <img src="<?php echo get_template_directory_uri(); ?>/images/pc/books.png" alt="本">
                <div class="post_side">
                    <h4>LPページ模写　～その１～</h4>
                    <p>携帯電話の料金ブランドをタイアップしたLPページになります。
                    こちらもソースコードの閲覧なしで制作しています。</p>
                    <a href="">詳しく確認する<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </article>
        </div>
        <div class="one_post">
            <article>
                <img src="<?php echo get_template_directory_uri(); ?>/images/pc/books.png" alt="本">
                <div class="post_side">
                    <h4>LPページ模写　～その２～</h4>
                    <p>関東にある女子大学の入学案内ページを模写しました。
                    コードの閲覧なしで制作しています。</p>
                    <a href="">詳しく確認する<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </article>
        </div>
    </section>
    <section id="about">
        <div class="about_top">
            <div class="top_mountain">
            </div>
        </div>
        <div class="about_wrap">
            <h3>
                <img src="<?php echo get_template_directory_uri(); ?>/images/34/About.png" alt="about">
            </h3>
            <p class="a_overview">
                こちらは私、カリストの砂の案件獲得用ポートフォリオサイトとなっております。
                主に、これまでのサイト制作を発信し、また今後も新しい練習素材やお仕事での制作物を可能な限り更新していくものとなります。
            </p>
            <article>
                <div class="about_img"></div>
                <ul>
                    <li>サイト&emsp;&emsp;
                        <span class='d_line'></span>
                        &emsp;&emsp;My Name is...
                    </li>
                    <li>所在地&emsp;&emsp;
                        <span class='d_line'></span>
                        &emsp;&emsp;東京都中野区
                    </li>
                    <li>お問い合わせ&emsp;&emsp;
                        <span class='d_line'></span>
                        &emsp;&emsp;jyakarisuto.gmail.com
                    </li>
                    <li>事業内容&emsp;&emsp;
                        <span class='d_line'></span>
                        &emsp;&emsp;コーディング、CMS導入等
                    </li>
                    <li class="list_space"></li>
                    <li>Callisto&nbsp;no&nbsp;suna</li>
                    <li>Twitter&emsp;&emsp;&emsp;@RBtIpvNr6OkIKiX </li>
                    <li>Facebook&emsp;&emsp;&emsp;https://www.facebook.com/jyakarisuto</li>
                </ul>

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
            <img src="<?php echo get_template_directory_uri(); ?>/images/34/Contact.png" alt="contact">
        </h3>
        <?php echo do_shortcode('[contact-form-7 id="50" title="お問い合わせ"]'); ?>
    </section>
</main>
<?php get_footer(); ?>