<?php

include_once('./bin/config.php');

$url = isset($_GET['url']) ? explode('/', $_GET['url'])[0] : 'home';

Render::Component('seo');

if (file_exists('./src/views/' . $url . '/index.php'))
    Render::Page($url);
else
    header('location:' . INCLUDE_PATH);

Render::Component('footer');
