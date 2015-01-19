<?php
$_SERVER['SCRIPT_FILENAME'] = YII_TEST_WECHAT_ENTRY_FILE;
$_SERVER['SCRIPT_NAME'] = YII_WECHAT_TEST_ENTRY_URL;

/**
 * Application configuration for wechat functional tests
 */
return yii\helpers\ArrayHelper::merge(
    require(APPS_DIR . '/common/config/main.php'),
    require(APPS_DIR . '/common/config/main-local.php'),
    require(APPS_DIR . '/wechat/config/main.php'),
    require(APPS_DIR . '/wechat/config/main-local.php'),
    require(dirname(__DIR__) . '/config.php'),
    require(dirname(__DIR__) . '/functional.php'),
    require(__DIR__ . '/config.php'),
    [
    ]
);
