<?php
use think\facade\Route;

$data = [
    'title' => get_setting('title'),
    'keywords' => get_setting('keywords'),
    'description' => get_setting('description'),
    'footer' => get_setting('footer'),
    'edition' => file_get_contents(ROOT_PATH.'version'),
];
Route::redirect('/enQrcode','index/index/enQrcode?'.http_build_query(input('param.')));
Route::redirect('/checkOrder','index/pay/checkOrder?'.http_build_query(input('param.')));
Route::redirect('/appPush','index/pay/appPush?'.http_build_query(input('param.')));
Route::redirect('/appHeart','index/pay/appHeart?'.http_build_query(input('param.')));
Route::redirect('/submitBd','index/pay/submitBd?'.http_build_query(input('param.')));
Route::redirect('/pay/apiSubmit','/index/pay/apiSubmit?'.http_build_query(input('param.')));
Route::redirect('/appPast','index/pay/appPast?'.http_build_query(input('param.')));
Route::view('/api','index/api',$data);
Route::view('/demo','index/demo',$data);
Route::view('/doc','index/doc',$data);
Route::view('/index1','index/index1',$data);
Route::view('/result','index/result',$data);