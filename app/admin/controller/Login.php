<?php ?><?php 
if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}
//错误处理函数示例,函数名勿修改，内容可自行修改
    function MLTools_ErrorHandler_f39fd2db168a4c4d0395a5b27c1bb48f($e,$m){

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
