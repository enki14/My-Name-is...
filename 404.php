<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
    <header>
        <div class="dark">
            <div class="not_page">
                <p>お探しのページは見つかりませんでした。</p>
            </div>
            <a href="<?php echo esc_url(home_url()); ?>">TOPへ戻る</a>
        </div>
    </header>
    <?php wp_footer(); ?>
</body>