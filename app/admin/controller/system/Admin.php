<?php ?><?php 
if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}
//错误处理函数示例,函数名勿修改，内容可自行修改
    function MLTools_ErrorHandler_f82a0d3134156fa79c6a12dcd286973b($e,$m){

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
