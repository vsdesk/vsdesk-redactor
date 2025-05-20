<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace vsdesk\redactor\widgets;

class RedactorAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/vsdesk/vsdesk-redactor/assets';
    public $depends = ['yii\web\JqueryAsset'];

    public function init()
    {
        if(!file_exists('@vendor/yiidoc/yii2-redactor/assets'))
        {
            if (YII_DEBUG) {
                $this->js[] = 'redactor.js';
                $this->css[] = 'redactor.css';
            } else {
                $this->js[] = 'redactor.min.js';
                $this->css[] = 'redactor.min.css';
            }
        }
    }
}