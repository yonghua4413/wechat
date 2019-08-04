<?php

namespace yonghua4413\wechat;

class Factory
{
    public static function make($namespace, array $config)
    {
        $application = "\\yonghua4413\\wechat\\{$namespace}\\Application";
        return new $application($config);
    }

    public static function __callStatic($name, $arguments)
    {
        return self::make($name, ...$arguments);
    }
}