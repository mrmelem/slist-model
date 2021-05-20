<?php

class Render
{
    public static function Component($component)
    {
        $path = './src/components/' . $component . '/index.php';
        if (file_exists($path))
            return include($path);
        else die($component . " não existe");
    }

    public static function Page($page)
    {
        return include('./src/views/' . $page . '/index.php');
    }
}
