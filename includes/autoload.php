<?php

    spl_autoload_register('autoload');

    function autoload($className): void
    {
        require "../classes/$className.php";
    }