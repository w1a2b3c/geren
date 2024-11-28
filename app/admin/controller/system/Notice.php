<?php ?><?php 
if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}
//错误处理函数示例,函数名勿修改，内容可自行修改
    function MLTools_ErrorHandler_07bf5040c095de8b96fa602a1ef7253e($e,$m){

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
