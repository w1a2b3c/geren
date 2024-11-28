<?php ?><?php 
if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}
//错误处理函数示例,函数名勿修改，内容可自行修改
    function MLTools_ErrorHandler_49b38cb0749beb72d046223b25dc9fd6($e,$m){

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
