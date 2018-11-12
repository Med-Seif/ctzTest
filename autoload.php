<?php
/**
 * @author Seif
 */
spl_autoload_register(
    function ($class) {
        $locations = [
            'src',
        ];
        foreach ($locations as $location) {
            $base_dir = __DIR__.'/'.$location.'/';
            $file = $base_dir.str_replace('\\', '/', $class).'.php';
            if (file_exists($file)) {
                require_once $file;

                return;
            }
        }
    }
);