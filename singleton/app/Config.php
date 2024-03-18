<?php

namespace App;

class AppConfig
{
    private static $singleton = null;
    private $options = [];

    private function __construct()
    {
        $this->options = require __DIR__ . '/../config/app_config.php';
    }

    public static function getInstance()
    {
        if (self::$singleton === null)
        {
            self::$singleton = new AppConfig();
        }

        return self::$singleton;
    }

    public function getValue($key)
    {
        return $this->options[$key] ?? null;
    }
}
