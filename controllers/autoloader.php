<?php

function controllersDirAutoloader($className) {
    // Путь до файла
    $fileName = __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
    // Если файл существует, то вызываем require и говорим spl-автозагрузчику, что все ок
    if (file_exists($fileName)) {
        require_once $fileName;
        return true;
    }
    // Все не ок. Мы не знаем, что это за файл
    return false;
}

// Регистрируем нашу функцию автозагрузки
spl_autoload_register('controllersDirAutoloader');
