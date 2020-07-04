# easy-qq-info
非QQ授权的情况下，根据QQ号码解析出QQ昵称与QQ头像地址

## 官网
<a href="http://www.qianduanwang.vip" target="_blank">共享屋素材</a>

## 更多分享信息内容请关注我的公众号：程序猿的栖息地
![程序猿的栖息地](http://www.qianduanwang.vip/uploads/layedit/20200701/3bc47221b2cc967887b9e7f661d21e2c.jpg)

## 安装

```shell
$ composer require zhengbingdong/easy-qq-info
```

phpstudy重写：
```
<IfModule mod_rewrite.c>
Options +FollowSymlinks -Multiviews
RewriteEngine on
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^(.*)$ index.php [L,E=PATH_INFO:$1]
</IfModule>
```
