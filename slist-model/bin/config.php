<?php


function MyAutoLoad($class)
{
    if (file_exists('./src/functions/' . $class . '.php')) {
        include('./src/functions/' . $class . '.php');
    } else {
        die('Classe ' . $class . ' não encontrada');
    }
}

spl_autoload_register('MyAutoLoad');

define('INCLUDE_PATH', '/slist/models/slist-model/');


die(INCLUDE_PATH);