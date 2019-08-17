<?php

namespace YongHua4413\WeChat;

class Factory
{
    public static function make($namespace, array $config)
    {
        $application = "\\YongHua4413\\{$namespace}\\Application";
        return new $application($config);
    }

    public static function __callStatic($name, $arguments)
    {
        return self::make($name, ...$arguments);
    }
}