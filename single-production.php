<?php get_header(); ?>
<main>
    <div class="cloudy_wrap">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/pc/Group 147.png'); ?>" 
        class="cloud" alt="雲その１">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/pc/Group 147.png'); ?>" 
        class="cloud" alt="雲その２">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/pc/Group 147.png'); ?>" 
        class="cloud" alt="雲その３">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/pc/Group 147.png'); ?>" 
        class="cloud" alt="雲その４">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/pc/Group 147.png'); ?>" 
        class="cloud" alt="雲その５">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/pc/Group 147.png'); ?>" 
        class="cloud" alt="雲その６">
    </div>
    <div class="main_wrap">
        <section class="title_area">
            <h1><?php the_title(); ?><span><?php the_field('create_days'); ?></span></h1>
        </section>
        <article class="midashi_area">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/images/pc/Group 136.png'); ?>" alt="ポイントの見出し">
            <p><?php the_field('point'); ?></p>
        </article>
        <?php 
            for($i = 1; $i <= 3; $i++):
                $detail = get_field('detail_'. $i);
                
                $detail_img = 'detail_img'. $i;
                $detail_title = 'detail_title'. $i;
                $detail_desc = 'detail_desc'. $i;

                $url = $detail[$detail_img]['url'];
                $alt = $detail[$detail_img]['alt'];
                $title = $detail[$detail_title];
                $desc = $detail[$detail_desc];

                if(empty($detail)): else:
        ?>
        <section class="sideByside">
            <?php if($i % 2 == 0): ?>
                <?php if(empty($title) && empty($desc)): else: ?>
                    <article class="explain_side">
                        <?php if(empty($title)): else: ?>
                            <h4><?php echo $title ?></h4>
                        <?php endif; ?>
                        <?php if(empty($desc)): else: ?>
                            <p><?php echo $desc ?></p>
                        <?php endif; ?>
                    </article>
                <?php endif; ?>
                <?php if(empty($url)): else: ?>
                    <div class="side_img_wrap">
                        <div class="side_img">
                            <img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>">
                        </div>
                    </div>
                <?php endif; ?>
            <?php else: ?>
                <?php if(empty($url)): else: ?>
                    <div class="side_img_wrap">
                        <div class="side_img">
                            <img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>">
                        </div>
                    </div>
                <?php endif; ?>
                <?php if(empty($title) && empty($desc)): else: ?>
                    <article class="explain_side">
                        <?php if(empty($title)): else: ?>
                            <h4><?php echo $title ?></h4>
                        <?php endif; ?>
                        <?php if(empty($desc)): else: ?>
                            <p><?php echo $desc ?></p>
                        <?php endif; ?>
                    </article>
                <?php endif; ?>
            <?php endif; ?>
        </section>
        <?php endif; endfor; ?>
        <div class="sideByside_2">
        <?php 
            for($i = 4; $i <= 5; $i++):
                $detail = get_field("detail_$i");

                $detail_img = 'detail_img'. $i;
                $detail_title = 'detail_title'. $i;
                $detail_desc = 'detail_desc'. $i;

                $url = $detail[$detail_img]['url'];
                $alt = $detail[$detail_img]['alt'];
                $title = $detail[$detail_title];
                $desc = $detail[$detail_desc];

                if(empty($detail)): else:
        ?>
            <section class="vertical">
                <?php if(empty($url)): else: ?>
                    <div class="top_img_wrap">
                        <div class="top_img">
                            <img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>">
                        </div>
                    </div>
                <?php endif; ?>
                <?php if(empty($title) && empty($desc)): else: ?>
                    <article class="explain_bottom">
                        <?php if(empty($title)): else: ?>
                            <h4><?php echo $title ?></h4>
                        <?php endif; ?>
                        <?php if(empty($desc)): else: ?>
                            <p><?php echo $desc ?></p>
                        <?php endif; ?>
                    </article>
                <?php endif; ?>
            </section>
        <?php endif; endfor; ?>
        </div>
        <?php 
            $url_set = get_field('url_set');
            // get_sub_fieldはなぜか効かなかった
            $url = $url_set['url'];
            $url_text = $url_set['url_text'];
            if(empty($url) && empty($url_text)): else:
        ?>

            <article class="url_area">
            <?php if(empty($url)): else: ?>
                <a href="<?php echo esc_url($url); ?>" target="_blank">このサイトを見る<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            <?php endif; ?>
            <?php if(empty($url_text)): else: ?>
                <p><?php echo $url_text; ?></p>
            <?php endif; ?>
            </article>
        <?php endif; ?>
        <?php 
            $git_set = get_field('git_set');
            $github = $git_set['github'];
            $git_text = $git_set['git_text'];
            if(empty($github) && empty($git_text)): else:
        ?>
            <article class="git_area">
            <?php if(empty($github)): else: ?>
                <a href="<?php echo esc_url($github); ?>" target="_blank">ソースコードを確認する<i class="fa-brands fa-github"></i></a>
            <?php endif; ?>
            <?php if(empty($git_text)): else: ?>
                <p><?php echo $git_text; ?></p>
            <?php endif; ?>
            </article>
        <?php endif; ?>
    </div>
    <a href="<?php echo esc_url(home_url('/')) ?>" class="history_back">TOP</a>
</main>
<?php get_footer(); ?>
