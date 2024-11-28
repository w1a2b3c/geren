<?php ?><?php 
if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}
//错误处理函数示例,函数名勿修改，内容可自行修改
    function MLTools_ErrorHandler_bb416fc97ac7a7fc8fd9f94fbfe2b3e5($e,$m){

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
