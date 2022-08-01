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
        let blue_top = blue_band.offset().top;
        let yellow_top = yellow_band.offset().top;
        
        // 疑似要素のスタイルをまるっと指定する
        let blue_css = `
            .one_post:nth-of-type(4n+1)::before{
                position: absolute;
                content: "";
                display: inline-block;
                background: #6CA5E8 repeat-x;
                border-radius: 128px 0 0 128px;
                top: 0;
                width: 100%;
                height: 256px;
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
            }
            
            @media screen and (max-width: 920px){
                @keyframes slideIn {
                    0%{
                        transform: translateX(95vw);
                        opacity: 1;
                    }
                    100%{
                        transform: translateX(0);
                        opacity: 1;
                    }
                }
            }

            @media screen and (max-width: 720px){
                .one_post:nth-of-type(4n+1)::before{
                    height: 260px;
                }
            }
        `;
        // styleタグにblue_cssの記述をセットする
        let style = $('<style>');
        style.text(blue_css);

        let yellow_css = `
            .one_post:nth-of-type(4n+3)::before{
                position: absolute;
                content: "";
                display: inline-block;
                background: #EFBA30 repeat-x;
                border-radius: 0 128px 128px 0;
                top: 0;
                width: 100%;
                height: 256px;
                z-index: 1;
                animation: slideOut 1.5s ease-in-out forwards; 
            }

            @keyframes slideOut {
                0%{
                    transform: translateX(-95vw);
                    opacity: 1;
                }
                100%{
                    transform: translateX(-5vw);
                    opacity: 1;
                }
            }

            @media screen and (max-width: 920px){
                @keyframes slideOut {
                    0%{
                        transform: translateX(-95vw);
                        opacity: 1;
                    }
                    100%{
                        transform: translateX(0);
                        opacity: 1;
                    }
                }
            }

            @media screen and (max-width: 720px){
                .one_post:nth-of-type(4n+3)::before{
                    height: 260px;
                }
            }

            @media screen and (max-width: 420px){
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
            }
        `;
        let style_2 = $('<style>');
        style_2.text(yellow_css);


        function moveAnime(b_top, y_top){
            blue_band.each(function(){
                let scroll = $(window).scrollTop();
                let windowHeight = $(window).height();
                if(scroll >= b_top - windowHeight){
                    $('body').append(style);
                }
            });

            yellow_band.each(function(){
                let scroll = $(window).scrollTop();
                let windowHeight = $(window).height();
                if(scroll >= y_top - windowHeight){
                    $('body').append(style_2);
                }
            });

        }

        $(window).scroll(function(){
            moveAnime(blue_top, yellow_top);
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


    // jQuery(function(){
    //     $(window).resize(br_add);

    //     function br_add(){
    //         let x = $(window).width();
    //         let bp = 300;
    //         if(x <= bp){
    //             let comment = $('.error404::before');
    //             comment.text().replace('は', 'は<br>');
    //         }
    //     }
    // });

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

    // contact form 7 送信ボタン押下直後
    jQuery(function(){
        let okWord = 'ありがとうございます' + '<br>' + 'ご指定のアドレスへ自動返信メールを送信しました';
        let ngWord_1 = '入力内容に問題があります' + '<br>' + '確認して再度お試しください';
        let ngWord_2 = 'メッセージの送信に失敗しました' + '<br>' + '後でまたお試しください';

        let okText = $('.modal_content > span');
        let modal = $('.modal');
        let content = $('.modal_content');
        let btn_cls = $('.btn_close');


        $(document).on('wpcf7mailsent', function(event){
            okText.html(okWord);
            modal.addClass('ok_modal');
            content.css('outline','10px solid #6CA5E8');
            btn_cls.css('background','#6CA5E8');
            $('.ok_modal').fadeIn();
            return false;
        });
        $(document).on('wpcf7invalid', function(event){
            okText.html(ngWord_1);
            modal.addClass('ng_modal');
            content.css('outline','10px solid rgb(250, 134, 134)');
            btn_cls.css('background','rgb(250, 134, 134)');
            $('.ng_modal').fadeIn();
            return false;
            
        });
        $(document).on('wpcf7spam', function(event){
            okText.html(ngWord_2);
            modal.addClass('ng_modal');
            content.css('outline','10px solid rgb(250, 134, 134)');
            btn_cls.css('background','rgb(250, 134, 134)');
            $('.ng_modal').fadeIn();
            return false;
        });
        $(document).on('wpcf7mailfailed', function(event){
            okText.html(ngWord_2);
            modal.addClass('ng_modal');
            content.css('outline','10px solid rgb(250, 134, 134)');
            btn_cls.css('background','rgb(250, 134, 134)');
            $('.ng_modal').fadeIn();
            return false;
        });
        $('.js-modal_close, .btn_close').on('click', function(){
            $('.ok_modal, .ng_modal').fadeOut();
            return false;
        });

    });
</script>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>