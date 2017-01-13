<?php
    //如果出现乱码，回过头去查看四个方面的内容：1.文件，2.页面，3.请求，4.地址
    header("Access-Control-Allow-Origin:*");
    //乱码
    header('Content-type:text/html;charset=utf-8');
    
    $ch = curl_init();
    $url = 'http://apis.baidu.com/tngou/cook/classify?id=0';
    $header = array(
        'apikey: e6f087f26f4e6004bd40cd506f999acd',
    );
    // 添加apikey到header
    curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // 执行HTTP请求
    curl_setopt($ch , CURLOPT_URL , $url);
    $res = curl_exec($ch);
    
    echo $res;
?>