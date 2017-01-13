<?php
    //如果出现乱码，回过头去查看四个方面的内容：1.文件，2.页面，3.请求，4.地址
    header("Access-Control-Allow-Origin:*");
    //乱码
    header('Content-type:text/html;charset=utf-8');
    
    $ch = curl_init();
    $url = 'http://apis.baidu.com/tngou/ask/classify';
    $header = array(
        'apikey: 93f6a5623f11c4d9173020e9321052b8',
    );
    // 添加apikey到header
    curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // 执行HTTP请求
    curl_setopt($ch , CURLOPT_URL , $url);
    $res = curl_exec($ch);
    
   echo $res;
?>