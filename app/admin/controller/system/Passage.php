<?php ?><?php 
if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}
//错误处理函数示例,函数名勿修改，内容可自行修改
    function MLTools_ErrorHandler_02b5a768056a716384e615cbe90ba356($e,$m){

    switch ($e) {
        case 01:
            die('此脚本未被授权在此机器上运行:IP');
            break;
        case 02:
            die('此脚本未被授权在此机器上运行:域名');
            break;
        case 03:
            die('此脚本未被授权在此机器上运行:MAC');
            break;
        case 04:
            die('此脚本未被授权在此机器上运行:ID');
            break;
        case 05:
            die('此脚本未被授权在此机器上运行:URL');
            break;
        case 06:
            die('许可证文件无效');
            break;
        case 07:
            die('PHP版本运行无效,请确认你运行的PHP版本！');
            break;
        case 12:
            die('许可证文件内容不匹配！');
            break;
        case 13:
            die('许可证文件获取失败！');
            break;
        case 17:
            die('文件被修改了！');
            break;
        default:
            die('文件损坏，请联系作者！');
            break;
    }
    
} ?><?php
return sg_load('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');
