<?php

namespace vsdesk\redactor\actions;

use Yii;
use yii\base\Action;
use vsdesk\redactor\models\FileUploadModel;

/**
 * @author Nghia Nguyen <yiidevelop@hotmail.com>
 * @since 2.0
 */
class FileUploadAction extends Action
{
    function run()
    {
        if (isset($_FILES)) {
            $model = new FileUploadModel();
            if ($response = $model->upload()) {
                return $response;
            } else {
                return ['error' => 'Unable to save file'];
            }
        }
    }

}
