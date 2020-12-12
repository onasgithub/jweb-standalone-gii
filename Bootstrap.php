<?php

namespace jweb\gii;

use yii\base\Application;
use yii\base\BootstrapInterface;


class Bootstrap implements BootstrapInterface
{

    /**
     * Bootstrap method to be called during application bootstrap stage.
     *
     * @param Application $app the application currently running
     */
    public function bootstrap($app)
    {
        if ($app->hasModule('gii')) {

            if (!isset($app->getModule('gii')->generators['j-model'])) {
                $app->getModule('gii')->generators['j-model'] = 'jweb\gii\model\Generator';
            }
            if (!isset($app->getModule('gii')->generators['j-crud'])) {
                $app->getModule('gii')->generators['j-crud'] = 'jweb\gii\crud\Generator';
            }
            if ($app instanceof \yii\console\Application) {
                $app->controllerMap['j-batch'] = 'jweb\gii\commands\BatchController';
            }
        }
    }
}