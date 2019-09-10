<?php
/**
 * Created by IntelliJ IDEA.
 * User: qweqwe
 * Date: 18-8-27
 * Time: 下午5:39
 */

return [
    'telegram_config'  => [
        'url'=>'https://api.telegram.org',
        'chat_id'=>-255865231,
        'token'=>'691962864:AAGNeaPi-ZRuRvuCSgt_gWESRiEVz7w7PxA',
    ],
    'redis_prefix' 	=> '', // redis缓存前缀
    'redis_url'		=> '172.17.0.1', // redisurl
    'redis_port'	=> '6379', // 端口

    // 上传服务器配置
    "upload_url"=>'http://upload.bxvip588.com',
    "origin"    => [
        "alipay1",
        "alipay2",
        "alipay3",
        "alipay4",
        "alipay5",
        "alipay6",
        "alipay7",
        "alipay8",
        "alipay9",
        "alipay10",
        "alipay11",
        "alipay13",
    ],
    'rabbitmq'  => [
        'prefix'    => 'newazure10',
        'host'=>'18.179.234.115',
        'port'=>5672,
        'user'=>'rabbitmq',
        'pass'=>'rabbitmq',
    ],
    'shoprabbitmq'  => [
        'prefix'    => 'newazure10',
        'host'=>'52.193.153.219',
        'port'=>5672,
        'user'=>'rabbitmq',
        'pass'=>'8fh8kFn95WvK',
    ],
];