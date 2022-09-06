<?php 
    $img = $_GET['img'];
    var_dump($img);
    
// $basic = array(
//   'User-Agent: My User Agent 1.0',    //ユーザエージェントの指定
//   'Authorization: Basic '.base64_encode('[ID]:[PASS]'),//ベーシック認証([ID]/[PASSWORD])
// );
 
// $options = array(
//   'http' => array(
//     'header' => implode("\r\n", $basic )
//   )
// );
    if((is_user_logged_in())):
        echo esc_url($img);
    else:
        echo esc_url($url_mo);
    endif;
    header('content-type: image/png');
    readfile($img);
?>