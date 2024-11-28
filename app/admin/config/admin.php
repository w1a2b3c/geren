<?php ?><?php 
if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}
//错误处理函数示例,函数名勿修改，内容可自行修改
    function MLTools_ErrorHandler_d0bf000fda88008cf1ea005e069b1d1b($e,$m){

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
return sg_load('E49C7E5A7FF58812AAQAAAAXAAAABNAAAACABAAAAAAAAAD/cSxyLrqo4nVEKxnsMWcBgdzvnitxJ/Tp1NokQ3rFQEw7cSmP716wtEy70l0psL2Q6SzKq73+jmkpnzKB5mtBRhIZmxFnBZwnHjvs96uzAEVV3DINYceprtjgaXc+HXi4cpOM0kJ9DuRQT7ZEwdYBdVL6256ilYIu4iywtdG9ecUZGn3AmId+pI7C34B8WF8MAM9DHNFGNHsRoyAGfsUQP6wyASZy6BboHtvmbUX7/dMBw3tyBJUHuHBKLdTCP4YYUac8ZdBwENF66utruDuPaUoAAADIAAAAVVGs0YD8Ts/btaDGuFJt8yWlBjWv8iGRg1TY/bo6lKHnW7pJq4M1vRCqk89jjDXfQ6NeIEKh/Sn8whvifpsEdBDM+iXdKIu4yUnUna2aHTpjHzM7vOrZZTaA2JY6pV9mETBbCsw9CeNQK+lgNWthAonO5MSUYEieLdQYT3aId9otOVK2wKpVuV20saJ8EqHRaO7BsOeyHAyvq7UO8iYnX4v5YOQaHfjve5oKTuVGylaAgMr5QWXOeMYIhOlXTltDJJY+9BQRax4AAAAA');
