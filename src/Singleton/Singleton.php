<?php
namespace Pattern\Singleton;

class Singleton
{

    private static $instance;

    private function __construct()
    {
        echo 'インスタンス生成しました';
    }

    public static function getInstance()
    {
        return self::$instance ?? self::$instance = new self();
    }
}
