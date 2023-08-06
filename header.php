<?php 
$YesNo = get_field('YorN');
if($YesNo == 1){
    for($i = 1; $i <= 5; $i++){
        $detail = get_field('detail_'. $i);
        $detail_img = 'detail_img'. $i;
        $url = $detail[$detail_img];
        if(!empty($img)){
            return basic_auth();
        }
    }
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri() .'/images/pc/Exclude.png') ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
    <header>
        <?php if(is_home() || is_front_page()): ?>
            <?php wp_nav_menu(array('theme_location'=>'header-navigation')); ?>
            <div class="h_wrap">
                <p class="p_1">ようこそ<br>浮雲の間へ</p>
                <p class="p_2">このサイトは<br>私のweb制作におけるポートフォリオ集となります</p>
                <p class="p_3">コーディングなどのご依頼がありましたら<br>どうぞご気軽にお問い合わせください</p>
                <p class="p_4">by, カリストの砂</p>
            </div>
        <?php elseif(is_singular('production')): ?>
            <div class="ph_wrap">
                <?php 
                    $header_img = get_field('header_img');
                    if(!empty($header_img)): 
                ?>
                    <img src="<?php echo esc_url($header_img['url']); ?>" alt="<?php echo esc_attr($header_img['alt']); ?>">
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </header>
    