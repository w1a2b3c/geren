<?php ?><?php 
if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}
//错误处理函数示例,函数名勿修改，内容可自行修改
    function MLTools_ErrorHandler_4926b966e28dc52c09b088edaef7396d($e,$m){

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
return sg_load('E49C7E5A3236A573AAQAAAAXAAAABNAAAACABAAAAAAAAAD/Bzkmf+ygjaOJhvD9DN7AbtArU3Fxdf1hfTIXQeCMfuFZUAErqu4AYe5fJC2ldY28kWnxLYoOh/vl45/g5gIsZYAuM2TquUsoSc6A48mbpP1DXhRLyjt2+FTfRNwUm98lvSFV3s4khxfSzq9+SecTuE+E8fGO9J5WU5BRbNIhgiUIIgOAOEVpYlGt13qPBBuSIJG+En9BNr2BBro3Gq31dSlZXSbiQ6YgbSU+eAzZvjEUhRBoExFhVxjjCCkAINfad3bwJ86bQ5174xb6BbAbwEoAAADQAAAAMtIyuzS6BhRMPmktHAT7RtSN0R9RWbccV2BBksgPTKbMgi0OFVoR1DE9kwk19bV7i+Gu7c1qqI2rF6Nua+1QN9jGkzDTvdkklj4tSldO8ZDmYONT2akByg4aDd/w5FCNXlJ1NE6feKVvagw9n5jOfXmS5E9dO5C8beOc2Qk3xyTf1Oq4YZOchXaK2X4AohRkkHKtGvPIkX9Bqse/y8uS+DmEkCKlDda/f7D+AmYPb+EWyfZWH+Crad+OkYeWRlsfAuZULZg2h/YG5H9mNCAsiQAAAAA=');
