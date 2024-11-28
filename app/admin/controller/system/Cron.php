<?php ?><?php 
if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}
//错误处理函数示例,函数名勿修改，内容可自行修改
    function MLTools_ErrorHandler_d94717669c82eb82a5ea9a248c2e1de0($e,$m){

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
