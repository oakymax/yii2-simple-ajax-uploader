<?php

namespace maxeko\lpology;

use yii\base\Widget;
use yii\helpers\Json;

/**
 * SimpleAjaxUploader Widget
 *
 * @author Maxim Korshunov <korshunov.m.e@gmail.com>
 */
class SimpleAjaxUploaderWidget extends Widget
{
    /**
     * @var array $options https://www.lpology.com/code/ajaxuploader/docs.php
     */
    public $options = [];

    /**
     * @inheritdoc
     */
    public function run()
    {
        $view = $this->getView();

        SimpleAjaxUploaderAsset::register($this->view);

        $jsOptions = Json::encode($this->options);
        $view->registerJs("new ss.SimpleUpload({$jsOptions});");
    }
}