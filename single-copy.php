<div class="main_wrap">
    <section class="title_area">
        <h1><?php the_title(); ?><span><?php the_field('create_days'); ?></span></h1>
    </section>
    <article class="midashi_area">
        <img src="<?php echo get_template_directory_uri(); ?>/images/pc/Group 136.png" alt="ポイントの見出し">
        <p><?php the_field('point'); ?></p>
    </article>
    <?php 
        for($i = 1; $i <= 3; $i++):
            $detail = get_field("detail_$i");

            $detail_img = 'detail_img'. $i;
            $detail_img_mo = 'detail_img'. $i . '_mosaic';
            $detail_title = 'detail_title'. $i;
            $detail_desc = 'detail_desc'. $i;
            $img_alt = get_post($detail);
            $alt = get_post_meta($img_alt->ID, '_wp_attachment_image_alt', true);
            if(empty($detail)): else:
    ?>
    <section class="sideByside">
        <?php if($i % 2 == 0): ?>
            <?php if(empty($detail[$detail_title]) && empty($detail[$detail_desc])): else: ?>
                <article class="explain_side">
                    <?php if(empty($detail[$detail_title])): else: ?>
                        <h4><?php echo $detail[$detail_title] ?></h4>
                    <?php endif; ?>
                    <?php if(empty($detail[$detail_desc])): else: ?>
                        <p><?php echo $detail[$detail_desc] ?></p>
                    <?php endif; ?>
                </article>
            <?php endif; ?>
            <?php if(empty($detail[$detail_img])): else: ?>
                <div class="side_img_wrap">
                    <div class="side_img">
                        <img src="<?php 
                            if((is_user_logged_in())):
                                echo $detail[$detail_img];
                            else:
                                echo $detail[$detail_img_mo];
                            endif;
                        ?>" alt="<?php echo $alt; ?>">
                    </div>
                </div>
            <?php endif; ?>
        <?php else: ?>
            <?php if(empty($detail[$detail_img])): else: ?>
                <div class="side_img_wrap">
                    <div class="side_img">
                        <img src="<?php 
                            if((is_user_logged_in())):
                                echo $detail[$detail_img];
                            else:
                                echo $detail[$detail_img_mo];
                            endif;
                        ?>" alt="<?php echo $alt; ?>">
                    </div>
                </div>
            <?php endif; ?>
            <?php if(empty($detail[$detail_title]) && empty($detail[$detail_desc])): else: ?>
                <article class="explain_side">
                    <?php if(empty($detail[$detail_title])): else: ?>
                        <h4><?php echo $detail[$detail_title] ?></h4>
                    <?php endif; ?>
                    <?php if(empty($detail[$detail_desc])): else: ?>
                        <p><?php echo $detail[$detail_desc] ?></p>
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
            $detail_img_mo = 'detail_img'. $i . '_mosaic';
            $detail_title = 'detail_title'. $i;
            $detail_desc = 'detail_desc'. $i;
            if(empty($detail)): else:
    ?>
        <section class="vertical">
            <?php if(empty($detail[$detail_img])): else: ?>
                <div class="top_img_wrap">
                    <div class="top_img">
                        <img src="<?php 
                            if((is_user_logged_in())):
                                echo $detail[$detail_img];
                            else:
                                echo $detail[$detail_img_mo];
                            endif;
                        ?>" alt="<?php echo $alt; ?>">
                    </div>
                </div>
            <?php endif; ?>
            <?php if(empty($detail[$detail_title]) && empty($detail[$detail_desc])): else: ?>
                <article class="explain_bottom">
                    <?php if(empty($detail[$detail_title])): else: ?>
                        <h4><?php echo $detail[$detail_title] ?></h4>
                    <?php endif; ?>
                    <?php if(empty($detail[$detail_desc])): else: ?>
                        <p><?php echo $detail[$detail_desc] ?></p>
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
            <a href="<?php echo $url; ?>">このサイトを見る<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
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
            <a href="<?php echo $github; ?>">ソースコードを確認する<i class="fa-brands fa-github"></i></a>
        <?php endif; ?>
        <?php if(empty($git_text)): else: ?>
            <p><?php echo $git_text; ?></p>
        <?php endif; ?>
        </article>
    <?php endif; ?>
</div>