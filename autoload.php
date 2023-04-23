<?php
/**
 * Created by PhpStorm.
 * Author: Angry Gun.
 * Date: 2020/5/15 16:31
 */
spl_autoload_register(function ($class) {

    // 这个项目的命名空间前缀
    $prefix = 'Solid\\';

    // 参数传入的类使用这个命名空间前缀吗？
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        // 不适用，交给注册的下一个自动加载器处理；
        return;
    }

    // 获取去掉前缀后的类名
    $relativeClass = substr($class, $len);

    // 把命名空间前缀替换成基目录，
    // 在去掉前缀的类名中，把命名空间分隔符替换成目录分隔符，
    // 然后在后面加上.php
    // 这个命名空间前缀对应的基目录
    $baseDir = __DIR__ . DIRECTORY_SEPARATOR . 'src';
    $file    = $baseDir . DIRECTORY_SEPARATOR . str_replace('\\', '/',
            $relativeClass) . '.php';

    // 如果给文件存在，将其导入
    if (file_exists($file)) {
        require $file;
    }
});

