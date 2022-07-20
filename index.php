<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Name is...</title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <?php wp_nav_menu(array('theme_location'=>'header-navigation')); ?>
        <div class="h_wrap">
            <h1>
                <p class="p_1">ようこそ<br>のりまきさん家へ</p>
                <p class="p_2">このサイトは<br>私のweb制作における作品集<br>および成長日記となります</p>
                <p class="p_3">ホームページを立ち上げたい<br>代わりに作ってほしい</p>
                <p class="p_4">などのご依頼がありましたら<br>どうぞご気軽にお問い合わせください</p>
            </h1>
            
        </div>
    </header>
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
    <footer>
        <div class="f_wrap">
            <ul class="sns_aria">
                <li class="sstw">
                    <a href="https://twitter.com/share?url=<?php echo get_permalink(); ?>&text=<?php echo get_the_title(); ?>"
                    target="_blank" rel="nofollow noopener">
                        <i class="fa-brands fa-twitter fa-lg"></i>
                    </a>
                </li>
                <li class="ssfb">
                    <a href="http://www.facebook.com/share.php?u=<?php echo get_permalink(); ?>"
                    target="_blank" rel="nofollow noopener">
                        <i class="fa-brands fa-facebook-square fa-lg"></i>
                    </a>
                </li>
                <li class="ssins">
                    <a href="#" title="<?php echo get_the_title(); ?>"
                    target="_blank" rel="nofollow noopener">
                        <i class="fa-brands fa-instagram fa-lg"></i>
                    </a>
                </li>
            </ul>
        <p>copyright, My Name is...</p>
        </div>
    </footer>
    <div class="start">
        <div class="moon_wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/images/pc/Ellipse 16.png" alt="月光">
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/images/pc/norimaki.png" 
        class="norimakisan" alt="のりまきさんのロゴ">
        <div class="cloudy_area">
            <img src="<?php echo get_template_directory_uri(); ?>/images/pc/Group 147.png" 
            class="cloudy" alt="雲その１">
            <img src="<?php echo get_template_directory_uri(); ?>/images/pc/Group 147.png" 
            class="cloudy" alt="雲その２">
            <img src="<?php echo get_template_directory_uri(); ?>/images/pc/Group 147.png" 
            class="cloudy" alt="雲その３">
        </div>
    </div>
    <script>

        // 帯がにゅーっと出てくる奴
        jQuery(function(){
            let blue_band = $('.one_post:nth-of-type(4n+1)');
            let yellow_band = $('.one_post:nth-of-type(4n+3)');
            
            // 疑似要素のスタイルをまるっと指定する
            let blue_css = `
                .one_post:nth-of-type(4n+1)::before{
                    position: absolute;
                    content: "";
                    display: inline-block;
                    background: #6CA5E8 repeat-x;
                    border-radius: 175px 0 0 175px;
                    top: 0;
                    width: 100%;
                    height: 350px;
                    z-index: 1;
                    animation: slideIn 1.5s ease-in-out forwards; 
                }

                @keyframes slideIn {
                    0%{
                        transform: translateX(95vw);
                        opacity: 1;
                    }
                    100%{
                        transform: translateX(2vw);
                        opacity: 1;
                    }
                }`;

            let style = $('<style>');
            style.text(blue_css);

            let yellow_css = `
                .one_post:nth-of-type(4n+3)::before{
                    position: absolute;
                    content: "";
                    display: inline-block;
                    background: #EFBA30 repeat-x;
                    border-radius: 0 175px 175px 0;
                    top: 0;
                    width: 100%;
                    height: 350px;
                    z-index: 1;
                    animation: slideOut 1.5s ease-in-out forwards; 
                }

                @keyframes slideOut {
                    0%{
                        transform: translateX(-95vw);
                        opacity: 1;
                    }
                    100%{
                        transform: translateX(-3vw);
                        opacity: 1;
                    }
                }
            `;
            let style_2 = $('<style>');
            style_2.text(yellow_css);


            function moveAnime(){
                blue_band.each(function(){
                    let blue_top = blue_band.offset().top;
                    let scroll = $(window).scrollTop();
                    let windowHeight = $(window).height();
                    if(scroll >= blue_top - windowHeight){
                        $('body').append(style);
                    }
                });

                yellow_band.each(function(){
                    let yellow_top = yellow_band.offset().top;
                    let scroll = $(window).scrollTop();
                    let windowHeight = $(window).height();
                    if(scroll >= yellow_top - windowHeight){
                        $('body').append(style_2);
                    }
                });

            }

            $(window).scroll(function(){
                moveAnime();
            });
        });


        // #about内の山形に変化するアニメーション
        jQuery(function(){
            let a_top = $('.about_top');
            let a_bottom = $('.about_bottom');

            // translateの数値はあくまでその要素の初期値
            let t_mountain = `
                .about_top::before{
                    animation: top_left 1.5s ease-in forwards;
                }
                @keyframes top_left {
                    0%{
                        transform: translateX(-65vw);                   
                    }
                    100%{
                        transform: translateX(0vw);
                    }
                }

                .about_top::after{
                    animation: top_right 1.5s ease-in forwards;
                }
                @keyframes top_right {
                    0%{
                        transform: translateX(32vw);                    
                    }
                    100%{
                        transform: translateX(0vw);
                    }
                }

            `;
            let style_3 = $('<style>');
            style_3.text(t_mountain);


            let b_mountain = `
                .about_bottom::before{
                    animation: bottom_left 1.5s ease-in forwards;
                }
                @keyframes bottom_left {
                    0%{
                        transform: translateX(-65vw);                   
                    }
                    100%{
                        transform: translateX(0vw);
                    }
                }

                .about_bottom::after{
                    animation: bottom_right 1.5s ease-in forwards;
                }
                @keyframes bottom_right {
                    0%{
                        transform: translateX(32vw);                    
                    }
                    100%{
                        transform: translateX(0vw);
                    }
                }
            `;

            let style_4 = $('<style>');
            style_4.text(b_mountain);

            
            function deformation(){
                a_top.each(function(){
                    let a_topTop = a_top.offset().top;
                    let scroll = $(window).scrollTop();
                    let windowHeight = $(window).height();
                    if(scroll >= a_topTop - windowHeight){
                       $('body').append(style_3);
                    }
                });

                a_bottom.each(function(){
                    let a_btmTop = a_bottom.offset().top;
                    let scroll = $(window).scrollTop();
                    let windowHeight = $(window).height();
                    if(scroll >= a_btmTop - windowHeight){
                       $('body').append(style_4);
                    }
                });
            };

            $(window).scroll(function(){
                deformation();
            });

        });

        // 最初のアニメーション
        jQuery(function(){
            $(window).on('load', function(){
                setTimeout(() => {
                    $('.start').fadeIn(300);
                }, 500);
                setTimeout(() => {
                    $('.start').fadeOut(500);
                }, 5000);
            });

        });
    </script>
<?php wp_footer(); ?>
</body>
</html>