<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace vsdesk\redactor\controllers;

use yii\web\Response;

class UploadController extends \yii\web\Controller
{

    public $enableCsrfValidation = false;

    public function behaviors()
    {
        return [
            [
                'class' => 'yii\filters\ContentNegotiator',
                'formats' => [
                    'application/json' => Response::FORMAT_JSON
                ],
            ]
        ];
    }

    public function actions()
    {
        return [
            'file' => 'vsdesk\redactor\actions\FileUploadAction',
            'image' => 'vsdesk\redactor\actions\ImageUploadAction',
            'image-json' => 'vsdesk\redactor\actions\ImageManagerJsonAction',
            'file-json' => 'vsdesk\redactor\actions\FileManagerJsonAction',
        ];
    }

}
