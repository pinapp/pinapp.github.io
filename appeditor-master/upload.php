<?php

//真实处理图片上传 

//php原生代码图片上传参考： http://www.w3school.com.cn/php/php_file_upload.asp
//thinkphp框架 上传参考：http://doc.thinkphp.cn/manual/upload.html
//laravel yii 大概流程上传流程都一样，具体参考原生代码比较通用。一般框架都有相关类库，直接引入并调用即可。
// 图片上传必须放在，真实域名中才能看到，否则会 报跨域出错。 

//返回数据格式
echo json_encode(array('result' => 'ok','url' => 'https://api.pintuan-xcx.cn/Public/App/default/logo-red.png'));