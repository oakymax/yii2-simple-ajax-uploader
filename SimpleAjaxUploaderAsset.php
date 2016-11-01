<?php

namespace maxeko\lpology;

use yii\web\AssetBundle;

/**
 * SimpleAjaxUploader Widget Asset
 *
 * @author Maxim Korshunov <korshunov.m.e@gmail.com>
 */
class SimpleAjaxUploaderAsset extends AssetBundle
{
    public $sourcePath = '@bower/simple-ajax-uploader';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        $this->js[] = YII_ENV_DEV ? 'SimpleAjaxUploader.js' : 'SimpleAjaxUploader.min.js';
    }
}