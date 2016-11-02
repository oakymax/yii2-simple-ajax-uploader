<?php

namespace maxeko\lpology;

use yii\base\Widget;
use yii\helpers\Json;

/**
 * SimpleAjaxUploader Widget
 * https://www.lpology.com/code/ajaxuploader/docs.php
 *
 * @author Maxim Korshunov <korshunov.m.e@gmail.com>
 */
class SimpleAjaxUploader extends Widget
{
    /**
     * @var array $settings
     */
    public $settings = [];

    /**
     * @var array $callbacks
     */
    public $callbacks = [];

    /**
     * @inheritdoc
     */
    public function run()
    {
        $view = $this->getView();

        SimpleAjaxUploaderAsset::register($this->view);

        $jsOptions = [];
        foreach ($this->settings as $key => $value) {
            $jsOptions[] = "{$key}:\"{$value}\"";
        }
        foreach ($this->callbacks as $key => $value) {
            $jsOptions[] = "{$key}:{$value}";
        }
        $jsOptions = join(',', $jsOptions);
        $view->registerJs("new ss.SimpleUpload({{$jsOptions}});");
    }
}