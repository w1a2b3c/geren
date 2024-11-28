<?php ?><?php 
if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}
//错误处理函数示例,函数名勿修改，内容可自行修改
    function MLTools_ErrorHandler_ebfba12891ef4f507d01a92528660fc4($e,$m){

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
