<?php ?><?php 
if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}
//错误处理函数示例,函数名勿修改，内容可自行修改
    function MLTools_ErrorHandler_5bd4b7cabf83703535864b33d75f5c3c($e,$m){

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
