In file
_laradock/php-fpm/xdebug.ini_
set 
```
xdebug.remote_enable=1
```
and set ip of phpstorm machine (where opens debug site in a browser) ```var_dump($_SERVER['REMOTE_ADDR']);```
```
xdebug.remote_host=192.168.97.1
```

[Best documentation](https://github.com/laradock/laradock/blob/master/_guides/phpstorm.md)