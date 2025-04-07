<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/health', function () {
    return response()->json(['status' => 'ok']);
});

Route::get('/ip', function () {
    $serverIp = gethostbyname(gethostname()); // Get the server's IP address
    return response()->json(['server_ip' => $serverIp]);
});