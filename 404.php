<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My Name is...</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
    <header>
        <a href="<?php echo esc_url(home_url()); ?>">TOPへ戻る</a>
    </header>
    <?php wp_footer(); ?>
</body>