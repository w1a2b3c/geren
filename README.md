# 完整专业版源码
https://zibovip.top/2965.html
## 运行环境


Nignx/Apache/IIS
PHP 7.4
MySQL 5.7

## 一键安装
上传你的代码，站点入口目录设置/public
在浏览器中输入你的域名或IP（例如：zibovip.top）,
安装程序会自动执行安装。期间系统会提醒你输入数据库信息以完成安装，安装完成后建议删除install目录下index.php文件或将其改名。

后台访问地址：
1.域名/admin

安装过程中请牢记您的账号密码！

## 重新安装
1. 清除数据库
2. 删除/public/install/install.lock 文件

## 手动安装
1.创建数据库，倒入数据库文件
数据库文件目录/public/install/install.sql
2.修改数据库连接文件
配置文件路径/.env
~~~
APP_DEBUG = false

[APP]
DEFAULT_TIMEZONE = Asia/Shanghai

[DATABASE]
TYPE = mysql
HOSTNAME = 127.0.0.1
DATABASE = root
USERNAME = root
PASSWORD = 123456
HOSTPORT = 3306
CHARSET = utf8
DEBUG = true
PREFIX = zz_

[ZZ]
# 后台登录验证码开关
CAPTCHA=true

# 后台管理员地址后缀名称
ADMIN = admin

# 静态文件路径前缀
STATIC_PATH = /static/admin

[CACHE]
# 默认缓存驱动
DRIVER = file
# 缓存驱动密码
PASSWORD = 

[LANG]
default_lang = zh-cn

~~~
3.修改目录权限（linux系统）777
/public
/runtime
4.后台登录：
http://域名/admin
默认账号：admin 密码：123456

##监控支持范围

微信：pc监控、app监控
支付宝：pc监控，app监控，免挂
QQ：免挂
数字人民币：app监控
