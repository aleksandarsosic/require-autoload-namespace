<?php

    spl_autoload_register('firstAutoload');

    function firstAutoload($filename) {

        $path = "/tasks/";
        $ext = ".class.php";
        $fullName = __DIR__ . $path . str_replace('\\', '/', $filename) . $ext;

        if(file_exists($fullName)) {

            require_once $fullName;

        }

    }