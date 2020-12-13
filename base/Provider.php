<?php
/**
 * Created by PhpStorm.
 * User: tobias
 * Date: 19.03.14
 * Time: 01:02
 */

namespace jweb\gii\base;


use yii\base\BaseObject;

class Provider extends BaseObject
{
    /**
     * @var \jweb\gii\crud\Generator
     */
    public $generator;
    public $columnNames = [''];
} 