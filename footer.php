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

<?php if(is_home() || is_front_page()): ?>
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
        // styleタグにblue_cssの記述をセットする
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

    jQuery(function(){
        $(document).on('wpcf7mailsent', function(event){
            Swal.fire({
                title: '送信が完了しました。自動返信メールをお送りします。',
                animation: `sentOk 1s linear fowards;
                    @keyframes sentOk {
                        0%{
                            opacity: 0;                    
                        }
                        100%{
                            opacity: 1;
                        }
                    }`,
            });
        });
        $(document).on('wpcf7invalid', function(event){
            alert('入力内容に問題があります。確認して再度お試しください。');
        });
        $(document).on('wpcf7spam', function(event){
            alert('メッセージの送信に失敗しました。後でまたお試しください。');
        });
        $(document).on('wpcf7mailfailed', function(event){
            alert('メッセージの送信に失敗しました。後でまたお試しください。');
        });

    });
</script>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>