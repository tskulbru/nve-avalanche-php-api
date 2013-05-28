<?php

function includeIfExists($file)
{
    if (file_exists($file)) {
        return include $file;
    }
}

if (!$loader = includeIfExists(__DIR__.'/../../../vendor/autoload.php')) {
    echo 'Failed loading autoloader script.';
    exit(1);
}
return $loader;
