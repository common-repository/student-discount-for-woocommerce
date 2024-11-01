<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5652bb4457a8d6bb89db0c8f7cb6bccb
{
    public static $files = array (
        'decc78cc4436b1292c6c0d151b19445c' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpseclib3\\' => 11,
        ),
        'P' => 
        array (
            'ParagonIE\\ConstantTime\\' => 23,
        ),
        'M' => 
        array (
            'Martin\\WcInacademia\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpseclib3\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
        ),
        'ParagonIE\\ConstantTime\\' => 
        array (
            0 => __DIR__ . '/..' . '/paragonie/constant_time_encoding/src',
        ),
        'Martin\\WcInacademia\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Jumbojett\\OpenIDConnectClient' => __DIR__ . '/..' . '/jumbojett/openid-connect-php/src/OpenIDConnectClient.php',
        'Jumbojett\\OpenIDConnectClientException' => __DIR__ . '/..' . '/jumbojett/openid-connect-php/src/OpenIDConnectClient.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5652bb4457a8d6bb89db0c8f7cb6bccb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5652bb4457a8d6bb89db0c8f7cb6bccb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5652bb4457a8d6bb89db0c8f7cb6bccb::$classMap;

        }, null, ClassLoader::class);
    }
}