<?PHP 
    function theme_enqueue_styles(){
        // ressはリセットcss
        wp_enqueue_style('ress', '//unpkg.com/ress/dist/ress.min.css', array(), false, 'all');
        wp_enqueue_style('style', get_template_directory_uri(), array(), false, 'all');
        wp_enqueue_style('my_styles', get_template_directory_uri().'/css/mystyle.css', array(), '', 'all');
        wp_enqueue_style('my_drawer', '//cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css', '', '3.2.2', 'all');
    }
    add_action('wp_enqueue_scripts', 'theme_enqueue_styles');


    function theme_enqueue_scripts(){
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '3.6.0');

        wp_enqueue_script('iScroll',  '//cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js', 
        array(), '5.2.0');
        wp_enqueue_script('drawer', '//cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js',
        array(), '3.2.2');
        wp_enqueue_script('sweet_alert', '//cdn.jsdelivr.net/npm/sweetalert2@8', array('jquery'), '');
        wp_enqueue_script('kitcode', '//kit.fontawesome.com/38f9c31fea.js', array(), '');
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


    function create_post_type(){
        $post_supports = [
            'title', 'editor', 'thumbnail', 'revisions'
        ];

        register_post_type('production', 
            array(
                'label' => '制作物',
                'public' => true,
                'has_archive' => true,
                'menu_position' => 5,
                'supports' => $post_supports
            )
        );
    }
    add_action('init', 'create_post_type');

?>