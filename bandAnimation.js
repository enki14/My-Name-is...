jQuery(function(){
    // 帯がにゅーっと出てくる奴
    jQuery(function(){
        let bb_1 = $('.one_post:nth-of-type(1)');
        let yb_1 = $('.one_post:nth-of-type(3)');
        let bb_2 = $('.one_post:nth-of-type(5)');
        // let yb_2 = $('.one_post:nth-of-type(7)');
        let bTop_1 = bb_1.offset().top;
        let yTop_1 = yb_1.offset().top;
        let bTop_2 = bb_2.offset().top;
        // let yTop_2 = yb_2.offset().top;
        
        // 疑似要素のスタイルをまるっと指定する
        let bStyle_1 = `
            .one_post:nth-of-type(1)::before{
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
        let bs_1 = $('<style>');
        bs_1.text(bStyle_1);

        let yStyle_1 = `
            .one_post:nth-of-type(3)::before{
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
        let ys_1 = $('<style>');
        ys_1.text(yStyle_1);

        /*********  青帯と黄帯の２巡目 ↓↓↓ ***********/

        let bStyle_2 = `
            .one_post:nth-of-type(5)::before{
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
        let bs_2 = $('<style>');
        bs_2.text(bStyle_2);

        $(window).scroll(function(){
            let scroll = $(window).scrollTop();
            let windowHeight = $(window).height();
            if(scroll >= bTop_1 - windowHeight){
                $('body').append(bs_1);
            }

            if(scroll >= yTop_1 - windowHeight){
                $('body').append(ys_1);
            }

            if(scroll >= bTop_2 - windowHeight){
                $('body').append(bs_2);
            }

        });

    });
});