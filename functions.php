<?PHP

    // <title>と同じ
    add_theme_support('title-tag');

    function theme_enqueue_styles(){
        wp_enqueue_style('style', get_template_directory_uri(), array(), false, 'all');
        wp_enqueue_style('my_styles', get_template_directory_uri().'/css/mystyle.css', array(), '', 'all');
        wp_enqueue_style('awesome_css', '//use.fontawesome.com/releases/v5.15.4/css/all.css', array('my_styles'), '5.15.4', 'all');
        wp_enqueue_style('my_drawer', '//cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css', '', '3.2.2', 'all');
    }
    add_action('wp_enqueue_scripts', 'theme_enqueue_styles');


    function theme_enqueue_scripts(){
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '3.6.0');
        if(is_home() || is_front_page()):
            wp_enqueue_script('custom_script', get_template_directory_uri(). '/bandAnimation.js', array(), '');
        endif;
        wp_enqueue_script('iScroll',  '//cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js', 
        array(), '5.2.0');
        wp_enqueue_script('drawer', '//cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js',
        array(), '3.2.2');
        wp_enqueue_script('awesome_js', '//kit.fontawesome.com/38f9c31fea.js', array(), '');
        wp_enqueue_script('kitcode', '//use.fontawesome.com/releases/v5.15.4/js/all.js', array(), '');
    }
    add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');


    // 管理画面の方でドロワーメニューの中身を設定させる
    function register_my_menu(){
        register_nav_menu('header-navigation', 'Header Navigation');
    }
    add_action('after_setup_theme', 'register_my_menu');


    function gettmplurl($atts, $content = null) {
        return get_template_directory_uri();
    }
    add_shortcode('tmplurl', 'gettmplurl');


    // カスタム投稿タイプのproduction
    function create_post_type(){
        $post_supports = [
            'title', 'editor', 'thumbnail', 'revisions'
        ];

        register_post_type('production', 
            array(
                'label' => '制作物',
                'public' => true,
                'has_archive' => true,
                'hierarchical' => true,
                'menu_position' => 5,
                'supports' => $post_supports
            )
        );

    }
    add_action('init', 'create_post_type');

    // OGP設定
    function my_meta_ogp(){
        if (is_front_page() || is_home() || is_singular()) {
 
            $ogp_image = get_template_directory_uri() . '/pc/Exclude.png';
            $twitter_site = 'RBtIpvNr6OkIKiX';
            $twitter_card = 'summary_large_image';
            $facebook_app_id = '586095538608500';
             
            global $post;
            $ogp_title = '';
            $ogp_description = '';
            $ogp_url = '';
            $html = '';
            if (is_singular()) {
                // 記事＆固定ページ
                setup_postdata($post);
                $ogp_title = $post->post_title;
                $ogp_description = mb_substr(get_the_excerpt(), 0, 100);
                $ogp_url = get_permalink();
                wp_reset_postdata();
            } elseif (is_front_page() || is_home()) {
                // トップページ
                $ogp_title = get_bloginfo('name');
                $ogp_description = get_bloginfo('description');
                $ogp_url = home_url();
            }
             
            // og:type
            $ogp_type = (is_front_page() || is_home()) ? 'website' : 'article';
             
            // og:image
            if (is_singular() && has_post_thumbnail()) {
            $ps_thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
            $ogp_image = $ps_thumb[0];
            }
             
            // head内に出力するOGPタグ
            $html = "\n";
            $html .= '<meta property="og:title" content="' . esc_attr($ogp_title) . '">' . "\n";
            $html .= '<meta property="og:description" content="' . esc_attr($ogp_description) . '">' . "\n";
            $html .= '<meta property="og:type" content="' . $ogp_type . '">' . "\n";
            $html .= '<meta property="og:url" content="' . esc_url($ogp_url) . '">' . "\n";
            $html .= '<meta property="og:image" content="' . esc_url($ogp_image) . '">' . "\n";
            $html .= '<meta property="og:site_name" content="' . esc_attr(get_bloginfo('name')) . '">' . "\n";
            $html .= '<meta name="twitter:card" content="' . $twitter_card . '">' . "\n";
            $html .= '<meta name="twitter:site" content="' . $twitter_site . '">' . "\n";
            $html .= '<meta property="og:locale" content="ja_JP">' . "\n";
             
            if ($facebook_app_id != "") {
                $html .= '<meta property="fb:app_id" content="' . $facebook_app_id . '">' . "\n";
            }
             
            echo $html;
        }
    }
    add_action('wp_head', 'my_meta_ogp');
?>