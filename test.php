<?php
$redis = new Redis();
//连接redis服务器
$redis->connect('127.0.0.1', '6379');
var_dump($redis->get(key1));