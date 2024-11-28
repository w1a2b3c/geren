<?php ?><?php 
if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}
//错误处理函数示例,函数名勿修改，内容可自行修改
    function MLTools_ErrorHandler_9c3446678dd1bcffb4294c2d5905c6bc($e,$m){

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
return sg_load('E49C7E5AD1D5F970AAQAAAAXAAAABNAAAACABAAAAAAAAAD/LZJGuNQ0P3ZyvZTsMnq4XNUZ9Za62v1CLQoTyT7nMsBcMme8JW2vYXkBnZ6DQalZ1JZY8qRTWKo3/AGdr90oGNwJ4ehTw1xrWWh1Jm9VxH8lZXon+dmanODjqLyT8DegYPs7LDS/eSpTxmO4lRYqZTqI2EqVtmdJl+Mws0K3/ceuAMFnjFvXJ64JjbNcgHJmd5t81LdX1AQSvRe0/bttVuVMEm9nOeWNyheR++G/L/qfAQByrpp/ASedS4OT4GtHnU0Dq4KPGALyEnqI3IO9EUoAAACYAAAAPAyJZOP+pDavmpbyBGLSKkRKvoxB/50s5v9rcNPAboxR4GNq6TcWnjcnEPj6/a965cqdOXbK9h02npfC+GOAXOkJfhwNLVjLb2xSd9vjZMcxh9f1+6WvGdKzxqA05keYOvQ//idtqfz1eCrz4y6tmBNvbK3fUpA7uD+xks7ss5cQ5LLFRGZWiBUUW6za6HD3B16myQmYU3gAAAAA');
